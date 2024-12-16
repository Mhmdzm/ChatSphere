<?php
include_once("php/header.php");
?>

<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Realtime chat App</header>
      <form action="php/signup.php" method="POST" enctype="multipart/form-data">
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
          <input name="email" type="text" placeholder="Email Address" required />
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
          <input type="submit" value="Continue to Chat" />
        </div>
      </form>
      <div class="link">Already signed up? <a href="login.php">Login now</a></div>
    </section>
  </div>
</body>

<script src="javascript/pass-show-hide.js"></script>
<script src="javascript/signup.js"></script>

</html>
