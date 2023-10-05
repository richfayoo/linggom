<?php

require 'webeditor/functions.php';
$hallo = query("SELECT * FROM hero");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css"> 
    <link rel="icon" type="image/x-icon" href="assets/img/Linggom AI-02.png">
    <!-- Boxicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"/>
    <!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    
    
    <title>Linggom - Tempat Teduh Kamu</title>
</head>
<body>
    <!-- header -->
    <header>
      <a href="#" class="logo" ><img src="assets/img/Linggom AI-03.png" alt=""></a>
      <div class="bx bx-menu" id="menu-icon" ></div>
      <ul class="navbar">
        <li><a href="#home">Home</a></li>
        <li><a href="#pricing">Pricing</a></li>
        <li><a href="#layanan">Linggom AI</a></li>
        <li><a href="webeditor">Web Editor</a></li>
      </ul>
    </header>
    
    <!-- home -->
    <?php foreach( $hallo as $hr ):?> 
    <!-- home -->
    <section class="home" id="home">
      <div class="home-text">
        <div data-aos="fade-down-right">
          <h1><?= $hr["title"]?></h1>
          <div class="sec-text"><h1><span><?= $hr["spantitle"]?></span></h1></div>
          <p><?= $hr["descript"]?></p>
          <a href="<?= $hr["linkbutton"]?>" class="btn"><?= $hr["button"]?></a>
        </div>
      </div>
      <div class="home-img">
        <div data-aos="fade-up-left">
          <img src="webeditor/gmbr/<?= $hr["img"]?>">
        </div>
      </div>
    </section>
    <script>
      const text = document.querySelector(".sec-text span");

      const textload = () => {
        setTimeout(() => {
          text.textContent = "<?= $hr["spantitle"]?>";
        }, 0);
        setTimeout(() => {
          text.textContent = "<?= $hr["spantitle2"]?>";
        }, 4000);
        setTimeout(() => {
          text.textContent = "<?= $hr["spantitle3"]?>";
        }, 8000);
      }
      textload();
      setInterval(textload, 12000);
    </script>
 <?php endforeach;?>


    <!-------------------- TESTIMONI --------------------->
    <section id="testimoni">

      <div class="testimoni">
        <div class="inner">
          <h1>What They Said??</h1>
          <div class="border"></div>
          <div class="rowtes">
            <div class="coltes">
              <div class="tess">
                <img src="assets/img/Rebranding-02.jpg" alt="">
                <div class="name">Rice From Heaven</div>
                <div class="stars">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste delectus ipsam voluptatem aperiam adipisci. Quasi architecto aut aspernatur commodi doloremque minima possimus sunt beatae, amet consequuntur ratione. Ratione, optio velit?</p>
              </div>
            </div>

            <div class="coltes">
              <div class="tess">
                <img src="assets/img/Krasivo Full.png" alt="">
                <div class="name">Krasivo Studio</div>
                <div class="stars">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste delectus ipsam voluptatem aperiam adipisci. Quasi architecto aut aspernatur commodi doloremque minima possimus sunt beatae, amet consequuntur ratione. Ratione, optio velit?</p>
              </div>
            </div>

            <div class="coltes">
              <div class="tess">
                <img src="assets/img/LOGO AMBULANCE DIAN only.png" alt="">
                <div class="name">jasaambulans.com</div>
                <div class="stars">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste delectus ipsam voluptatem aperiam adipisci. Quasi architecto aut aspernatur commodi doloremque minima possimus sunt beatae, amet consequuntur ratione. Ratione, optio velit?</p>
              </div>
            </div>

            
          </div>
        </div>
      </div>

    </section>
    <!-- pricing -->
    
    <section id="pricing">
      <div class="section-text">
        <div data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="1000">
     <h1>Choose Your Plan</h1>
    </div>
      </div>
      <div class="pricing">
        <!-- card Baby -->
        <div data-aos="fade-up"
     data-aos-duration="1000">
     <div class="card-wrapper">
       <!-- card header -->
       <div class="card-header">
         <h2>Baby</h2>
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio praesentium, officia mollitia nemo voluptate quia obcaecati dicta soluta accusantium minus ad tempore quisquam commodi reprehenderit rem maxime voluptatem aliquid rerum!</p>
         <h1>IDR<span>50</span>Rb<sub>/month</sub></h1>
        </div>
        <!-- card detail -->
        <div class="card-detail">
          <p><span class="fas fa-check check"></span> <b>1</b> lorem</p>
          <p><span class="fas fa-check check"></span> <b>2</b> lorem</p>
          <p><span class="fas fa-check check"></span> <b>6</b> lorem</p>
          <p><span class="fas fa-times nocheck"></span> Lorem</p>
          <p><span class="fas fa-times nocheck"></span> Lorem</p>
          <p><span class="fas fa-times nocheck"></span> Lorem</p>
          <p><span class="fas fa-times nocheck"></span> Lorem</p>
        </div>
        <!-- card pricing -->
        <div class="card-price">
        </div>
        <!-- button -->
        <br>
        <a href="#" class="btn">I WANT IT!!</a>
      </div>
    </div>


     <!-- card Baby -->
     <div data-aos="fade-up"
     data-aos-duration="1000">
     <div class="card-wrapper">
      
       <!-- card header -->
       <div class="card-header">
         <h2>Student</h2>
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio praesentium, officia mollitia nemo voluptate quia obcaecati dicta soluta accusantium minus ad tempore quisquam commodi reprehenderit rem maxime voluptatem aliquid rerum!</p>
         <h1>IDR<span>199</span>Rb<sub>/month</sub></h1>
        </div>
        <!-- card detail -->
        <div class="card-detail">
          <p><span class="fas fa-check check"></span> <b>1</b> lorem</p>
          <p><span class="fas fa-check check"></span> <b>2</b> lorem</p>
          <p><span class="fas fa-check check"></span> <b>6</b> lorem</p>
          <p><span class="fas fa-check check"></span> <b>6</b> lorem</p>
          <p><span class="fas fa-check check"></span> <b>6</b> lorem</p>
          <p><span class="fas fa-times nocheck"></span> Lorem banget dah</p>
          <p><span class="fas fa-times nocheck"></span> Lorem banget dah</p>
          <p><span class="fas fa-times nocheck"></span> Lorem banget dah</p>
        </div>
        <!-- card pricing -->
        <div class="card-price">
        </div>
        <!-- button -->
        <br>
        <a href="#" class="btn">I WANT IT!!</a>
      </div>
    </div>

     <!-- card Baby -->
     <div data-aos="fade-up"
     data-aos-duration="1000">
     <div class="card-wrapper">
       <!-- card header -->
       <div class="card-header">
         <h2>Professional</h2>
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio praesentium, officia mollitia nemo voluptate quia obcaecati dicta soluta accusantium minus ad tempore quisquam commodi reprehenderit rem maxime voluptatem aliquid rerum!</p>
         <h1>IDR<span>499</span>Rb<sub>/month</sub></h1>
        </div>
        <!-- card detail -->
        <div class="card-detail">
          <p><span class="fas fa-check check"></span> <b>1</b> lorem</p>
          <p><span class="fas fa-check check"></span> <b>2</b> lorem</p>
          <p><span class="fas fa-check check"></span> <b>6</b> lorem</p>
          <p><span class="fas fa-check check"></span> <b>6</b> lorem</p>
          <p><span class="fas fa-check check"></span> <b>6</b> lorem</p>
          <p><span class="fas fa-check check"></span> <b>6</b> lorem</p>
          <p><span class="fas fa-check check"></span> <b>6</b> lorem</p>
        </div>
        <!-- card pricing -->
        <div class="card-price">
        </div>
        <!-- button -->
        <br>
        <a href="#" class="btn">I WANT IT!!</a>
      </div>
    </div>


  </div>
  </section>
    
      <footer>
        <div class="row">
          <div class="col">
            <img src="assets/img/Linggom AI-03.png" class="logo" alt="">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores vitae pariatur mollitia harum, sunt doloremque exercitationem eos aliquam eveniet placeat ratione nesciunt aspernatur iusto nostrum nobis sint expedita temporibus atque.</p>
          </div>
          <div class="col">
            <h2>Location</h2>
            <p>Jalan Cendrawasih Raya Bintaro Jaya</p>       
            <p>Tangerang Selatan, Banten</p>
            <p>15413</p>      
            <p>Indonesia</p>
            <p class="email-id">admin@linggom.com</p>       
          </div>
          <div class="col">
            <h2>Links</h2>
            <a href=""><p>Pricing</p></a>  
            <a href=""><p>Linggom AI</p></a>  
            <a href=""><p>Web Editor</p></a>  
          </div>
          <div class="col">
            <h2>Newsletter</h2>
            <form action="">
              <i class="far fa-envelope" aria-hidden="true"></i>
              <input type="email" placeholder="Enter your email here" id="">
              <button type="submit"><i class="fas fa-arrow-right" aria-hidden="true"></i></button>
            </form>
            <div class="social-icons">
              <i class="fab fa-instagram" aria-hidden="true"></i>
              <i class="fab fa-facebook" aria-hidden="true"></i>
              <i class="fab fa-pinterest" aria-hidden="true"></i>
              <i class="fab fa-tiktok" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </footer>

               <!-- link to js -->
    <script type="text/javascript" src="assets/js/script.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>