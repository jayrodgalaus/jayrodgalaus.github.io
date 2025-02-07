<?php


session_start();

require 'connect.php';

if(isset($_POST['crud-type'])){
    $crud = $_POST['crud-type'];
    switch($crud){
        case 'add':
            addTask($conn);
            break;
        case 'edit':
            editTask($conn);
            break;
        case 'delete':
            deleteTask($conn);
            break;
        case 'getAvailable':
            getAvailableTasks($conn);
            break;
        case 'active':
            getActiveTask($conn);
            break;
        case 'getActive':
            getActiveTasks($conn);
            break;
        case 'getPending':
            getPending($conn);
            break;
        case 'getCompleted':
            getCompleted($conn);
            break;
    }
}

function addTask($conn){

    $response['success'] = false;   
    $name = $_POST['name'];
    $description = mysqli_real_escape_string($conn,htmlentities($_POST['description']));
    $days = $_POST['days'];
    $price = $_POST['price'];
    $type = $_POST['type'];
    $created_by = $_SESSION['user']['id'];
    $created_on = date('Y-m-d h:i:s');
    $deadline = isset($_POST['deadline']) ? date_create($_POST['deadline']): null;
    $columns = 'title,description,price,type,created_by,created_on';
    $values = "'$name','$description','$price','$type','$created_by','$created_on'";
    
    if($deadline != null){
        $columns .= ',deadline';
        
        $values .= ",'".date_format($deadline,'Y-m-d H:i:s')."'";//$deadline;
    }else{
        $columns .=",days";
        $values .= ",'$days'";  
    }

    $sql = "INSERT INTO tasks ($columns) VALUES ($values)";
    // die($sql);
    if ($conn->query($sql) === TRUE) {        
        $response['success'] = true;
    }

    echo json_encode($response);
}
function editTask($conn){
    $response['success'] = false;
    $name = isset($_POST['name']) ? $_POST['name'] : null;
    $username = isset($_POST['username']) ? $_POST['username'] : null;
    $contact = isset($_POST['contact']) ? $_POST['contact'] : null;
    $email = isset($_POST['email']) ? $_POST['email'] : null;
    $address = isset($_POST['address']) ? $_POST['address'] : null;
    $status = isset($_POST['status']) ? $_POST['status'] : null;
    $id = $_POST['id'];
    $sql = "UPDATE user set name = '$name',username = '$username',contact = '$contact',email = ".($email == null? "NULL":"'$email'").",address = '$address',disabled = '$status' where id = '$id'";
    
    if ($conn->query($sql) === TRUE) {
        $farmers = [];
        $fid = $_SESSION['user']['farm_id'];
        $sql = "SELECT * from user where farm_id = '$fid'";
        $result = $conn->query($sql);
        if($result && $result->num_rows > 0){
            while($row = mysqli_fetch_assoc($result)){
                $farmers[] = $row;
            }
            $_SESSION['farmers'] = $farmers;
            $response['success'] = true;
        }
    }
    echo json_encode($response);
}
function deleteTask($conn){
    $resp['success'] =false;
    $id = $_POST['id'];
    $sql = "DELETE FROM hist_health where id = '$id'";
    if ($conn->query($sql) === TRUE) {
        $resp['success'] = true;
        echo json_encode($resp);
    }
}
function getAvailableTasks($conn){
    // session_start();
    $usertype = $_SESSION['user']['usertype'];
    
    $sql = "SELECT a.*, b.name, c.name as company from tasks a 
    join users b on a.created_by = b.id 
    join companies c on b.company = c.id";
    $sql.=" where submitted_by = 0";
    if($usertype == 1){$sql.= " and created_by = ".$_SESSION['user']['id'];}
    $sql .= " ORDER BY a.created_on";
    $result = $conn->query($sql);
    $data = [];
    if ($result && $result->num_rows > 0) { 
        while($row = mysqli_fetch_assoc($result)){
            // $row['description'] = nl2br($row['description']);   
            $data[] = $row;
        }
    }
    $file = "../tasks/availables.php";
    $activeTask = [];
    if($usertype == 2){ $activeTask = getActiveTask($conn);}
    $datas =[$data,$activeTask];
    $html = render($file,$datas);
    echo json_encode($html);
}
function getActiveTask($conn){
    $sql = "SELECT a.*, b.name, b.contact, b.email, c.name as company from tasks a 
    join users b on a.created_by = b.id 
    join companies c on b.company = c.id 
    where a.submitted_by = ".$_SESSION['user']['id'];
    $result = $conn->query($sql);
    $data = [];
    if ($result && $result->num_rows == 1) { 
        $data = mysqli_fetch_assoc($result);
    }
    return $data;
}
function getActiveTasks($conn){
    $sql = "SELECT a.*, b.name from tasks a 
    join users b on a.submitted_by = b.id 
    where a.submitted_by != 0 and a.submitted_on is NULL";
    $result = $conn->query($sql);
    $data = [];
    if ($result && $result->num_rows > 0) { 
        while($row = mysqli_fetch_assoc($result)){
            $data[] = $row;
        }
    }
    $file = "../tasks/actives.php";
    $datas = [$data,getActiveTask($conn)];
    $html = render($file,$datas);
    echo json_encode($html);
}
function getPending($conn){
    $type = $_SESSION['user']['usertype'];
    $sql = "SELECT a.*,b.name as fullname, b.contact from tasks a join users b on a.submitted_by = b.id where a.completed_on is NULL";
    if($type == 1){
        $sql.= " and a.submitted_by != 0 and a.submitted_on is not NULL ";
    }else{
        $sql.= " and a.submitted_by = ".$_SESSION['user']['id']." and a.submitted_on is not NULL ";
    }
    $result = $conn->query($sql);
    $data = [];
    if ($result && $result->num_rows > 0) { 
        while($row = mysqli_fetch_assoc($result)){
            $data[] = $row;
        }
    }
    $file = "../tasks/pending.php";
    $html = render($file,$data);
    echo json_encode($html);
}
function getCompleted($conn){
    $type = $_SESSION['user']['usertype'];
    $sql = "SELECT a.*,b.name as fullname, b.contact from tasks a join users b on a.submitted_by = b.id where a.completed_on is not NULL";
    if($type == 2){
        $sql.= " and a.submitted_by = ".$_SESSION['user']['id'];
    }
    $result = $conn->query($sql);
    $data = [];
    if ($result && $result->num_rows > 0) { 
        while($row = mysqli_fetch_assoc($result)){
            $data[] = $row;
        }
    }
    $file = "../tasks/completed.php";
    $html = render($file,$data);
    echo json_encode($html);
}
function render($file, $data = []){
    ob_start();
    include($file);
    return ob_get_clean();
}
?>