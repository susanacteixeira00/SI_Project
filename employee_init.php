<?php
  session_start();
  require('database/conection.php');//eu preciso de por isto se ja estiver dentro do ficheiro action?

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>MyPharma</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="./employee_init.css" rel="stylesheet" />
  </head>

  <body>
    <header>
      <a href="./init_page.php"><img alt="Logo" src="./assets/Logo_white.png"/></a>
      <!-- <div id="logout">
        <a href="./init_page.php">Logout</a>
      </div> -->
      <form id="logout" action="action_logout.php">
        <span><?php echo $_SESSION["email"] ?></span>
        <input type="submit" value="Logout">
      </form>
    </header>
    <div class="grid-container">
      <section>
        <section class="upper-left">
          <article>
            <img class="profile-picture" src="./assets/perfil.jpg" />
            <h5>Employee Number</h5>
            <p>612312312</p>
          </article>
        </section>
      </section>
      <section class="bottom-left">
        <header><h3>Personal Information</h3></header>
        <article>
          <ul>
            <li>
              <b>Name</b>
              <span>asdasdas</span>
            </li>
            <li><b>Email</b> <span>dqwdqwd@fww.com</span></li>
            <li><b>Phone Number</b> <span>99999999999</span></li>

            <li><b>Address</b> <span>street ewqeqwewq</span></li>
          </ul>
        </article>
      </section>
      <section class="orders">
       <header>
         <h2>Orders</h2>
       </header>
       <article class="order">
         <h3>Order [numero]</h3>
         <div class="separate" > <!-- aqui entra loop de php -->
          <div>
            <p>Client:</p>
            <p>Client's Adress:</p>
            <p>Date:</p>
            <p>Produto:</p>
            <p>Produto:</p>
          </div>
            <select>
              <option value="0">-- Status--</option>
              <option >On Hold</option>
              <option>Processing</option>
              <option>Completed</option>
            </select>
         </div>
       </article>
      </section>
    </div>
  </body>
</html>