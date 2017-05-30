<?php
	Session_start();
	If(IsSet($_POST['submitlogin']))
	{
		if($_POST['username'] == "it" && $_POST['password'] == "ubuntu")
		{
			$_SESSION['Username'] = "Meneder";
			header('Location: http://localhost/MEDT/hue_sessions/projectview.php');
			exit();
		}
	}
	
	
	if(IsSet($_GET['logout']))
	{
		Session_unset();
		Session_destroy();
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<title>Project DB</title>
		<style>.glyphicon {margin-right:20px;}</style>
	</head>
	<body>
		<div class="container">
			<form method="post" action="#">
				<p>Benutername:</p>
				<input type="text" name="username">
				<p>Passwort</p>
				<input type="password" name="password">
				<input type="submit" name="submitlogin">
				
				
			</form>
				
			
		</div>
	</body>
</html>
