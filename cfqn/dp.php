<?php
require('connect.php');

function printuser($value){
    print_r($value);
}

$quest = "select * from users";
$request = $pdo->prepare($quest);
$request->execute();
$errorIn = $request->errorInfo();

if($errorIn[0]!== PDO::ERR_NONE){
    print($errorIn[2]);
    exit();
}
$date = $request->fetch();
printuser($date)
?>