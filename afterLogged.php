<?php 

    require_once('connection.php');

    session_start();

    $money = $_SESSION['money'];


    echo "Your account state is: $money ";

    echo "<form action='remove.php' method='POST'> 

        <input type='number' name='sum' />

        <input type='submit' value='remove money' />

    </form ";

?>

    <a href="session.php?akcja=wyloguj ">Logout</a> 