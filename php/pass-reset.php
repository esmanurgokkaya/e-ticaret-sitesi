<?php
include 'config.php';

if (isset($_POST['update_password'])) {
    $email = $_POST['email'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    // Kullanıcının veritabanında olup olmadığını kontrol et
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Yeni şifrelerin uyuşup uyuşmadığını kontrol et
        if ($new_password === $confirm_password) {
            // Yeni şifreyi hashleyip güncelleme
            $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
            $row = $result->fetch_assoc();
            $user_id = $row['user_id'];

            $sql = "UPDATE users SET password = ? WHERE user_id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("si", $hashed_password, $user_id);

            if ($stmt->execute()) {
                // Şifre başarıyla güncellendi
                $succMes = "Şifre başarıyla güncellendi.";
                header("Location: ../pass-reset.php?succMes=" . urlencode($succMes));
            } else {
                // Güncelleme hatası
                $error = "Bir hata oluştu. Daha sonra yeniden deneyin!";
                header("Location: ../pass-reset.php?error=" . urlencode($error));
            }
        } else {
            // Yeni şifre ve onaylanan şifre uyuşmuyor
            $error = "Yeni şifre ve tekrarlanan şifre uyuşmuyor.";
            header("Location: ../pass-reset.php?error=" . urlencode($error));
        }
    } else {
        // Kullanıcı bulunamadıysa
        $error = "E-posta adresi bulunamadı.";
        header("Location: ../pass-reset.php?error=" . urlencode($error));
    }
    
    // Bağlantıyı kapat
    $stmt->close();
    $conn->close();
}
?>
