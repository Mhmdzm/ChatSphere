<?php
include_once("config.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim(mysqli_real_escape_string($conn, $_POST['email']));
    $password = trim(mysqli_real_escape_string($conn, $_POST['password']));


    $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");

    if (mysqli_num_rows($sql) > 0) {
        $row = mysqli_fetch_assoc($sql);

        if ($password === $row['password']) {

            session_start();
            $_SESSION['unique_id'] = $row['unique_id'];
            echo "success";
        } else {

            echo "Input Password: '" . $password . "'<br>";
            echo "Database Password: '" . $row['password'] . "'<br>";
            echo "Incorrect password!";
        }
    } else {
        echo "This email is not registered!";
    }
}
?>
