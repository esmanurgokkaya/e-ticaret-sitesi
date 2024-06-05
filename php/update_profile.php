<?php
include 'config.php';


if (isset($_POST['update_profile'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dob_day = $_POST['dob_day'];
    $dob_month = $_POST['dob_month'];
    $dob_year = $_POST['dob_year'];

    // SQL sorgusu
    $sql = "UPDATE users SET username= ?, email = ?, dob_day = ?,dob_month=?, dob_year=? phone=? WHERE user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssi", $name, $email, $dob_day, $dob_month,$dob_year, $phone, $_SESSION['user_id']);
    
    if ($stmt->execute()) {
        $succMes = "Profil güncellendi.";
        header("Location: ../kullaniciBilgilerim.php?succMes=" . urlencode($succMes));
    } else {
        $error = "Bir hata oluştu.";
        header("Location: ../kullaniciBilgilerim.php?error=" . urlencode($error));
    }
}
?>
