<html>
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
				<li class = "pull-right navbar-tabs" style = "margin-right:30px"><a href="front.php" class = "navbar navbar-tabs">Register</a></li>
			</ul>
			<div class="span4">
				<h2>Online Examination</h2>
			</div>
		</div>
	</div>
	<div class="container span12" style = "margin-top:50px;float:center">
		<div class="thumbnail span4" style = "background:url('img/j.jpg')">
			<table align = "center">
				<form method = "post" action ="validate.php">
					<tr>
						<td>Email: </td>
						<td><input type = "email" name = "email"></td>
					</tr>
					<tr>
						<td>Password: </td>
						<td><input type = "password" name = "pass"></td>
					</tr>
					<tr>
						<td><input type= "submit" value = "Log In" class = "btn btn-primary" /></td>
					</tr>
				</form>
			</table>
		</div>
	</div>
	
</body>
</html>