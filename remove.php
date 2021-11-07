<?php 

require_once('connection.php');

session_start();

$removedMoney = $_POST['sum'];
$mon = $_SESSION['money'];
$user = $_SESSION['username'];


$afterCalc = $mon - $removedMoney;

$contentQueryMoney = "UPDATE users SET money = '$afterCalc' WHERE username = '$user' ";

mysqli_query($id, $contentQueryMoney);



$_SESSION['money'] = $afterCalc;

header('Location: afterLogged.php');



?>