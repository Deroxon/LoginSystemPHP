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

    <button><a href="afterLogged.php?akcja=wyloguj ">Logout</a></button>


<?php 

        if(isset($_GET['akcja'])) {
            if($_GET['akcja']=="wyloguj") {
                unset($_SESSION['money']);
                unset($_SESSION['username']);
                session_destroy(); // usunięcie sesji
                header('Location: index.php'); // POWRÓT do głownej strony

            }
        }



?>