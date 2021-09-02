<?php

require_once "Plus.php";

$a = new User("Alfred", "Weber", 001);
$a ->days_since_last_login = 10;

$b = new User("Robin", "Hood", 002);
$b ->days_since_last_login = 30;

$c = new User("Ron", "Weasley", 003);
$c ->days_since_last_login = 60;


$a_plus = new Plus("Frodo", "Baggins");
$a_plus -> days_since_last_login = 0;

$b_plus = new Plus("Lupo", "Lucio");
$b_plus -> days_since_last_login = 20;

$c_plus = new Plus("Mia", "Martini");
$c_plus -> days_since_last_login = 290;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Clienti attivi:</h2>
    <ol>
        <?php if($a_plus->isActive()){echo("<li>" . $a_plus->last_name. "</li>") ;} ?>
        <?php if($b_plus->isActive()){echo("<li>" . $b_plus->last_name. "</li>") ;} ?>
        <?php if($c_plus->isActive()){echo("<li>" . $c_plus->last_name. "</li>") ;} ?>
        <?php if($a->isActive()){echo("<li>" . $a->last_name. "</li>") ;} ?>
        <?php if($b->isActive()){echo("<li>" . $b->last_name. "</li>") ;} ?>
        <?php if($c->isActive()){echo("<li>" . $c->last_name. "</li>") ;} ?>
    </ol>
</body>
</html>