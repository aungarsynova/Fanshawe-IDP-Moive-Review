<?php 
//Database info for a successfull connection
$db_dsn = array(
    'host'=>'localhost', //server name
    'dbname'=>'db_movies3', //database name
    'charset'=>'utf8'   //conection
);

$dsn ='mysql:'.http_build_query($db_dsn,'',';');

//Set up connectio credetials
$db_user= 'root';   //server username
$db_pass= ''; //server password is blank for windows

//Check connection
try{
    $pdo = new PDO($dsn,$db_user,$db_pass);
}catch(PDOException $exception){
    echo 'Connection Error: '.$exception->getMessage();
    exit();
}
?>