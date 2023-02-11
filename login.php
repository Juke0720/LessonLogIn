<?php include 'controller/db_connection.php';
?>




<!DOCTYPE html>
<html lang = 'en'>
    <head> 
        <meta charset = "UTF-8">
        <meta http-equiv = "X-UA-Compatible" content= "IE= edge">
        <meta name= "viewport" content = "width= device-width, initial-scale= 1.0">
        <title> JUKE </title>    
    </head>
    <body>
            <form action = 'controller/log_in_user.php' method = 'post'>
                <input type = "text" placeholder ="Input Email" name ='email' />
                <input type = "password" placeholder ="Input Password" name = 'password' />
                <button type = "submit"> Log in </button>
            </form>
</body>
</html>
