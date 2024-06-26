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
  <?php ?>
  <div class="container2">
    <div class="content">
      <h1 class="logo">ZEE</h1>
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
      <div class="form-box register">
        <form action="php/userAdd.php" method="post">
          <h2>Üye Ol</h2>
          <?php
          // Hata mesajı varsa ekranda göster
          if (isset($_GET['error'])) {
            echo '<p style="color:red;font-weight:bold;">' . htmlspecialchars($_GET['error']) . '</p>';
          }
          ?>
          <div class="input-box">
            <span class="icon"><i class="fa-solid fa-user"></i></span>
            <input type="text" id="name" name="name" required>
            <label for="name">Isim</label>
          </div>
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
            <label for="rembr-forg"><input type="checkbox" name="check" id="rembr-forg"><span>Üyelik koşullarını</span> kabul ediyorum.</label>
          </div>
          <button type="submit" class="btn" name="registerButton">Üye Ol</button>

          <div class="login-register">
            <p>Zaten bir hesabın var mı? <a href="login.php" class="login-link">Giriş Yap</a></p>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>