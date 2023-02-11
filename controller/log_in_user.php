<?php session_start();
require("db_connection.php");
if (isset($_POST['email']) && $_POST['password']) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $_SESSION['error'] = array();
    try {
        $res = mysqli_query($connect, "SELECT * FROM users WHERE
        email = '$email' AND PASSWORD= '$password'");
        $row = mysqli_fetch_assoc($res);
        if (!empty($row)) {
            $_SESSION['email'] = $row['email'];
            $_SESSION['name'] = $row['fullname'];
            header('location: ../index.php');

        } else {
            $_SESSION['error'][] = "Wrong Username or Password";
            echo '<script language = "javascript">';
            echo 'alert("wrong password, try again!")';
            echo '</script>';
            //header('location: ../index.php');
        }
    }catch (\Throwable $th) {
        echo $th;
    }
}
?>