<?php
    require_once('scripts/config.php');
    confirm_logged_in();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Your Admin Panel</title>
</head>
<body>
    <h1>Admin Dashboard</h1>
    <h2>Welcome 
    <!--Echo users name on a welcome page-->
    <?php echo $_SESSION['user_name'];?></h2>

    <?php
    //https://krazytech.com/programs/php-display-last-visited-date-time
    //Not a tutorial, but an example with some explanations
    //Set your timezone
     date_default_timezone_set('America/Toronto');
     $inTwoMonths = 60 * 60 * 24 * 60 + time();
        //set date and time credentials
        //Y-for year, m-for month, d-for date, h-12h format(use g for 24h format), i-minute, s-second
    setcookie('lastVisit', date("Y-m-d h:i:s"), $inTwoMonths);
    if(isset($_COOKIE['lastVisit']))
 
{
    //echo last visit info on a page
$visit = $_COOKIE['lastVisit'];
echo "Your last visit was - ". $visit;
}
?>

<p>
        <?php
            $visit_time = date('H');
            //If before 12PM
            if ($visit_time < "12") {

                echo "Good morning!";
            }
            //If between 12PM and 5PM 
            else if ($visit_time >= "12" && $visit_time < "17") {

                echo "Good afternoon!";
            }
            else if ($visit_time >= "17" && $visit_time < "21") {

                echo "Good night!";
            }
            //
            else {
                echo "Can't sleep?";
            }
        ?>
     </p>
     



    <nav>
        <ul>
        <li><a href="admin_createuser.php">Create User</a></li>
			<li><a href="admin_edituser.php">Edit User</a></li>
			<li><a href="admin_deleteuser.php">Delete User</a></li>
			<li><a href="scripts/caller.php?caller_id=logout">Sign Out</a></li>
        </ul>

        <ul>
			<li><a href="admin_addmovie.php">Add Movie</a></li>
		</ul>
        
    <nav>
    
</body>
</html>