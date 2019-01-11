<?php


function getAll($tbl){
    include('connect.php');
    //TO DO: Fill the folloeing variable with SQL query
    //so that it can fetch all columns
    //from the given table $tbl
    $queryAll = 'SELECT * FROM ' .$tbl;

    $runAll = $pdo->query($queryAll);

    if($runAll){
        return $runAll;
    }else{
        $error = 'There was a problem accessing this information';
        return $error;
    }
};

