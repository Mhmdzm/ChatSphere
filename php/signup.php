<?php
session_start();
include_once("config.php");

$fname = isset($_POST["fname"]) ? mysqli_real_escape_string($conn, $_POST["fname"]) : '';
$lname = isset($_POST["lname"]) ? mysqli_real_escape_string($conn, $_POST["lname"]) : '';
$email = isset($_POST["email"]) ? mysqli_real_escape_string($conn, $_POST["email"]) : '';
$password = isset($_POST["password"]) ? mysqli_real_escape_string($conn, $_POST["password"]) : '';

if (!empty($fname) && !empty($lname) && !empty($email) && !empty($password)) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $sql = mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}'");
        if (mysqli_num_rows($sql) > 0) {
            echo "This email already exists!";
        } else {
            if (isset($_FILES["image"])) {
                $img_name = $_FILES["image"]['name'];
                $tmp_name = $_FILES["image"]["tmp_name"];

                
                $img_explode = explode('.', $img_name);
                $img_ext = strtolower(end($img_explode));

                $extensions = ['png', 'jpeg', 'jpg'];
                if (in_array($img_ext, $extensions) === true) {
                    $time = time();
                    $new_image_name = $time . "_" . basename($img_name);
                    $upload_path = "images/" . $new_image_name;

                    if (move_uploaded_file($tmp_name, $upload_path)) {
                        $status = "Active now";
                        $random_id = rand(100000, 999999);

                        $sql2 = mysqli_query($conn, "INSERT INTO users(unique_id, fname, lname, email, password, img, status) VALUES('{$random_id}', '{$fname}', '{$lname}', '{$email}', '{$password}', '{$new_image_name}', '{$status}')");
                        if ($sql2) {
                            $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                            if (mysqli_num_rows($sql3) > 0) {
                                $row = mysqli_fetch_assoc($sql3);
                                $_SESSION['unique_id'] = $row['unique_id'];
                                echo "success";
                            }
                        } else {
                            echo "Error uploading the information to the database: " . mysqli_error($conn);
                        }
                    } else {
                        echo "Failed to upload the image.";
                    }
                } else {
                    echo "Please select a valid image file (jpeg, jpg, or png).";
                }
            } else {
                echo "Please select an image file!";
            }
        }
    } else {
        echo "Please enter a valid email address.";
    }
} else {
    echo "All input fields are required!";
}
