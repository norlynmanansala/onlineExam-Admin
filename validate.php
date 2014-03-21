<?php 
require_once 'config.php';
$email = $_POST['email'];
$password = $_POST['pass'];

$sql = mysql_query( "SELECT * FROM examinee where email = '$email' And password = '$password'");
if($sql){
	header("location:question.php");
}
 ?>