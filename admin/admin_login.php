<?php
	require_once('scripts/config.php');
	if(!empty($_POST['username']) && !empty($_POST['password'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$ip = $_SERVER['REMOTE_ADDR'];
		$message = login($username, $password, $ip);	
	}else{
		if(isset($_POST['username']) || isset($_POST['password'])){
			$message = 'Please fill the required fields';
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
</head>
<body>
    <form action="admin_login.php" method="POST" class="admin_login">
        <h1 class="header_stuff">Input username and password</h1>
        <label>Username
            <input type="text" name="username" value="" placeholder = "admin">
        </label>
        <label>Password:
            <input type="password" name="password" placeholder = "123" >
        </label>
        <button type="submit">Submit</button>
    </form>
</body>
</html>