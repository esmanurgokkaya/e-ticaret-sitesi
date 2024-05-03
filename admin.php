<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="css/admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative&display=swap" rel="stylesheet">

</head>
<body>
    <header>
        <h1 class="logo">ZEE</h1>
    </header>

    <nav>
        <ul>
            <li><a href="ust-giyim.html" onclick="showCategory('dresses')">Üst Giyim</a></li>
            <li><a href="alt-giyim.html" onclick="showCategory('pants')">Alt Giyim</a></li>
            <li><a href="dis-giyim.html" onclick="showCategory('shoes')">Dış Giyim</a></li>
        </ul>
    </nav>

    <section>
        <div class="dashboard-section">
            <div class="dashboard-item">
                <h3>Bu Ayın Kullanıcı Etkinliği</h3>
                <p id="userActivity">1000</p>
                <div class="bar-container">
                    <div id="userActivityBar" class="bar"></div>
                </div>
            </div>

            <div class="dashboard-item">
                <h3>Sayfa Görüntülemeleri</h3>
                <p id="pageViews">1000</p>
                <div class="bar-container">
                    <div id="pageViewsBar" class="bar"></div>
                </div>
            </div>

            <div class="dashboard-item">
                <h3>Aylık Gelir Artışı</h3>
                <p id="monthlyRevenue">1000</p>
                <div class="bar-container">
                    <div id="monthlyRevenueBar" class="bar"></div>
                </div>
            </div>

            <div class="dashboard-item">
                <h3>Yeni E-postalar</h3>
                <p id="newEmails">500</p>
                <div class="bar-container">
                    <div id="newEmailsBar" class="bar"></div>
                </div>
            </div>
        </div>

        <h2 id="categoryTitle">Elbiseler</h2>
        <button onclick="openAddProductForm()">Yeni Ürün Ekle</button>
        <table id="productTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Ürün Adı</th>
                    <th>Fiyatı</th>
                    <th>Bedeni</th>
                    <th>Rengi</th>
                    <th>Aksiyonlar</th>
                </tr>
            </thead>
            <tbody id="productList">
                <!-- Ürünler burada listelenecek -->
            </tbody>
        </table>

        <div id="editForm">
            <h3>Ürünü Düzenle</h3>
            <label for="newFeature1">Ürün Adı</label>
            <input type="text" id="newFeature1" name="newFeature1" required>

            <label for="newFeature2">Fiyatı</label>
            <input type="text" id="newFeature2" name="newFeature2" required>

            <label for="newFeature3">Bedeni</label>
            <input type="text" id="newFeature3" name="newFeature3" required>

            <label for="newFeature4">Rengi</label>
            <input type="text" id="newFeature4" name="newFeature4" required>

            <button onclick="saveChanges()">Kaydet</button>
            <button onclick="cancelEdit()">İptal</button>
        </div>

        <div id="addProductForm">
            <h3>Yeni Ürün Ekle</h3>
            <form id="newProductForm">
                <label for="productName">Ürün Adı</label>
                <input type="text" id="productName" name="productName" required>

                <label for="productFeature1">Fiyatı</label>
                <input type="text" id="productFeature1" name="productFeature1" required>

                <label for="productFeature2">Bedeni</label>
                <input type="text" id="productFeature2" name="productFeature2" required>

                <label for="productFeature2">Rengi</label>
                <input type="text" id="productFeature2" name="productFeature2" required>

                <button type="button" onclick="addProduct()">Ekle</button>
                <button type="button" onclick="cancelAdd()">İptal</button>
            </form>
        </div>
    </section>

    <script src="js/admin.js"></script>
    
    </body>
    </html>