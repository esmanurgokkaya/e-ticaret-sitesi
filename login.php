<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ZEE - Giriş Yap</title>
  <link rel="stylesheet" href="css/login-register.css">
  <link rel="stylesheet" href="css/header-footer.css">
  <script src="js/login-register.js" defer></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative&display=swap" rel="stylesheet">

</head>

<body>
  <div class="container2">
    <div class="content">
      <h1 class="logo">ZEE</h1>
  <?php  //echo password_hash(123456, PASSWORD_DEFAULT);
     ?>

      <div class="text-sci">
        <h2>HOŞGELDİNİZ! <br><span>Hemen Giriş Yaparak Alışverişe Başlayın!</span></h2>
        <p>Sosyal Medya Hesaplarımızı Takip Edebilirsiniz.</p>
        <div class="social-icons">
          <p><a href="https://www.instagram.com/esmnr.gkky/"><i class="fa-brands fa-instagram"></i> İnstagram</a></p>
          <p><a href="#"><i class="fa-brands fa-whatsapp"></i> WhatsApp</a></p>
        </div>
      </div>
    </div>
    <div class="logreg-box">
      <div class="form-box login">
        <form action="php/loginUser.php" method="post">
          <h2>Giriş Yap</h2>
          <?php
          // Hata mesajı varsa ekranda göster
          if (isset($_GET['error'])) {
            echo '<p style="color:red;font-weight:bold;">' . htmlspecialchars($_GET['error']) . '</p>';
          }
          ?>
          <div class="input-box">
            <span class="icon"><i class="fa-solid fa-envelope"></i></span>
            <input type="email" id="email" name="email" required>
            <label for="email">E-mail</label>
          </div>
          <div class="input-box" id="pass-box">
            <span class="icon">
              <i class="fa-regular fa-eye" style="display: none;" id="show"></i>
              <i class="fa-regular fa-eye-slash" id="hide"></i>
            </span>
            <input type="password" id="pass" name="pass" required>
            <label for="pass">Şifre</label>
          </div>
          <div class="remember-forgot">
            <label for="rembr-forg"><input type="checkbox" id="rembr-forg">Beni Hatırla</label>
            <a href="pass-reset.php">Şifremi unuttum?</a>
          </div>
          <button type="submit" name="loginButton" class="btn">Giriş Yap</button>
          <div class="login-register">
            <p>Henüz Hesabın Yok Mu? <a href="register.php" class="register-link">Üye Ol</a></p>
          </div>
        </form>

      </div>
    </div>
  </div>
</body>

</html>