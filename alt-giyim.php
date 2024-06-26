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
    <section >
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
              <input type="range" id="price-range" name="price-range" min="0" max="1000" >
              <span id="price-display">500</span>
        
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
        
              <button type="submit"  class="button">Filtrele</button>
            </form>
          </div>
        
          <!-- Diğer sayfa içeriği -->
            <div class="products">
                <!-- 1.ürün -->
                <div class="product">
                    <img src="images/alt giyim/etek10.webp" alt="">
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
                    <img src="images/alt giyim/etek11.webp" alt="">
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
                    <img src="images/alt giyim/etek2.webp" alt="">
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
                    <img src="images/alt giyim/etek3.webp" alt="">
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
                    <img src="images/alt giyim/etek4.webp" alt="">
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
                    <img src="images/alt giyim/etek5.webp" alt="">
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
                    <img src="images/alt giyim/etek6.webp" alt="">
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
                    <img src="images/alt giyim/etek7.webp" alt="">
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
                    <img src="images/alt giyim/etek8.webp" alt="">
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
                    <img src="images/alt giyim/etek9.webp" alt="">
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
                <img src="images/alt giyim/pantolon10.webp" alt="">
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
                <img src="images/alt giyim/pantolon14.webp" alt="">
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
                <img src="images/alt giyim/pantolon15.webp" alt="">
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
                <img src="images/alt giyim/pantolon2.webp" alt="">
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
                <img src="images/alt giyim/pantolon3.webp" alt="">
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

        <?php include 'footer.php';?>
      <script src="js/sepete-ekleme.js" defer></script>
      <script>document.addEventListener('DOMContentLoaded', (event) => {
            const priceRange = document.getElementById('price-range');
            const priceDisplay = document.getElementById('price-display');

            // İlk değer ayarı
            priceDisplay.textContent = priceRange.value;

            // Fiyat aralığı değiştikçe gösterilen değeri güncelle
            priceRange.addEventListener('input', () => {
                priceDisplay.textContent = priceRange.value;
            });
        });</script>
</body>
</html>