<?php
    function login($username, $password) {
        require_once('connect.php');
        //check if the user even exist
        $check_exist_query = 'SELECT COUNT(*) FROM tbl_user WHERE user_name="'.$username.'"';
        $user_set = $pdo->prepare($check_exist_query);
        $user_set->execute(
            array(
                ':user_name'=>$username
            )
        );
        //if there is 1 or more users
        if($user_set->fetchColumn()>0){
            //When user exists, then check if user info is validated
            $get_user_query = 'SELECT * FROM tbl_user WHERE user_name = :username AND user_pass = :password';
            $get_user_set = $pdo->prepare($get_user_query);

            $get_user_set->execute(
                array(
                    ':username'=>$username,
                    ':password'=>$password
                )
            );
            //user input matches the ones in the database
            while($found_user = $get_user_set->fetch(PDO::FETCH_ASSOC)){
                $id = $found_user['user_id'];
                $_SESSION['user_id'] = $id;
                $_SESSION['user_name'] = $found_user['user_fname'];
            }

            if(empty($id)){
                $message = 'Login Failed';
                return $message;
            }

            redirect_to('index.php');
            }else{
                echo 'You dont exist';
            }
        //check if their password matches the one in your database a.k.a. validate
    }
?>