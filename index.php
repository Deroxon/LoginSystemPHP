<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    LOGIN:

    <form action="process.php" method="POST"> 
        <label name="username">Login: </label>
        <input type="text" name="username" id="username" />

        <label name="password">Password: </label>
        <input type='password' name="password" id="password" />

        <input type='submit' value="login" />
    
    </form>



    <br /><br /><br />
    Register:


    <form action="register.php" method="POST">

        <label name="regUsername">Username: </label>
        <input type="text" name="regUsername" />
        <br /><br />

        <label name="regPassword">Password: </label>
        <input type="text" name="regPassword" />
        <br /><br />

        <label name="regCPassword">Confirm Password: </label>
        <input type="text" name="regCPassword" />
        <br /><br />

        <label name="regEmail">Email: </label>
        <input type="text" name="regEmail" />
        <br /><br />

        <input type="submit" value="register" />
    </form>
    
</body>
</html>