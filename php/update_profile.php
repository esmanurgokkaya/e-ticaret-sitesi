<?php
include 'config.php';
session_start();

if (isset($_POST['update_profile'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dob_day = $_POST['dob_day'];
    $dob_month = $_POST['dob_month'];
    $dob_year = $_POST['dob_year'];

    // Doğum tarihini birleştirme
    $dob = "$dob_year-$dob_month-$dob_day";

    // SQL sorgusu
    $sql = "UPDATE users SET username= ?, email = ?, dog_day = ?, phone=? WHERE user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssi", $name, $email, $dob, $phone, $_SESSION['user_id']);
    
    if ($stmt->execute()) {
        echo "Profil güncellendi.";
    } else {
        echo "Bir hata oluştu.";
    }
}
?>
