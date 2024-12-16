<?php
session_start();
include_once("config.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $fname = mysqli_real_escape_string($conn, $_POST["fname"]);
    $lname = mysqli_real_escape_string($conn, $_POST["lname"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    
    $sql = mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}'");
    if (mysqli_num_rows($sql) > 0) {
        echo "This email already exists!";
    } else {
     
        if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
            $img_name = $_FILES['image']['name'];
            $tmp_name = $_FILES['image']['tmp_name'];
            $img_explode = explode('.', $img_name);
            $img_ext = end($img_explode);
            $extensions = ['png', 'jpeg', 'jpg'];

            
            if (in_array(strtolower($img_ext), $extensions)) {
                $time = time();
                $new_image_name = $time . $img_name;
                $upload_dir = 'images/';

                
                if (move_uploaded_file($tmp_name, $upload_dir . $new_image_name)) {
                    $status = "Active now";
                    $random_id = rand(time(), 100000);

                   
                    $sql2 = mysqli_query($conn, "INSERT INTO users(unique_id, fname, lname, email, password, img, status) 
                                                VALUES('{$random_id}', '{$fname}', '{$lname}', '{$email}', '{$password}', '{$new_image_name}', '{$status}')");

                    if ($sql2) {
                        $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                        if (mysqli_num_rows($sql3) > 0) {
                            $row = mysqli_fetch_assoc($sql3);
                            $_SESSION['unique_id'] = $row['unique_id'];
                            echo "success";  
                        }
                    } else {
                        echo "Error in uploading the information to the database.";
                    }
                } else {
                    echo "Failed to upload image.";
                }
            } else {
                echo "Please upload a valid image (jpg, jpeg, png).";
            }
        } else {
            echo "Image not selected or there was an error uploading.";
        }
    }
} else {
    echo "Form data not submitted correctly.";
}
?>
