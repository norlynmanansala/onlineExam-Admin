<?php 
	include 'config.php';
	$num = $_GET['id'];
	$sql = mysql_query("select * from question1 where id = '$num'");
	$rows = mysql_fetch_assoc($sql);
	echo json_encode(
		array(
			'id_no'=>$rows['id'],
			'tanong'=> $rows['question'],
			'choiceA'=>$rows['choiceA'],
			'choiceB'=>$rows['choiceB'],
			'choiceC'=>$rows['choiceC'],
			'choiceD'=>$rows['choiceD']
			)
	);
 ?>