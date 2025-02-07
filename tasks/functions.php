<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "jsg";
// $servername = "localhost";
// $username = "u809621508_jsg";
// $password = "Lt!k!/zadZ&2";
// $db = "u809621508_jsg";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    // echo "Connected successfully";
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
    return $data;
}
function getActiveTask($conn){
    $sql = "SELECT * from tasks where submitted_by = ".$_SESSION['user']['id'];
    $result = $conn->query($sql);
    $data = [];
    if ($result && $result->num_rows == 1) { 
        $data = mysqli_fetch_assoc($result);
    }
    return $data;
}
function getActiveTasks($conn){
    $sql = "SELECT a.*,b.name as fullname, b.contact from tasks a join users b on a.submitted_by = b.id where a.submitted_by != 0 and a.submitted_on = NULL";
    $result = $conn->query($sql);
    $data = [];
    if ($result && $result->num_rows > 0) { 
        while($row = mysqli_fetch_assoc($result)){
            $data[] = $row;
        }
    }
    return $data;
}
function getPending($conn,$type = 1){
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
    return $data;
}
function getCompleted($conn,$type = 1){
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
    return $data;
}

?>