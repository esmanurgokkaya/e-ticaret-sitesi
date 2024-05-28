<?php
include 'php/config.php'; // Veritabanı bağlantısı

// Kullanıcı oturum açmış mı kontrol et
if (isset($_SESSION['user_id'])) {
    // Kullanıcı bilgilerini veritabanından çek
    $user_id = $_SESSION['user_id'];
    $query = "SELECT username, email, phone,dob_day, dob_month, dob_year FROM users WHERE user_id = ?";
    $query = $conn->prepare($query);
    $query->execute([$user_id]);
    $user = $query->fetch(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kullanıcı Bilgilerim</title>
    <link rel="stylesheet" href="css/kullaniciBilgilerim.css">
    <script src="js/kullaniciDG.js" defer></script>
    <script src="js/kullaniciTEL.js" defer></script>
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="container">
        <h2>Kullanıcı Bilgilerim</h2><br>
        <?php
        // Hata mesajı varsa ekranda göster
        if (isset($_GET['error'])) {
            echo '<p style="color:red;font-weight:bold;">' . htmlspecialchars($_GET['error']) . '</p>';
        } elseif (isset($_GET['succMes'])) {
            echo '<p style="color:green;font-weight:bold;">' . htmlspecialchars($_GET['succMes']) . '</p>';
        }
        ?>
        <div class="forms-container">
            <form action="php/update_profile.php" method="POST" class="form-section">
                <h3>Üyelik Bilgilerim</h3><br>
                <label for="name">Ad</label>
                <input type="text" id="name" name="name" value="<?php if (isset($_SESSION['user_id'])) {  echo htmlspecialchars($user['username']); } ?>" required>

                <label for="email">E-Mail</label>
                <input type="email" id="email" name="email" value="<?php if (isset($_SESSION['user_id'])) {  echo htmlspecialchars($user['email']); } ?>" required>

                <label for="phone">Cep Telefonu</label>
                <div class="phone-input">
                    <select id="phone-code" name="phone_code" required>
                        <option value="<?php if (isset($_SESSION['user_id'])) { echo htmlspecialchars($user['phone_code']); }?>" selected><?php if (isset($_SESSION['user_id'])) { echo htmlspecialchars($user['phone_code']); }?></option>
                        <!-- Diğer telefon kodları buraya eklenebilir -->
                    </select>
                    <input type="text" id="phone" name="phone" value="<?php if (isset($_SESSION['user_id'])) { echo htmlspecialchars($user['phone']); }?>" required>
                </div>

                <label for="dob">Doğum Tarihiniz</label>
                <div class="dob-input">
                    <select id="dob_day" name="dob_day" required>
                        <option value="<?php if (isset($_SESSION['user_id'])) { echo htmlspecialchars($user['dob_day']); }?>" selected><?php if (isset($_SESSION['user_id'])) { echo htmlspecialchars($user['dob_day']); }?></option>
                        <!-- Diğer günler buraya eklenebilir -->
                    </select>
                    <select id="dob_month" name="dob_month" required>
                        <option value="<?php if (isset($_SESSION['user_id'])) { echo htmlspecialchars($user['dob_month']); }?>" selected><?php if (isset($_SESSION['user_id'])) { echo htmlspecialchars($user['dob_month']); }?></option>
                        <!-- Diğer aylar buraya eklenebilir -->
                    </select>
                    <select id="dob_year" name="dob_year" required>
                        <option value="<?php if (isset($_SESSION['user_id'])) { echo htmlspecialchars($user['dob_year']); }?>" selected><?php if (isset($_SESSION['user_id'])) { echo htmlspecialchars($user['dob_year']);} ?></option>
                        <!-- Diğer yıllar buraya eklenebilir -->
                    </select>
                </div>

                <button type="submit" name="update_profile">Güncelle</button>
            </form>

            <form action="php/update_password.php" method="POST" class="form-section">
                <h3>Şifre Güncelleme</h3><br>
                <label for="current_password">Şu Anki Şifre</label>
                <input type="password" id="current_password" name="current_password" required>

                <label for="new_password">Yeni Şifre</label>
                <input type="password" id="new_password" name="new_password" required>

                <label for="confirm_password">Yeni Şifre (Tekrar)</label>
                <input type="password" id="confirm_password" name="confirm_password" required>

                <button type="submit" name="update_password">Güncelle</button>
            </form>
        </div>
    </div>
</body>

</html>