<?php
// Veritabanı bağlantısı
require 'config.php';

// POST verilerini al
$rate = $_POST['rate'] ?? '';
$comment = $_POST['comment'] ?? '';
$user_id = $_POST['user_id'] ?? '';
<<<<<<< HEAD

// Veritabanına yorum ekle
if (!empty($rate) && !empty($comment) && !empty($user_id)) {
    $stmt = $conn->prepare("INSERT INTO yorum (user_id, puan, yorum, tarih) VALUES (?, ?, ?, NOW())");
    $stmt->bind_param("iis", $user_id, $rate, $comment);
=======
$urun_id = $_POST['urun_id'] ?? '';

// Veritabanına yorum ekle
if (!empty($rate) && !empty($comment) && !empty($user_id)) {
    $stmt = $conn->prepare("INSERT INTO yorum (urun_id,user_id, puan, yorum, tarih) VALUES (?,?, ?, ?, NOW())");
    $stmt->bind_param("iiis",$urun_id, $user_id, $rate, $comment);
>>>>>>> master
    $stmt->execute();
    $stmt->close();
}

// Yeni yorumları çekip ekrana yazdır
$sql = "SELECT * FROM yorum JOIN users ON yorum.user_id = users.user_id ORDER BY tarih DESC";
$result = mysqli_query($conn, $sql);

$output = '';
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $output .= '<div class="comment-box">';
        $output .= '<div class="star">';
        for ($i = 0; $i < $row['puan']; $i++) {
            $output .= '<i class="fa fa-star"></i>';
        }
        $output .= '</div>';
        $output .= '<div class="comment-detail">';
        $output .= '<span>'. $row['username'] .'</span>'; // Kullanıcı adını buraya ekle
        $output .= '<span>|</span>';
        $output .= '<span>' . $row['tarih'] . '</span>';
        $output .= '</div>';
        $output .= '<p>' . $row['yorum'] . '</p>';
        $output .= '</div>';
    }
}

echo $output;
?>
