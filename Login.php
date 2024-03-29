<?php
  session_start();
  require('database/conection.php');

  if (isset($_SESSION["email"])) {
    if ($_SESSION["role"] == "cust") {
      header("Location: customer_init.php");
    }
    else{
      header("Location: employee_init.php");
    } 
  }

  $msg3=$_SESSION["msg3"]

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Login</title>  
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="Login.css" rel="stylesheet" />
    <link href="footer.css" rel="stylesheet" />
  </head>

  <body>
    <header>
      <a href="./init_page.php"><img alt="Logo" src="./assets/Logo_white.png"/></a>
      <p><?php echo $msg3?></p>
    </header>
    <div class = "section1">
      <article>
        <form action="action_login.php" method="post">
          <div id = "text">Welcome!</div>
                  
          <label id="label1" for="email">Email</label>
          <input type="text" id="email" name ="email" required>

          <label id="label2" for="password">Password</label>
          <input type="password" id ="password" name ="password" required>
  
          <button type="submit">Login</button>  

          <p>Not a member? <a href = "Register.php">Register here.</a></p>
        </form>
      </article>   
    </div>
    <?php include('./template/footer_tem.php');?>
  </body>
</html>
 