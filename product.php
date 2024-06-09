<?php
require 'php/config.php' ?>
<?php
if (isset($_SESSION['user_id']))
  $user_id = $_SESSION['user_id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/products.css">
  <link rel="stylesheet" href="css/singleProduct.css">
</head>

<body>
  <?php include 'header.php'; ?>
  <main>
    <section class="main-wrap">
      <?php
      if (isset($_GET['id']) && filter_var($_GET['id'], FILTER_VALIDATE_INT)) {
        $urun_id = $_GET['id'];
      }

      $query = "SELECT * FROM urunler  WHERE urun_id = $urun_id ";
      $result = mysqli_query($conn, $query);

      if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {
          $kategori_klasoru = "";

          switch ($row["kategori_id"]) {
            case 1:
              $kategori_klasoru = "ustgiyim";
              break;
            case 2:
              $kategori_klasoru = "altgiyim";
              break;
            case 3:
              $kategori_klasoru = "disgiyim";
              break;
            default:
              $kategori_klasoru = "unknown";
              break;
          }

          // Resmin yolunu oluştur
          $resimYolu = "images/" . $kategori_klasoru . "/" . $row["resim"]; ?>
          <div class="s-product">
            <div class="s-image">
              <img src="<?php echo $resimYolu ?>" alt=" <?php echo $row["urun_adi"] ?> ">

            </div>
            <div class="s-product-details">
              <div class="details">

                <h2><?php echo $row['urun_adi'] ?></h2>
                <h3><?php echo $row['fiyati'] ?></h3>
                <h4><?php if ($row['indirim'] > 0)  echo $row['indirim'] ?></h4>
                <p><?php echo $row['aciklama'] ?>
                </p>
              </div><?php  }
                } ?>
          <div class="sizes">
            <form action="php/cookie.php" method="post" class="form">
              <div class="select-size">
                <h3>Size</h3>
                <label for="sm">
                  <input type="radio" name="size" id="sm" value="sm">
                  <span>S</span>
                </label>

                <label for="m">
                  <input type="radio" name="size" id="m" value="m">
                  <span>M</span>
                </label>

                <label for="lg">
                  <input type="radio" name="size" id="lg" value="lg">
                  <span>L</span>
                </label>

                <label for="xl">
                  <input type="radio" name="size" id="xl" value="xl">
                  <span>XL</span>
                </label>
              </div>
          </div>
          <div class="quantity">
            <div class="select-quantity">
              <h3>adet</h3>
              <input type="number" name="quantity" value="1">
            </div>
          </div>
          <div class="sub-btn">

          <input type="text" name="urun" value="<?php echo $urun_id; ?>" hidden id="urun_id" class="urun_id"/>
            <button class="submit" >sepete ekle</button>

          </div>
          </form>
            </div>
          </div>

    </section>
    <!-- yorum ekleme alanı  -->

    <section class="comments">
      <div class="comment-header ">
        <h3></h3>
        <h3>yorum sayısı</h3>
        <div class="btn-add">
          <button>Yorum Ekle</button>
        </div>
      </div>
      <div class="comment-body">
        <div class="add-comment hidden">
          <form action="php/comment.php" method="post">
            <div class="star-widget">
              <input type="radio" name="rate" id="rate-5" value="5">
              <label for="rate-5" class="fas fa-star"></label>

              <input type="radio" name="rate" id="rate-4" value="4">
              <label for="rate-4" class="fas fa-star"></label>

              <input type="radio" name="rate" id="rate-3" value="3">
              <label for="rate-3" class="fas fa-star"></label>

              <input type="radio" name="rate" id="rate-2" value="2">
              <label for="rate-2" class="fas fa-star"></label>

              <input type="radio" name="rate" id="rate-1" value="1">
              <label for="rate-1" class="fas fa-star"></label>
            </div>
            <div class="textarea">
              <textarea name="comment" cols="40" placeholder="YORUM EKLE"></textarea>
            </div>
            <input type="text" name="user_id" value="<?php echo $user_id; ?>" hidden class="user_id" />
            <input type="text" name="urun" value="<?php echo $urun_id; ?>" hidden class="urun_id" />
            <div class="btn">
              <button type="submit" name="submit">Gönder</button>
            </div>
          </form>
        </div>

        <?php require "php/insertcomment.php"; ?>

      </div>

      <div class="more-comment">
        <button>daha fazla yorum göster</button>
      </div>
      <!-- yorumlar  -->
    </section>

    <div class="product-header">

      <h3>bunları da beğenebilirsiniz</h3>

    </div>

    <section class="more-products">

      <div class="products" id="yeni">
        <!-- 1.ürün -->
        <div class="product">
          <img src="<?php echo $resimYolu ?>" alt=" <?php echo $row["urun_adi"] ?> ">
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
          <img src="<?php echo $resimYolu ?>" alt=" <?php echo $row["urun_adi"] ?> ">
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
          <img src="<?php echo $resimYolu ?>" alt=" <?php echo $row["urun_adi"] ?> ">
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
          <img src="<?php echo $resimYolu ?>" alt=" <?php echo $row["urun_adi"] ?> ">
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

  </main>

  <?php include 'footer.php'; ?>
  <script src="js/comment.js" defer></script>

  <script src="js/sepete-ekleme.js" defer></script>

</body>

</html>