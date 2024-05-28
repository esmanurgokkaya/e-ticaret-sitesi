<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/pass-reset.css">
</head>

<body>
    <div class="container">
        <div>
            <form action="php/pass-reset.php" method="POST" class="form-section">
                <h3>Şifre Sıfırlama</h3>
                <?php
                // Hata mesajı varsa ekranda göster
                if (isset($_GET['error'])) {
                    echo '<p style="color:red;font-weight:bold;">' . htmlspecialchars($_GET['error']) . '</p>';
                } elseif (isset($_GET['succMes'])) {
                    echo '<p style="color:green;font-weight:bold;">' . htmlspecialchars($_GET['succMes']) . '</p>';
                }
                ?>
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