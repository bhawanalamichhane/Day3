<?php
include 'config.php';
$stmt = $conn->prepare("insert into users (name, pass, email) VALUES (?,?,?)");
$stmt->bind_params("sss",$name, $pass, $email);

//set parameters and execute
$name = "abcd";
$pass = "abcd1234";
$email = "abc@gmail.com";
$stmt->execute();

$name = "cat";
$pass = "cat123CC";
$email = "cat@gmail.com";
$stmt->execute();


echo "New records added";
$stmt->close();
mysqli_close($conn); 

?>
