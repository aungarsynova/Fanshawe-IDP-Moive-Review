<?php require_once('admin/scripts/read.php');?>
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
    <header>
    <h1>Header</h1>
    <nav>
        <ul>
            <li><a href="#">Action</a></li>
            <li><a href="#">Comedy</a></li>
        </ul>
    </nav>
    </header>

<?php
$results = getAll('tbl_movies');
while($row = $results->fetch(PDO::FETCH_ASSOC)):?>
    <div>
        <h2><?php echo $row['movies_title'];?></h2>
        <h2><?php echo $row['movies_year'];?></h2>
        <img src="images/<?php echo $row['movies_cover'];?>">
    </div>
   
<?php endwhile;?>

<footer>
<p>Fuck this program I should hve dropped out during the strike</p>
</footer>

</body>
</html>