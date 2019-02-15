<?php 
    //check if user is loged in
	require_once('scripts/config.php');
    confirm_logged_in();
    //only create user when submitted
	if(isset($_POST['submit'])){
		//Do some preprocess for the data
		// if user adds uneccessary spaces, trim gets rid of space before and after string
		$fname = trim($_POST['fname']);
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		$email = trim($_POST['email']);
		//Validation?
		if(empty($username) || empty($password) || empty($email)){
			$message = 'Please fill the required fields';
		}else{
            //creates user as a result
			$result = createUser($fname,$username,$password,$email);
			
			$message = $result;
		}
	}
?>

<!--user create form-->
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Create User</title>
</head>
<body>
	<?php if(!empty($message)):?>
		<p><?php echo $message;?></p>
	<?php endif;?>
	<h2>Create User</h2>
	<form action="admin_createuser.php" method="post">
		<label for="first-name">First Name:</label>
		<input type="text" id="first-name" name="fname" value=""><br><br>

		<label for="username">User Name:</label>
		<input type="text" id="username" name="username" value=""><br><br>

		<label for="email">Email:</label>
		<input type="email" id="email" name="email" value=""><br><br>

		<label for="password">Password:</label>
		<input type="text" id="password" name="password" value=""><br><br>

		<button type="submit" name="submit">Create User</button>
	</form>

</body>
</html>