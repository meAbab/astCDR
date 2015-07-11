<?php
include('conn_login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: astcdr.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Asterisk CDR Login PAGE</title>
<link href="design.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main">
<h1>Asterisk CDR LOGIN</h1>
<div id="login">
<h2>Login </h2>
<form action="" method="post">
<label>User :</label>
<input id="name" name="username" type="text">
<label>Password :</label>
<input id="password" name="password" type="password">
<input name="submit" type="submit" value=" Login ">
<span><?php echo $error; ?></span>
</form>
</div>
</div>
</body>
</html>
