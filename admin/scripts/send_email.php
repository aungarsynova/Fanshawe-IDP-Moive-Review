<?
//Send email function
//overflow link, also losted in readme:
//https://stackoverflow.com/questions/5335273/how-to-send-an-email-using-php
function send_email($fname,$username,$password,$email) {
    $name = $user_fname;
    $email = $user_email;
    $subject = 'Subject: Here is your new account info';
    $message = 'Message: Your account has been successfully created! Your username is'.$user_name.' Your password is:'.$user_pass.;
    $to = $user_email;
    $headers = 'From: noreply@movies.com' . '\r\n';
    mail($to, $subject, $message, $headers);
}
?>