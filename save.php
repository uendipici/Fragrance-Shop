<?php 
if(isset($_POST['submit'])){
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST["subject"];
$message = $_POST["message"];
$conn = mysqli_connect("localhost","root","","contactform_db")or die("Connection failed") ;
$sql = "INSERT INTO users(name,email,subject,message) VALUES ('{$name}','{$email}', '{$subject}','{$message}')";
$result = mysqli_query($conn, $sql) or die ("Query Failed!");
header("location: contact.php");
mysqli_close($conn);
}


?>