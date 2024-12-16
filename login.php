<?php
include_once("php/header.php");
?>
</head>

<body>
  <div class="wrapper">
    <section class="form login">
      <header>Realtime chat App</header>
      <form action="#" method="POST">
        <div class="error-txt"></div>
        <div class="field input">
          <label>Email Address</label>
          <input name="email" type="text" placeholder="Email Address" required />
        </div>
        <div class="field input">
          <label>Password</label>
          <input name="password" type="password" placeholder="Enter your Password" required />
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" value="Continue to Chat" />
        </div>
      </form>
      <div class="link">Not Yet signed up? <a href="register.php">Signup now</a></div>
    </section>
  </div>
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>
</body>

</html>