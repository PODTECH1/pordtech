<?php
$host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "hosting";


$conn = new mysqli($host,$db_user,$db_pass,$db_name);

//check connection
if($conn->connect_error){
    die("Connection failed:". $conn->connect_error);
}
$name = filter_input (INPUT_POST, 'name');
$email = filter_input (INPUT_POST, 'email');
$message = filter_input (INPUT_POST, 'message');

//insert into database
$sql="INSERT INTO portfolio (name,email,message) VALUES ('$name','$email','$message')";

if($conn->query($sql)=== TRUE){
    echo"Message sent successfully!";
}else{
    echo"Error:".sql."<br>".$conn->error;
}
$conn->close();
?>