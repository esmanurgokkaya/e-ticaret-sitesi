<?php 
session_start();
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ZEE</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative&display=swap" rel="stylesheet">

  </head>
  <body>
<<<<<<< HEAD:index.php
  <?php include 'header.php';
  
    echo "<h1 style='color:green;padding:10px;text-align:center;'>Hosgeldin ".$username."</h1>";?>
=======
    <header class="header">
        <div class="container discount__panel">
            <marquee direction="left" scrollamount="5">Tüm ürünlerimizde geçerli sepette %10 indirim var. Bu fırsatı kaçırma!</marquee>
        </div>
        <div class="container header__inner">
            <h1 class="logo">ZEE</h1>
            <form action="" method="get" id="arama" class="search">
              <input type="text" placeholder="Ürün Ara">
              <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
            <div class="icons"> 
                <ul>
                  <li><a href="login.php" id="icon1" class="logging" title="Giriş Yap / Kayıt Ol"><i class="fa-regular fa-user"></i></a></li>
                  <li>
                    <a href="#"  class="shopping" title="Sepete Ekle">
                    <i id="icon2" class="fa-solid fa-cart-shopping"></i>
                    <span id="count">0</span></a>
                    <div id="shopping-basket" class="shopping-basket">
                      <div id="basket-list"></div>
                      <div id="total-price"></div>
                      <button id="clear-basket">Sepeti Temizle</button>
                    </div>
                    
                </li>
                </ul>
            </div>
        </div>
        <div class="container categories">
          <ul class="nav__links">
              <li class="nav__item"><a href="#yeni">YENİ</a></li>
              <li class="nav__item"><a href="dis-giyim.html">DIŞ GİYİM</a></li>
              <li class="nav__item"><a href="alt-giyim.html">ALT GİYİM</a></li>
              <li class="nav__item"><a href="ust-giyim.html">ÜST GİYİM</a></li>
              <li class="nav__item"><a href="#indirim">İNDİRİMLİ ÜRÜNLER</a></li>
          </ul>
      </div>
    </header>

>>>>>>> 23b433d59a81df5b9153f8b578f927422244bca2:index.html
    <section class="hero">
    </section>
<section>
  <h3>İNDİRİMLİ Ürünler</h3>
  <div class="products" id="indirim">
    <!-- 1.ürün -->
    <div class="product">

        <img src="images/alt giyim/etek2.webp" alt="">
       <div class="description">
        <span>Elbise takım </span>
        <div class="price">
          <small class="total">180 TL</small>
         <a href="product.php"> <h4>200 TL</h4></a>
        </div>
        <input type="button" class="button" value="Sepete Ekle">

       </div>

    </div>
    <!-- 2.ürün -->
    <div class="product">
        <img src="images/alt giyim/etek11.webp" alt="">
       <div class="description">
        <span>Elbise takım </span>
        <div class="price">
          <small class="total">180 TL</small>
            <h4>200 TL</h4>
        </div>
        <input type="button" class="button" value="Sepete Ekle">

       </div>
    </div>
    <!-- 3.ürün -->
    <div class="product">
        <img src="images/dis giyim/disGiyim1.webp" alt="">
       <div class="description">
        <span>Elbise takım </span>
        <div class="price">
          <small class="total">180 TL</small>
            <h4>200 TL</h4>
        </div>
        <input type="button" class="button" value="Sepete Ekle">

       </div>
    </div>
    <!-- 4.ürün -->
    <div class="product">
        <img src="images/ust giyim/bluz1.webp" alt="">
       <div class="description">
        <span>Elbise takım </span>
        <div class="price">
          <small class="total">180 TL</small>
            <h4>200 TL</h4>
        </div>
        <input type="button" class="button" value="Sepete Ekle">

       </div>
    </div>
  </div>

  <h3>Yenİ Ürünler</h3>
  <div class="products" id="yeni">
    <!-- 1.ürün -->
    <div class="product">
        <img src="images/alt giyim/etek10.webp" alt="">
       <div class="description">
        <span>Elbise takım </span>
        <div class="price">
            <h4>250 TL</h4>
        </div>
        <input type="button" class="button" value="Sepete Ekle">

       </div>

    </div>
    <!-- 2.ürün -->
    <div class="product">
        <img src="images/yeni/saten-gomlek2.webp" alt="">
       <div class="description">
        <span>Elbise takım </span>
        <div class="price">
            <h4>250 TL</h4>
        </div>
        <input type="button" class="button" value="Sepete Ekle">

       </div>
    </div>
    <!-- 3.ürün -->
    <div class="product">
        <img src="images/yeni/kazak.jpg" alt="">
       <div class="description">
        <span>Elbise takım </span>
        <div class="price">
            <h4>250 TL</h4>
        </div>
        <input type="button" class="button" value="Sepete Ekle">

       </div>
    </div>
    <!-- 4.ürün -->
    <div class="product">
        <img src="images/yeni/kaban.jpg" alt="">
       <div class="description">
        <span>Elbise takım </span>
        <div class="price">
            <h4>250 TL</h4>
        </div>
        <input type="button" class="button" value="Sepete Ekle">

       </div>
    </div>
  </div>
</section>
<?php include 'footer.php';?>
    <script src="js/sepete-ekleme.js" defer></script>
  </body>
</html>