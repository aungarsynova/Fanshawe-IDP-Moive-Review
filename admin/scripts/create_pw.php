<?
//random password creation function link to overflow: 
//https://stackoverflow.com/questions/6101956/generating-a-random-password-in-php
//https://hugh.blog/2012/04/23/simple-way-to-generate-a-random-password-in-php/
//also listed in readme file
function random_password( $length = 8 ) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
    $new_pw = substr( str_shuffle( $chars ), 0, $length );
    return $new_pw;
}
?>
