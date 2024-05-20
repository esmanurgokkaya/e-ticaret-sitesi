<?php 
session_start();
$user_id = $_SESSION['user_id'];
echo $user_id;

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
<?php include 'header.php';?>
<?php require 'php/config.php' ?>
<!-- <?php
// if(isset($_GET[''])){
//     $urun_id = $_GET[''];
// }
?> -->
  <!-- php ile urlden id  al slectten kontrol ett ve ekrana ürünü yazdır  -->
  <main>
    <section class="main-wrap">
      <div class="s-product">
        <div class="s-image">
          <img src="images/alt giyim/etek10.webp" alt="">

        </div>
        <div class="s-product-details">
          <div class="details">

            <h2> ürün</h2>
            <h3>$150</h3>
            <h4>35% off</h4>
            <p>Lorem ipsum,
              dolor sit amet consectetur adipisicing elit.
              Dolorum qui, tenetur molestias, rerum beatae corporis,
              excepturi accusantium quasi inventore soluta!
            </p>
          </div>
          <div class="sizes">
            <form action="" class="form">
              <div class="select-size">
                <h3>Size</h3>
                <label for="sm">
                  <input type="radio" name="size" id="sm">
                  <span>S</span>
                </label>

                <label for="m">
                  <input type="radio" name="size" id="m">
                  <span>M</span>
                </label>

                <label for="lg">
                  <input type="radio" name="size" id="lg">
                  <span>L</span>
                </label>

                <label for="xl">
                  <input type="radio" name="size" id="xl">
                  <span>XL</span>
                </label>
              </div>
            </form>


          </div>

          <div class="quantity">
            <div class="select-quantity">
              <h3>adet</h3>
              <input type="number" name="quantity" value="1">

            </div>
          </div>
          <div class="sub-btn">
            <button class="submit">sepete ekle</button>
          </div>
        </div>
      </div>

    </section>
<!-- yorum ekleme alanı  -->

    <section class="comments">
      <div class="comment-header ">
        <h3></h3>
        <h3>yorum sayısı</h3>
        <button>Yorum Ekle</button>

      </div>
      <div class="comment-body">
        <div class="add-comment">

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
            <input type="text" name="user_id" value="<?php echo $user_id; ?>" hidden class="user_id"/>
            <div class="btn">
              <button type="submit" name="submit">Gönder</button>
            </div>
          </form>

        </div>
<?php
$sql= "SELECT puan, yorum, tarih FROM yorum" ;
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
?>
        <div class="comment-box">
          <div class="star">
      <?php while($row['puan']>0){?>      
            <i class="fa fa-star"></i> 
            <?php
           $row['puan']--;
            }    ?>
           
          </div>
          <div class="comment-detail">
            <span><?php echo 'esma '?></span>
            <span>|</span>
            <span><?php echo  $row[ 'tarih' ] ?></span>
          </div>
          <p><?php echo   $row["yorum"] ?></p>
        </div>

<?php  } 
} ?>    


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

  </main>

  <?php include 'footer.php';?>
  <script src="js/sepete-ekleme.js" defer></script>
  <script src="js/comment.js" defer></script>

</body>

</html>