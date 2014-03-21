<?php 
include 'config.php';
include 'examDAO.php';
session_start();
$answer = $_SESSION['answer'];
$sql = examDAO::compute($answer);
echo $answer;
 ?>

 <h1><?=$sql?></h1>