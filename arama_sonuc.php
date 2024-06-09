<?php
include 'php/config.php'; // Veritabanı bağlantı dosyasını dahil et

if (isset($_POST['query'])) {
    $searchQuery = htmlspecialchars($_POST['query']); // Kullanıcıdan gelen arama sorgusunu güvenli hale getir

    // Arama sorgusu
    $stmt = $conn->prepare("SELECT * FROM urunler WHERE urun_adi LIKE ?");
    $likeQuery = "%" . $searchQuery . "%";
    $stmt->bind_param("s", $likeQuery);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<div class='product-list'>";
        while ($row = $result->fetch_assoc()) {
            echo "<div class='product'>";
            echo "<img src='" . $row['resim'] . "' alt='" . htmlspecialchars($row['urun_adi']) . "'>";
            echo "<div class='product-info'>";
            echo "<h4>" . htmlspecialchars($row['urun_adi']) . " </h3>";
            echo "<h4> Fiyat: " . htmlspecialchars($row['fiyati']) . " TL</p>";
            echo "</div>";
            echo "</div>";
        }
        echo "</div>";
    } else {
        echo "<p>Sonuç bulunamadı.</p>";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "<p>Lütfen arama terimi girin.</p>";
}
?>
<html>
    <link rel="stylesheet" href="css/arama_sonuc.css">
</html>