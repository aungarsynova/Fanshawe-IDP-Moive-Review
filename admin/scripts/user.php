<?php 
	function createUser($fname,$username,$password,$email){
		include('connect.php');
		//rnadom password generator from the system
		//refer to create_pw.php
		//require_once('create_pw.php');
		//gives me an error when i try to check. says that random_password function doesnt exist, but I do have in create_pw.php and in config.php
		//was not sure what caused the error. checked stackoverflow to see what people would suggest. tried to include reuiqre once here and delete then recreate create_pw.php again
		//did not work. probably won't get a grade for that, but would be thankful if you could explain in the grade feedback why I kept getting an error. Thank u!
		$new_pw = random_password(8);
		

		$create_user_query = 'INSERT INTO tbl_user(user_fname,user_name,user_pass,user_email)';
		$create_user_query .= ' VALUES(:fname,:username,:password,:email)';
		$create_user_set = $pdo->prepare($create_user_query);
		$create_user_set->execute(
			array(
				':fname'=>$fname,
				':username'=>$username,
				':password'=>$new_pw,
				':email'=>$email
			)
		);

		//sending an eail when a new user is created
		//refer to send_email.php
		if($create_user_set->rowCount()){
			echo 'Thanks, your account has been created! Check your email';
            send_email($fname, $email, $username, $new_pw);
            //redirect_to('index.php');
        }else {
            $message = 'An error has occured. Try again later';
			return $message;
		}
	}
	function deleteUser($id){
		include('connect.php');
		$delete_user_query = 'DELETE FROM tbl_user WHERE user_id = :id';
		$delete_user = $pdo->prepare($delete_user_query);
		$delete_user->execute(
			array(
				':id'=>$id
			)
		);
		if($delete_user){
			redirect_to('../index.php');
		}else{
			$message = 'Not deleted yet..';
			return $message;
		}
		
		//4.* (Dev) What's the security concern here???
	}
	?>