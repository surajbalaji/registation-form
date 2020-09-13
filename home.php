<?php
$name = $_POST['name'];
$email = $_POST['email'];
$psw = $_POST['psw'];
$psw-repeat = $_POST['psw-repeat'];


$conn = new mysqli('localhost','root','','suraj');
if($conn->connect_error){
    die('connection failed   :' .$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration(name,email,psw,psw-repeat)
    values(?,?,?,?)")
    $stmt->bind_param("sssssssi",$name, $email,  $pwd, $repwd);
    $stmt->execute();
    echo"registration successfuly...";
    $stmt->close();
    $stmt->close();
}

?>