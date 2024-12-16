<?php 
        include_once("php/header.php")
    ?>
  </head>
  <body>
    <div class="wrapper">
      <section class="form login">
        <header>Realtime chat App</header>
        <form action="#">
          <div class="error-txt"></div>
          <div class="field input">
            <label>Email Address</label>
            <input name="email" type="text" placeholder="Email Addess" />
          </div>
          <div class="field input">
            <label>Password</label>
            <input name="password" type="password" placeholder="Enter your Password" />
            <i class="fas fa-eye"></i>
          </div>
          <div class="field button">
            <input type="submit" value="continue to chat" />
          </div>
        </form>
        <div class="link">Not Yet signed up? <a href="register.php">Signup now</a></div>
      </section>
    </div>
    <script src="javascript/pass-show-hide.js"></script>


  </body>
</html>
