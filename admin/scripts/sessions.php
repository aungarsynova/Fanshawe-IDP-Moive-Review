<?php
    session_start();

    function confirm_logged_in(){
        if(!isset($_SESSION['user_id'])){
            redirect_to('admin_login.php');
        }
    }
//session clear out after loggin out
    function logged_out(){
        session_destroy();

        redirect_to('../admin_login.php');
    }

    //Session expire tutorial http://thisinterestsme.com/expire-php-sessions/
    //Available in Readme file as well

    //Expire the session if user is inactive for 15

$expireAfter = 15;
 
//Check to see if our "last action" session
//variable has been set.
if(isset($_SESSION['last_action'])){
    
    //Figure out how many seconds have passed
    //since the user was last active.
    $secondsInactive = time() - $_SESSION['last_action'];
    
    //Convert our minutes into seconds(15 mins multuplied by 60)
    $expireAfterSeconds = $expireAfter * 60;
    
    //Check to see if they have been inactive for over 15 minutes
    if($secondsInactive >= $expireAfterSeconds){
        //User has been inactive for too long.
        //Kill their session.
        session_unset();
        //and redirect to login again
        session_destroy('../admin_login.php');
    }
    
}
 
//Assign the current timestamp as the user's
//latest activity
$_SESSION['last_action'] = time();
?>