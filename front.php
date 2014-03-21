<html>
<head>
	<title>Online Examination</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/global.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
	<div>
		<div>
			<div class="header">
				<div class="back2" style = "background: url('img/1.jpg');">
					<ul class = "nav navbar-tabs">
						<li class = "pull-right navbar-tabs" style = "margin-right:30px"><a href="middle.php" class = "navbar navbar-tabs login">Log In</a></li>
					</ul>
					<div class="span4">
						<h2>Online Examination</h2>
					</div>
				</div>
			</div>
			<div class="container span12" style = "margin-top:50px;float:center">
				<div class="thumbnail" style = "background:url('img/j.jpg')">
					<div class="page-header">
						<h3 align = "center">Registration Form</h3>
					</div>
					<br>
					<table align = "center">
						<form action = "coding.php" method = "POST">
							<tr>
								<td>First Name:</td>
								<td><input type= "text" name ="fname"/></td>
							</tr>
							<tr>
								<td>Last Name:</td>
								<td><input type= "text" name = "lname"/></td>
							</tr>	
							<tr>
								<td>Email:</td>
								<td><input type= "email" name="email"/></td>
							</tr>
							<tr>
								<td>Password:</td>
								<td><input type= "password" name="password"/></td>
							</tr>
							<tr>
								<td>Confirm Password:</td>
								<td><input type= "password" name= "confirm"/></td>
							</tr>
							<tr>
								<td><input type="submit" value = "Confirm" class = "btn btn-primary"></td>
							</tr>	
						</form>
					</table>
				</div>
			</div>
		</div>
	</div>
</body>
</html>