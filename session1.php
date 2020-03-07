<?php 
session_start();
if (isset($_POST['login'])){
$uname= $_REQUEST['username'];
 $pass= $_REQUEST['password'];
 $_SESSION['uname'] = $uname;
 $_SESSION['pass'] = $pass;
 echo "<script>location.href='welcome.php'</script>";	
} 
/*print_r($_SESSION);*/
?>
<!DOCTYPE html>
<html lang="en-us">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device width,initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="" method="POST">
		username: <input type="text" name="username" id="username"><br><br>
		password: <input type="text" name="password" id="password"><br><br>
		<input type="submit" value="Login" name="login">
	</form>
</body>

</html>