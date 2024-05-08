<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ZEE</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/header-footer.css">
    <link rel="stylesheet" href="css/shopping-cart.css">

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative&display=swap" rel="stylesheet">

  </head>
  <body>
  <?php ?>
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
                  <li><a href="login-register.html" id="icon1" class="logging" title="Giriş Yap / Kayıt Ol"><i class="fa-regular fa-user"></i></a></li>
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



    <footer class="footer">
        <div class="first-box">
          <p class="foot-baslik">Hakkımızda</p>
          <p><a href="#">Biz Kimiz</a></p>
          <p><a href="#">Mağazalarımız</a></p>
        </div>
        <div class="first-box">
          <p class="foot-baslik">Müşteri Hizmetleri</p>
          <p></p><a href="#">Kargo ve Teslimat Koşulları</a></p>
      <p> <a href="#">Üyelik Sözleşmesi</a></p>
         <p> <a href="#">Satış Sözleşmesi</a></p>
         <p><a href="#">İade ve Değişim Koşulları</a></p>
        </div>
        <div class="first-box">
          <p class="foot-baslik">İletişim</p>
          <p>Çağrı Merkezi: 0850 308 56 32</p>
          <p>Telefon: 0 212 331 0 200</p>
          <p>E-posta: iletisim@zee.com.tr</p>
        </div>
        <div class="first-box">
          <p class="foot-baslik">Sosyal Medya</p>
          <p><a href="https://www.instagram.com/esmnr.gkky/"><i class="fa-brands fa-instagram"></i>     İnstagram</a></p>
          <p><a href="#"><i class="fa-brands fa-whatsapp"></i>     WhatsApp</a></p>
        </div>
      
        
    </footer>
    <script src="js/sepete-ekleme.js" defer></script>
  </body>
</html>