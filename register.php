<?php

    require_once('connection.php');


    $username = $_POST['regUsername'];
    $password = $_POST['regPassword'];
    $cpassword = $_POST['regCPassword'];
    $email = $_POST['regEmail'];


    $ContentqueryLogin = "SELECT COUNT(username) FROM users WHERE username = '$username'";

    $ContentqueryEmail = "SELECT COUNT(email) FROM users WHERE email = '$email' ";

    $queryLogin = mysqli_query($id, $ContentqueryLogin);
    $queryEmail = mysqli_query($id, $ContentqueryEmail);

    $row = mysqli_fetch_array($queryLogin);
    $row2 = mysqli_fetch_array($queryEmail);

  

    $checkUsername = (int)$row[0];
    $checkEmail = (int)$row2[0];

    if($checkUsername == 0 && $checkEmail == 0) {
       

        if($password != $cpassword) {
            echo "Passwords doesnt match <br>";
            echo "<a href='index.php'>Back to register </a>";
        } else {
            echo "congrat, there is no user with this nickname and email";
            echo "<a href='index.php'>Back to Login </a>";

            $queryContentRegister = "INSERT INTO users (username, password, email, money) VALUES ('$username', '$password', '$email', 1000 ) ";

            mysqli_query($id, $queryContentRegister);


        }

       


    } else {
        echo "lol, choose another nick or email";
    }


?>