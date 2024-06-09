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
            <div class="product-item">
                <img src="images/bg.jpg" alt="Ürün 1">
                <div>Ürün Adı: Ürün 1</div>
                <div class="number-spinner">
                    <button class="decrease" onclick="changeValue(-1)" min="1">&#8722;</button>
                    <input type="text" id="number" value="3" readonly>
                    <button class="increase" onclick="changeValue(1)" min="1">&#43;</button>
                </div>
                <div>Fiyat: $10</div>
            </div>
            <div class="product-item">
                <img src="images/Logo.jpeg" alt="Ürün 2">
                <div>Ürün Adı: Ürün 2</div>
                <div class="number-spinner">
                    <button class="decrease" onclick="changeValue(-1)">&#8722;</button>
                    <input type="text" id="number" value="3" readonly>
                    <button class="increase" onclick="changeValue(1)">&#43;</button>
                </div>
                <div>Fiyat: $20</div>

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
        </div>
    </div>
    <script src="js/payment.js"></script>
</body>

</html>