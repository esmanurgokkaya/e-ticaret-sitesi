<?php
include 'config.php';
session_start();

if (isset($_POST['update_password'])) {
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    // Kullanıcının mevcut şifresini veritabanından çekme
    $sql = "SELECT password FROM users WHERE user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $_SESSION['user_id']);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    // Mevcut şifreyi doğrulama
    if (password_verify($current_password, $row['password'])) {
        if ($new_password === $confirm_password) {
            // Yeni şifreyi hashleyip güncelleme
            $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
            $sql = "UPDATE users SET password = ? WHERE user_id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("si", $hashed_password, $_SESSION['user_id']);

            if ($stmt->execute()) {
                // Şifre başarıyla güncellendi
                $succMes = "Şifre başarıyla güncellendi.";
                header("Location: ../kullaniciBilgilerim.php?succMes=" . urlencode($succMes));
            } else {
                $error = "Bir hata oluştu.Daha sonra yeniden deneyin!";
                header("Location: ../kullaniciBilgilerim.php?error=" . urlencode($error));
            }
        } else {
            // Yeni şifre ve onaylanan şifre uyuşmuyor
            $error = "Yeni şifre ve tekrarlanan şifre uyuşmuyor.";
            header("Location: ../kullaniciBilgilerim.php?error=" . urlencode($error));
        }
    } else {
        // Mevcut şifre yanlış
        $error = "Mevcut şifre yanlış.";
        header("Location: ../kullaniciBilgilerim.php?error=" . urlencode($error));
    }
}
