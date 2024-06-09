<?php 
require "config.php";
$user_id = $_SESSION['user_id'];

if(isset($_POST['submit'])){
    $urun_id = $_POST['urun'];
    $adet = $_POST['adet'];
    $fiyat = $_POST['fiyat'];
    $telefon = $_POST['telefon'];
    $adres = $_POST['adres'];
    $kartno = $_POST['kartno'];
  
 $sql = "INSERT INTO satis (urun_id, adet, fiyat, telefon, kart_no, adres, user_id) VALUES (?,?,?,?,?,?,?)";
  $stmt = mysqli_prepare($conn, $sql);
  mysqli_stmt_bind_param($stmt, "iiisssi", $urun_id, $adet, $fiyat,$telefon, $kartno,$adres, $user_id);
  mysqli_stmt_execute($stmt);
 setcookie('cart', json_encode($cart), time() - (86400 * 30), "/");
 header('Location: ../index.php');

}