<?php
  session_start();

  // $_SESSION["msg"] = "";
  // $msg = $_SESSION["msg"];
 
  require('database/conection.php');
 
?> 

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>MyPharma</title>  
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="footer.css" rel="stylesheet" />
    <link href="init_page.css" rel="stylesheet" />
  </head>
  <body>
    <header >
      <a href="./init_page.php"> <img alt="Logo" src="./assets/Logo_white.png" /></a>
      <div id="signup">
        <a href="./Login.php">Login</a>
        <a href="./Register.php">Register</a>
      </div>
    </header>

    <aside id="Wallpaper">
        <h1>Order with us</h1>
        <h3> Order, we come to your home. Our home delivery service makes it possible to place 
          your order and receive it at home.</h3>
    </aside>

    <!-- categorias -->
    <aside>
      <section class="category-container">
        <div class="categors_inline">
          <div class="product">
            <img src="./assets/BareBeauty.jpg"  alt="Beauty"/>
            <h2>Beauty & Hygiene</h2>
            <p>Skincare, fragrance, haircare and color, cosmetics products.</p>
          </div>
          <div class="product">
            <img src="./assets/pers.jpg"  alt= "personal care"/>
            <h2>Personal Care</h2>
            <p>Products used in personal hygiene, personal grooming or for beautification.</p>
          </div>
          <div class="product">
            <img src="./assets/med.jpg" alt="medications"/>
            <h2>Medicines</h2>
            <p>Medicines can treat diseases and improve your health. If you are like most people, 
              you need to take medicine at some point in your life.</p>
          </div>
          <div class="product">
            <img src="./assets/sup.jpg" alt="suplements"/>
            <h2>Food Supplements & Nutrition</h2>
            <p> Concentrated sources of nutrients (mineral and vitamins) or other substances with
              a nutritional or physiological effect that are marketed in “dose” form (e.g. pills, 
              tablets, capsules, liquids in measured doses).</p>
          </div>
          <div class="product">
            <img src="./assets/contr.jpg" alt="Contraception"/>
            <h2>Contraception & Intimate Products</h2>
            <p>Contraceptive products are categorized by their hormonal content and method of
              action. Hormonal options include oral contraceptive pills, contraceptive patch, 
              implants, injection, intravaginal, and intrauterine devices.</p>
          </div>
          <div class="product">
            <img src="./assets/covid.jpg" alt="Covid_19"/>
            <h2>Covid-19</h2>
            <p>These include personal protective equipment such 
              as medical masks, N95 respirators, gloves and gowns. </p>
          </div>
          <div class="product">
            <img src="./assets/eq.jpg" alt="equipment health" />
            <h2>Medical Equipment</h2>
            <p>As well as medicinal products, there are medical devices. </p>
          </div>
          <div class="product">
            <img src="./assets/animal.jpg" alt="animal" />
            <h2>Animal Care</h2>
            <p>We offer a range of natural health, hygiene & supplements for horses, dogs, cats & poultry.</p>
          </div>
          <div class="product">
            <img src="./assets/ortho.jpg" alt="Orthopedic"/>
            <h2>Orthopedic Products</h2>
            <p>Equipment and products designed to correct deformities or to preserve and restore 
              the function of the human skeletal system, its articulations and associated structures.</p>
          </div>
        </div>
      </section>
    </aside>
    <?php include('./template/footer_tem.php');?>
  </body>
</html>
