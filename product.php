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

    <section class="comments">
      <div class="comment-header ">
        <h3></h3>
        <h3>yorum sayısı</h3>
        <button>Yorum Ekle</button>

      </div>
      <div class="comment-body">
        <div class="add-comment">
          <form action="">
            <div class="star-widget">
              <input type="radio" name="rate" id="rate-5">
              <label for="rate-5" class="fas fa-star"></label>

              <input type="radio" name="rate" id="rate-4">
              <label for="rate-4" class="fas fa-star"></label>

              <input type="radio" name="rate" id="rate-3">
              <label for="rate-3" class="fas fa-star"></label>

              <input type="radio" name="rate" id="rate-2">
              <label for="rate-2" class="fas fa-star"></label>

              <input type="radio" name="rate" id="rate-1">
              <label for="rate-1" class="fas fa-star"></label>
            </div>
            <div class="textarea">
              <textarea name="comment" cols="40" placeholder="YORUM EKLE"></textarea>
            </div>

            <div class="btn">
              <button type="submit">Gönder</button>
            </div>
          </form>

        </div>

        <div class="comment-box">
          <div class="star">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div>
          <div class="comment-detail">
            <span>esma</span>
            <span>|</span>
            <span>3 mart 2024</span>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam consectetur eaque debitis laudantium, quis ipsa doloribus blanditiis atque illo aliquid quibusdam deleniti nam, dolorem porro veniam odit expedita? Nesciunt, culpa.</p>
        </div>
        <div class="comment-box">
          <div class="star">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div>
          <div class="comment-detail">
            <span>esma</span>
            <span>|</span>
            <span>3 mart 2024</span>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam consectetur eaque debitis laudantium, quis ipsa doloribus blanditiis atque illo aliquid quibusdam deleniti nam, dolorem porro veniam odit expedita? Nesciunt, culpa.</p>
        </div>
        <div class="comment-box">
          <div class="star">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div>
          <div class="comment-detail">
            <span>esma</span>
            <span>|</span>
            <span>3 mart 2024</span>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam consectetur eaque debitis laudantium, quis ipsa doloribus blanditiis atque illo aliquid quibusdam deleniti nam, dolorem porro veniam odit expedita? Nesciunt, culpa.</p>
        </div>
        <div class="comment-box">
          <div class="star">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div>
          <div class="comment-detail">
            <span>esma</span>
            <span>|</span>
            <span>3 mart 2024</span>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam consectetur eaque debitis laudantium, quis ipsa doloribus blanditiis atque illo aliquid quibusdam deleniti nam, dolorem porro veniam odit expedita? Nesciunt, culpa.</p>
        </div>


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