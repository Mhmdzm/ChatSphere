<?php
include_once("config.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);


    $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
    if (mysqli_num_rows($sql) > 0) {
        $row = mysqli_fetch_assoc($sql);

        if ($password === $row['password']) {
            echo "success";
        } else {
            echo "Incorrect password!";
        }
    } else {
        echo "This email is not registered!";
    }
}
