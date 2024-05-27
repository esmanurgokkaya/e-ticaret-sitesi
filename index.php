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
  <?php include 'header.php';
  if (isset($_SESSION["user_id"])) {
    echo "<h1 style='color:green;padding:10px;text-align:center;'>Hosgeldin " . $_SESSION['username']."</h1>";
  } ?>
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
            <a href="product.php">
              <h4>200 TL</h4>
            </a>
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
  <?php include 'footer.php'; ?>
  <script src="js/sepete-ekleme.js" defer></script>
</body>

</html>