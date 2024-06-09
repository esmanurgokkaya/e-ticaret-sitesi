<?php
include 'config.php';

session_start();

if (isset($_POST['update_profile'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_code = $_POST['phone_code'];
    $phone = $_POST['phone'];
    $dob_day = $_POST['dob_day'];
    $dob_month = $_POST['dob_month'];
    $dob_year = $_POST['dob_year'];

    $sql = "UPDATE users SET username = ?, email = ?, dob_day = ?, dob_month = ?, dob_year = ?, phone = ?, phone_code = ? WHERE user_id = ?";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        die("Sorgu hazırlamada hata: " . $conn->error);
    }
    
    $stmt->bind_param("sssssssi", $name, $email, $dob_day, $dob_month, $dob_year, $phone, $phone_code, $_SESSION['user_id']);
    
    if ($stmt->execute()) {
        $succMes = "Profil güncellendi.";
        header("Location: ../kullaniciBilgilerim.php?succMes=" . urlencode($succMes));
    } else {
        $error = "Bir hata oluştu: " . $stmt->error;
        header("Location: ../kullaniciBilgilerim.php?error=" . urlencode($error));
    }

    $stmt->close();
} else {
    header("Location: ../kullaniciBilgilerim.php?error=" . urlencode("Geçersiz istek."));
}
$conn->close();
?>
