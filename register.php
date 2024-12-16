<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ChatSphere</title>
  <link rel="stylesheet" href="stylee.css" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

</head>
<?php
include_once("php/header.php");
?>

<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Realtime chat App</header>
      <form action="register.php" method="POST" enctype="multipart/form-data">
        <div class="error-txt"></div>
        <div class="name-details">
          <div class="field input">
            <label>First Name</label>
            <input name="fname" type="text" placeholder="First Name" required />
          </div>
          <div class="field input">
            <label>Last Name</label>
            <input name="lname" type="text" placeholder="Last Name" required />
          </div>
        </div>
        <div class="field input">
          <label>Email Address</label>
          <input name="email" type="text" placeholder="Email Addess" required />
        </div>
        <div class="field input">
          <label>Password</label>
          <input name="password" type="password" placeholder="Password" required />
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Select Image</label>
          <input type="file" name="image" required />
        </div>
        <div class="field button">
          <input type="submit" value="continue to chat" />
        </div>
      </form>
      <div class="link">Already signed up? <a href="#">Login now</a></div>
    </section>
  </div>
</body>

</html>