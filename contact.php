<?php
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Message = $_POST['Message'];
$conn = new mysqli('localhost','root','root','contactphp');
if($conn->connect_error){
    die('connection failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into contactphp(Name, Email, Message) values(?, ?, ?)");
    $stmt->bind_param("sss",$Name, $Email, $Message);
    $stmt->execute();
    echo "registration successfully...";
    $stmt->close();
    $conn->close();
}