<?php

require_once('connection.php');

session_start();

$addMoney = $_POST['sum'];
$mon = $_SESSION['money'];
$user = $_SESSION['username'];


$afterCalc = $mon + $addMoney;

$contentQueryMoney = "UPDATE users SET money = '$afterCalc' WHERE username = '$user' ";

mysqli_query($id, $contentQueryMoney);



$_SESSION['money'] = $afterCalc;

header('Location: afterLogged.php');





?>