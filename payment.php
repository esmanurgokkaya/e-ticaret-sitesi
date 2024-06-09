<?php
require 'php/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sepetim</title>
    <link rel="stylesheet" href="css/payment.css">
</head>

<body>
    <div class="container">
        <!-- <div class="products">
            <h2>Sepetim</h2>
            <?php

<<<<<<< HEAD
            </div> -->
            <?php
// JSON verilerini al
$json_data = file_get_contents('php://input');

// JSON verilerini diziye dönüştür
$data = json_decode($json_data, true);

// Veriler boş değilse ve dönüştürme işlemi başarılıysa devam et
if (!empty($data)) {
    // Sepet verilerini kullanarak sayfa içeriğini oluştur
    $page_content = '<div class="products">';
    $page_content .= '<h2>Sepetim</h2>';

    foreach ($data as $urun) {
        $page_content .= '<div class="product-item">';
        $page_content .= '<img src="' . $urun['resim'] . '" alt="' . $urun['isim'] . '">';
        $page_content .= '<div>Ürün Adı: ' . $urun['isim'] . '</div>';
        $page_content .= '<div>Fiyat: ' . $urun['fiyat'] . '</div>';
        $page_content .= '</div>';
    }

    $page_content .= '</div>';

    // Sayfa içeriğini ekrana yazdır
    echo $page_content;
} else {
    // JSON verileri boşsa veya dönüştürme işlemi başarısız olduysa hata mesajı gönder
    echo 'Gönderilen veriler geçersiz!';
}
?>

        </div>
        <div class="order-summary">
            <h2>Sipariş Özeti</h2>
            <div class="order-details">
                <div>Toplam Ürün Sayısı: 3</div>
                <div>Toplam Tutar: $50</div>
                <div>Kargo Ücreti: $0</div>
                <div>Toplam Tutar (Kargo Ücreti Dahil): $50</div>
            </div>
            <div class="order-details">
                <h3>Ödeme Yap</h3>
                <input type="text" placeholder="Ad" name="ad">
                <input type="text" placeholder="Soyad" name="soyad">
                <input type="text" placeholder="Telefon Numarası" name="telefon">
                <input type="text" placeholder="Adres" name="adres">
                <input type="text" placeholder="Kredi Kartı Numarası" name="kartno">
                <input type="text" placeholder="Son Kullanma Tarihi (MM/YY)" name="skt">
                <input type="text" placeholder="Güvenlik Kodu" name="guvenlikkodu">
                <button name="submit">Ödeme Yap</button>
            </div>
=======
            if (isset($_COOKIE['cart'])) {
                $toplam_fiyat = 0;
                $toplam_urun = 0;
                $urunler = json_decode($_COOKIE['cart'], true);

                // Eğer birden fazla ürün varsa her birini işle
                foreach ($urunler as $urunBilgileri) {
                    $urunID = $urunBilgileri['urun_id'];
                    $beden = $urunBilgileri['size'];
                    $miktar = $urunBilgileri['quantity'];

                    $query = "SELECT * FROM urunler  WHERE urun_id = $urunID ";
                    $result = mysqli_query($conn, $query);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $kategori_klasoru = "";

                            switch ($row["kategori_id"]) {
                                case 1:
                                    $kategori_klasoru = "ustgiyim";
                                    break;
                                case 2:
                                    $kategori_klasoru = "altgiyim";
                                    break;
                                case 3:
                                    $kategori_klasoru = "disgiyim";
                                    break;
                                default:
                                    $kategori_klasoru = "unknown";
                                    break;
                            }

                            // Resmin yolunu oluştur
                            $resimYolu = "images/" . $kategori_klasoru . "/" . $row["resim"];
            ?>

                            <div class="product-item">
                                <img src="<?php echo $resimYolu ?>" alt="Ürün 1">
                                <div><?php echo $row['urun_adi'] ?></div>
                                <div class="number-spinner">
                                    <button class="decrease" onclick="changeValue(-1)" min="1">&#8722;</button>
                                    <input type="text" id="number" value="<?php echo $miktar ?>" readonly>
                                    <button class="increase" onclick="changeValue(1)" min="1">&#43;</button>
                                </div>
                                <div><?php echo $beden ?></div>
                                <div><?php echo $row['fiyati'] ?> TL</div>
                            </div>
            <?php

                                $toplam_urun += $miktar;
                                $toplam_fiyat += $miktar * $row['fiyati'];

                        }
                    }
                }
            } else {
                echo "<p>Sepette ürün bulunmamaktadır.</p>";
            }
            ?>
        </div>

    
    <div class="order-summary">
        <h2>Sipariş Özeti</h2>
        <div class="order-details">
            <div>Toplam Ürün Sayısı: <?php echo $toplam_urun ?> TL</div>
            <div>Toplam Tutar: <?php echo $toplam_fiyat ?> TL</div>
            <div>Kargo Ücreti: 50 TL</div>
            <div>Toplam Tutar (Kargo Ücreti Dahil): <?php echo $toplam_fiyat + 50?> TL</div>
        </div>
        <div class="order-details">
            <h3>Ödeme Yap</h3>
            <form action="php/pay.php" method="post">
            <input type="text" placeholder="Ad" name="ad">
            <input type="text" placeholder="Soyad" name="soyad">
            <input type="text" placeholder="Telefon Numarası" name="telefon" required>
            <input type="text" placeholder="Adres" name="adres" required>
            <input type="text" placeholder="Kredi Kartı Numarası" name="kartno" required>
            <input type="text" placeholder="Son Kullanma Tarihi (MM/YY)" name="skt">
            <input type="text" placeholder="Güvenlik Kodu" name="guvenlikkodu">
            <input type="text" name="urun"  value= "<?php echo $urunID ?>" hidden>
            <input type="text" name="adet"  value= "<?php echo $toplam_urun ?>" hidden>
            <input type="text" name="fiyat"  value= "<?php echo $toplam_fiyat+50 ?>" hidden>
            <button name="submit">Ödeme Yap</button>
        </form>
>>>>>>> master
        </div>
    </div>
    </div></div>
    <script src="js/payment.js"></script>
</body>

</html>