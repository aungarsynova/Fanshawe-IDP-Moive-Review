<?php require_once('admin/scripts/config.php'); 
if(isset($_GET['filter'])){
    $tbl = 'tbl_movies';
    $tbl_2 = 'tbl_genre';
    $tbl_3 = 'tbl_mov_genre';
    $col = 'movies_id';
    $col_2 = 'genre_id';
    $col_3 = 'genre_name';
    $filter = $_GET['filter'];
    $results = filterResults($tbl, $tbl_2, $tbl_3, $col, $col_2, $col_3, $filter);
}else{
    $results = getAll('tbl_movies');
}
?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Movie</title>
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