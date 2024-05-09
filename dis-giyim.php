<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/products.css">
</head>
<body>
<?php include 'header.php';?>
    <section  >
        <div class="filter-container">
        <form id="filter-form">
            <label for="category">Beden</label>
            <select id="category" name="category">
            <option value="empty">Beden Seçiniz</option>
            <option value="xs">XS</option>
            <option value="s">S</option>
            <option value="m">M</option>
            <option value="l">L</option>
            <option value="xl">XL</option>
            <option value="xxl">XXL</option>


            <!-- Diğer kategori seçenekleri eklenebilir -->
            </select>
    
            <label for="price-range">Fiyat Aralığı</label>
            <input type="range" id="price-range" name="price-range" min="0" max="1000">
    
            <label for="brand">Marka</label>
            <input type="text" id="brand" name="brand">
    
            <label for="size">Renk</label>
            <select id="size" name="size">
            <option value="small">Kırmızı</option>
            <option value="medium">Mavi</option>
            <option value="large">Yeşil</option>
            <option value="large">Mor</option>
            <option value="large">Siyah</option>

            <!-- Diğer beden seçenekleri eklenebilir -->
            </select>
    
            <label for="color">Kumaş Tipi</label>
            <input type="text" id="color" name="color">
    
            <button type="submit" class="button">Filtrele</button>
        </form>
        </div>
    
        <!-- Diğer sayfa içeriği -->
        <div class="products">
            <!-- 1.ürün -->
            <div class="product">
                <img src="images/dis giyim/disGiyim1.webp" alt="">
                <div class="description">
                <span>Elbise takım </span>
                <div class="price">
                    <h4>250 TL</h4>
                </div>
                <input type="button" class="button" value="Sepete Ekle">
                </div>
    
            </div>
            <!-- 2.ürün -->
            <div class="product">
                <img src="images/dis giyim/disGiyim10.webp" alt="">
                <div class="description">
                <span>Elbise takım </span>
                <div class="price">
                    <h4>250 TL</h4>
                </div>
                <input type="button" class="button" value="Sepete Ekle">
                </div>
            </div>
            <!-- 3.ürün -->
            <div class="product">
                <img src="images/dis giyim/disGiyim11.webp" alt="">
                <div class="description">
                <span>Elbise takım </span>
                <div class="price">
                    <h4>250 TL</h4>
                </div>
                <input type="button" class="button" value="Sepete Ekle">
                </div>
            </div>
            <!-- 4.ürün -->
            <div class="product">
                <img src="images/dis giyim/disGiyim12.webp" alt="">
                <div class="description">
                <span>Elbise takım </span>
                <div class="price">
                    <h4>250 TL</h4>
                </div>
                <input type="button" class="button" value="Sepete Ekle">
                </div>
            </div>
            <!-- 5.ürün -->
            <div class="product">
                <img src="images/dis giyim/disGiyim13.webp" alt="">
                <div class="description">
                <span>Elbise takım </span>
                <div class="price">
                    <h4>250 TL</h4>
                </div>
                <input type="button" class="button" value="Sepete Ekle">
                </div>
            </div>
            <!-- 6.ürün -->
            <div class="product">
                <img src="images/dis giyim/disGiyim14.webp" alt="">
                <div class="description">
                <span>Elbise takım </span>
                <div class="price">
                    <h4>250 TL</h4>
                </div>
                <input type="button" class="button" value="Sepete Ekle">
                </div>
            </div>

            <!-- 7.ürün  -->
            <div class="product">
                <img src="images/dis giyim/disGiyim9.webp" alt="">
                <div class="description">
                <span>Elbise takım </span>
                <div class="price">
                    <h4>250 TL</h4>
                </div>
                <input type="button" class="button" value="Sepete Ekle">
                </div>
            </div>
            <!-- 8.ürün  -->
            <div class="product">
                <img src="images/dis giyim/disGiyim16.webp" alt="">
                <div class="description">
                <span>Elbise takım </span>
                <div class="price">
                    <h4>250 TL</h4>
                </div>
                <input type="button" class="button" value="Sepete Ekle">
                </div>
            </div>
            <!-- 9.ürün  -->
            <div class="product">
                <img src="images/dis giyim/disGiyim2.webp" alt="">
                <div class="description">
                <span>Elbise takım </span>
                <div class="price">
                    <h4>250 TL</h4>
                </div>
                <input type="button" class="button" value="Sepete Ekle">
                </div>
            </div>
            <!-- 10.ürün  -->
            <div class="product">
                <img src="images/dis giyim/disGiyim3.webp" alt="">
                <div class="description">
                <span>Elbise takım </span>
                <div class="price">
                    <h4>250 TL</h4>
                </div>
                <input type="button" class="button" value="Sepete Ekle">
                </div>
            </div>
        <!-- 11.ürün  -->
        <div class="product">
            <img src="images/dis giyim/disGiyim4.webp" alt="">
            <div class="description">
            <span>Elbise takım </span>
            <div class="price">
                <h4>250 TL</h4>
            </div>
            <input type="button" class="button" value="Sepete Ekle">
            </div>
        </div>
        <!-- 12. ürün  -->
        <div class="product">
            <img src="images/dis giyim/disGiyim5.webp" alt="">
            <div class="description">
            <span>Elbise takım </span>
            <div class="price">
                <h4>250 TL</h4>
            </div>
            <input type="button" class="button" value="Sepete Ekle">
            </div>
        </div>
        <!-- 13.ürün  -->
        <div class="product">
            <img src="images/dis giyim/disGiyim6.webp" alt="">
            <div class="description">
            <span>Elbise takım </span>
            <div class="price">
                <h4>250 TL</h4>
            </div>
            <input type="button" class="button" value="Sepete Ekle">
            </div>
        </div>
        <!-- 14.ürün  -->
        <div class="product">
            <img src="images/dis giyim/disGiyim7.webp" alt="">
            <div class="description">
            <span>Elbise takım </span>
            <div class="price">
                <h4>250 TL</h4>
            </div>
            <input type="button" class="button" value="Sepete Ekle">
            </div>
        </div>
        <!-- 15.ürün  -->
        <div class="product">
            <img src="images/dis giyim/disGiyim8.webp" alt="">
            <div class="description">
            <span>Elbise takım </span>
            <div class="price">
                <h4>250 TL</h4>
            </div>
            <input type="button" class="button" value="Sepete Ekle">
            </div>
        </div>
        
        </div>
    </section>
    <script src="js/sepete-ekleme.js" defer></script>
    <?php include 'footer.php';?>
</body>
</html>