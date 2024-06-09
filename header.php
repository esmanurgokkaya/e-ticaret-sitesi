<?php require "php/config.php" ?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/header-footer.css">
  <link rel="stylesheet" href="css/shopping-cart.css">
  <script src="js/header.js" defer></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


</head>

<body>
  <header class="header">
    <div class="container discount__panel">
      <marquee direction="left" scrollamount="5">Tüm ürünlerimizde geçerli sepette %10 indirim var. Bu fırsatı kaçırma!</marquee>
    </div>
    <div class="container header__inner">
      <h1 class="logo">ZEE</h1>
      <form action="" method="get" id="arama" class="search">
        <input type="text" name="ara" placeholder="Ürün Ara">
        <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        <div id="search-results">
          <ul id="results-list"></ul>
        </div>
      </form>
      <div class="icons">


        <ul>
          <?php
          if (isset($_SESSION["user_id"])) {
          ?>
            <li>
              <div class="dropdown">
                <button class="dropbtn">
                  <a href="kullaniciBilgilerim.php" class="logging">
                    <i class="fa-regular fa-user" id="icon1"></i>
                    <span id="username"><?php echo $_SESSION['username']; ?></span>
                  </a>
                </button>
                <div class="dropdown-content">
                  <a href="#">Tüm Siparişlerim</a>
                  <a href="kullaniciBilgilerim.php">Kullanıcı Bilgilerim</a>
                  <a href="php/logout.php">Çıkış Yap</a>
                </div>
              </div>
            </li> <?php } else { ?>
            <li><a href="login.php" id="icon1" class="logging"><i class="fa-regular fa-user"></i></a> <?php } ?>
            <li>
              <a href="#" class="shopping" title="Sepete Ekle">
                <i id="icon2" class="fa-solid fa-cart-shopping"></i>
                <span id="count">0</span></a>
              <div id="shopping-basket" class="shopping-basket">
                <div id="basket-list"></div>
                <div id="total-price"></div>
                <button id="clear-basket">Sepeti Temizle</button>
                <form id="order-form" action="payment.php" method="post">
                  <input type="hidden" id="sepet-data" name="sepet-data">
                  <button type="button" id="submit-order">Ödeme Yap</button>
                </form>
              </div>

            </li>
        </ul>
      </div>
    </div>
    <div class="container categories">
      <ul class="nav__links">
        <li class="nav__item"><a href="index.php">YENİ</a></li>
        <li class="nav__item"><a href="dis-giyim.php">DIŞ GİYİM</a></li>
        <li class="nav__item"><a href="alt-giyim.php">ALT GİYİM</a></li>
        <li class="nav__item"><a href="ust-giyim.php">ÜST GİYİM</a></li>
        <li class="nav__item"><a href="index.php">İNDİRİMLİ ÜRÜNLER</a></li>
      </ul>
    </div>
  </header>
  <script>
    $(document).ready(function(){
    $('#arama input').keyup(function(){
        var query = $(this).val();
        if(query !== ''){
            $.ajax({
                url: 'arama_sonuc.php',
                method: 'POST',
                data: {query:query},
                success: function(data){
                    $('#search-results').show();
                    $('#results-list').html(data);
                }
            });
        } else {
            $('#search-results').hide();
        }
    });

    $(document).on('click', '#results-list li', function(){
        var result = $(this).text();
        $('#arama input').val(result);
        $('#search-results').hide();
    });
});
  </script>
</body>