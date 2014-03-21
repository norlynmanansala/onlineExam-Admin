<?php 
include 'config.php';
session_start();
define('stop', 10);
$answer = (isset($_POST['answer']))?$_POST['answer']:"";
$id = (isset($_POST['id']))?$_POST['id'] + 1 : 1;
$choice = (isset($_POST['choice']))?$_POST['choice']:"";
$answer .= $choice;

if($id > stop){
	$_SESSION['answer'] = $answer;
	header('Location: result.php');
}
$sql = mysql_query("select * from  question1 where question_id = '$id'");
$result = mysql_fetch_assoc($sql);
 ?>

<html>
<script type="text/javascript" src = "jquery.1.10.2.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('#start').click(function(){
		if($('#a').is(":checked")){
			return true;
		}else if ($('#b').is(":checked")){
			return true;
		}else if ($('#c').is(":checked")){
			return true;
		}else if ($('#d').is(":checked")){
			return true;
		}else{
			alert("baliw wala kng sagt");
			return false;
		}
	});
});
</script>
<head>
	<title>Online Examination</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/global.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="header">
		<div class="back2" style = "background: url('img/1.jpg');">
			<ul class = "nav navbar-tabs">
				<li class = "pull-right navbar-tabs" style = "margin-right:30px"><a href="middle.php" class = "navbar navbar-tabs login">Log out</a></li>
			</ul>
			<div class="span4">
				<h2>Online Examination</h2>
			</div>
		</div>
	</div>
	<div class="container" style = "margin-top:50px;float:center">
		<div class="span12" style = "float:center;margin-top:50px">
			<div class="page-header">
				<h2 align = "center" class = "headerTest">Online Examination</h2>
			</div>
		</div>
		<form method = "post" action = "question.php">
			<div>
				<input type = 'hidden' name= 'answer' value='<?=$answer?>'>
				<input type = 'hidden' name= 'id' value='<?=$id?>'>
				<div id = "quest"><span id = "question"><?= $result['question_id'] ?>.)&nbsp;<?=$result['question']?></span></div>
				<div id = "A">&nbsp;&nbsp;&nbsp;<input type = "radio" name = "choice" id = "a" value ="a"><?=$result['choice_a']?></div>
				<div id = "B">&nbsp;&nbsp;&nbsp;<input type = "radio" name = "choice" id = "b" value ="b"><?=$result['choice_b']?></div>
				<div id = "C">&nbsp;&nbsp;&nbsp;<input type = "radio" name = "choice" id = "c" value ="c"><?=$result['choice_c']?></div>
				<div id = "D">&nbsp;&nbsp;&nbsp;<input type = "radio" name = "choice" id = "d" value ="d"><?=$result['choice_d']?></div>
			</div>
			<button id = "start" class = "btn btn-primary">START</button>
		</form>
	</div>
</body>
</html>