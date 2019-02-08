<?php require_once('admin/scripts/details.php'); 
if(isset($_GET['id'])){
    $tbl = 'tbl_movies';
    $col = 'movies_id';
    $id = $_GET['id'];
    $results = getSingle($tbl, $col, $id);
}else{
    echo 'Missing movie ID';
    exit;
}
?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Movie Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php include('templates/header.html'); ?>
	<h1>This is the movie site</h1>

<?php

while($row = $results->fetch(PDO::FETCH_ASSOC)):?>
    <div>
        <h2><?php echo $row['movies_title'];?></h2>
        <h2><?php echo $row['movies_year'];?></h2>
        <h2><?php echo $row['movies_runtime'];?></h2>
        <img src="images/<?php echo $row['movies_cover'];?>"> 
        <a href ="details.php?id=<?php echo $row['movies_id'];?>">Read me</a>
        <?php endwhile;?>
    </div>
   


<?php include('templates/footer.html');?>

</body>
</html>