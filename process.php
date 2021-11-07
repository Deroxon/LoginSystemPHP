<?php 

require_once("connection.php");


$username= $_POST['username'];
$password= $_POST['password'];


$queryLogin = "SELECT COUNT(username) FROM users WHERE username = '$username' AND password = '$password'";

$result = mysqli_query($id, $queryLogin);

$dane= mysqli_fetch_array($result);




// if $checkUser is 0, its mean that is no user with that nickname, if 1 it is
$checkUser = (int)$dane[0];


if ($checkUser == 1) {

    session_start();

    $contentQueryMoney = "SELECT money FROM users WHERE username = '$username' AND password = '$password' ";

    $QueryMoney = mysqli_query($id, $contentQueryMoney);

    $row = mysqli_fetch_array($QueryMoney);


    echo $row['money'];
    echo "<br /> You are logged in";
   
    $_SESSION['username'] = $username;
    $_SESSION['money'] = $row['money'];
    header('Location: afterLogged.php');
  


} else {
    echo "There is no user with that nickname";
    echo "<button onclick=document.location.href='index.php'>Back to Login </button> ";
}



 mysqli_close($id);

?>