<?php


session_start();

require 'connect.php';

if(isset($_POST['crud-type'])){
    $crud = $_POST['crud-type'];
    switch($crud){
        case 'add':
            addUser($conn);
            break;
        case 'edit':
            editUser($conn);
            break;
        case 'delete':
            deleteUser($conn);
            break;
        case 'get':
            getUser($conn);
            break;
        case 'login':
            login($conn);
            break;
    }
}
function login($conn){
    $resp['success'] = false;
    if(($_POST['username'] != null || !isset($_SESSION['user'] ))  ){
        $username = $_POST['username'];
        $pwd = hash('sha256',$_POST['password']);
        
        $sql = "SELECT * from users where username = '$username' and password = '$pwd'";
        $result = $conn->query($sql);
        
        if ($result && $result->num_rows == 1) {
            $data = mysqli_fetch_assoc($result);
            $_SESSION['user'] = $data;
            
            mysqli_close($conn);
            $resp['success'] = true;
        }
        
    }

    echo json_encode($resp);
}
function addUser($conn){

    $response['success'] = false;   
    $hhistory_id = $_POST['id'];
    $temperature = $_POST['temperature'];
    $heart_rate = $_POST['bpm'];
    $respiratory_rate = $_POST['rbpm'];
    $result = $_POST['result'];
    $date = $_POST['date'];

    $sql = "INSERT INTO hist_vitals (hhistory_id,temperature,heart_rate,respiratory_rate,result,date) VALUES ('$hhistory_id',
    '$temperature','$heart_rate','$respiratory_rate','$result','$date')";
    
    if ($conn->query($sql) === TRUE) {
        $sql = "SELECT * from hist_vitals where hhistory_id = '$hhistory_id'";
        $res = $conn->query($sql);
        if ($res && $res->num_rows > 0) {
            $data = [];
            while($row = mysqli_fetch_assoc($res)){
                $data[] = $row;
            }
            $response['data'] = $data;
            $response['success'] = true;
        }
    }

    echo json_encode($response);
}
function editUser($conn){
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
function deleteUser($conn){
    $resp['success'] =false;
    $id = $_POST['id'];
    $sql = "DELETE FROM hist_health where id = '$id'";
    if ($conn->query($sql) === TRUE) {
        $resp['success'] = true;
        echo json_encode($resp);
    }
}
    

function getHealth($conn){
    $id = $_POST['id'];
    $resp['success'] = false;
    $sql = "SELECT * from hist_vitals where hhistory_id = '$id' order by date desc";
    $result = $conn->query($sql);
    if ($result && $result->num_rows > 0) {
        $data = []; 
        while($row = mysqli_fetch_assoc($result)){
            $data[] = $row;
        }
        $resp['success'] = true;
        $resp['data'] = $data;
        
    }
    
    echo json_encode($resp);
}
?>