<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Sayfası</title>
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>
    <header>
        <h1 class="logo">ZEE</h1>
        <div class="giyim">
            <a class="giyimkategori" href="ust-giyim.php">Üst Giyim</a>
            <a class="giyimkategori" href="alt-giyim.php">Alt Giyim</a>
            <a class="giyimkategori" href="dis-giyim.php">Dış Giyim</a>
        </div>
    </header>

    <div class="content">
        <nav class="sidebar">
            <h3>ZEE YÖNETİCİLERİ</h3><br><br>
            <h4>Esma Nur GÖKKAYA</h4><br>
            <img src="images/esma.jpg" alt=""><br>
            <h4>Elif BARLIK</h4><br>
            <img src="images/eliff.jpg" alt=""><br>
            <h4>Zeynep UĞUZ</h4>
            <img src="images/zeynepp.jpg" alt=""><br>
        </nav>

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

        <main class="admin-main">
            <button>Ürün Ekle</button>
            <form method="post" action="admin.php" enctype="multipart/form-data" id="ekle">
                <table class="form-table">
                    <tr>
                        <th>Ürün Adı</th>
                        <td><input type="text" name="urun_adi" required></td>
                    </tr>
                    <tr>
                        <th>Ürün Görseli</th>
                        <td><input type="file" name="resim" required></td>
                    </tr>
                    <tr>
                        <th>Bedeni</th>
                        <td><input type="text" name="beden" required></td>
                    </tr>
                    <tr>
                        <th>Rengi</th>
                        <td><input type="text" name="renk" required></td>
                    </tr>
                    <tr>
                        <th>Açıklama</th>
                        <td><input type="text" name="aciklama" required></td>
                    </tr>
                    <tr>
                        <th>Marka</th>
                        <td><input type="text" name="marka" required></td>
                    </tr>
                    <tr>
                        <th>Kumaş</th>
                        <td><input type="text" name="kumas" required></td>
                    </tr>
                    <tr>
                        <th>Fiyatı</th>
                        <td><input type="number" name="fiyat" required></td>
                    </tr>
                    <tr>
                        <th>İndirim</th>
                        <td><input type="number" name="indirim" required></td>
                    </tr>
                    <tr>
                        <th>Kategori</th>
                        <td>
                            <select name="kat_adi" id="kat_adi" class="kategorii">
                                <option value="kategorisecim" name="">Seç</option>
                                <option value="ustgiyim" name="ust_giyim">Üst Giyim</option>
                                <option value="altgiyim" name="alt_giyim">Alt Giyim</option>
                                <option value="disgiyim" name="dis_giyim">Dış Giyim</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><button type="submit" name="submit">Yeni Ürün Ekle</button></td>
                    </tr>
                </table>
            </form>

            <?php
            require 'php/config.php';

            if (isset($_POST["submit"])) {
                $urun_adi = $_POST["urun_adi"];
                $resim = $_FILES["resim"]["name"];
                $temp_name = $_FILES["resim"]["tmp_name"];
                $folder = "images/" . basename($resim);
                $beden = $_POST["beden"];
                $renk = $_POST["renk"];
                $aciklama = $_POST["aciklama"];
                $marka = $_POST["marka"];
                $kumas = $_POST["kumas"];
                $fiyat = $_POST["fiyat"];
                $indirim = $_POST["indirim"];
                $kat_adi = $_POST["kat_adi"];

                if ($kat_adi == "ustgiyim") {
                    $kat_id = 1;
                    $folder = "images/ustgiyim/" . basename($resim);
                } elseif ($kat_adi == "altgiyim") {
                    $kat_id = 2;
                    $folder = "images/altgiyim/" . basename($resim);
                } elseif ($kat_adi == "disgiyim") {
                    $kat_id = 3;
                    $folder = "images/disgiyim/" . basename($resim);
                } else {
                    $kat_id = 0; 
                    $folder = "images/unknown/" . basename($resim);
                }
                
                

                if (move_uploaded_file($temp_name, $folder)) {
                    echo "Dosya başarıyla yüklendi.";
                } else {
                    echo "Dosya yüklenemedi.";
                }

                $sql = "INSERT INTO urunler (urun_adi, resim, bedeni, urun_rengi, aciklama, marka, kumas, fiyati, indirim, kategori_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ssssssdiii", $urun_adi, $resim, $beden, $renk, $aciklama, $marka, $kumas, $fiyat, $indirim, $kat_id);

                if ($stmt->execute()) {
                    echo "<script>
                        setTimeout(() => {
                    window.location.href = 'admin.php';
                }, 10);
                    </script>";
                     exit();
                } else {
                    echo "Hata: " . $stmt->error;
                }

                $stmt->close();
            }
//katID/
            $sql = "SELECT * FROM urunler";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<table class='id'>
                <tr>
                    <th>ID</th>
                    <th>Ürün Adı</th>
                    <th>Ürün Görseli</th>
                    <th>Bedeni</th>
                    <th>Rengi</th>
                    <th>Açıklama</th>
                    <th>Marka</th>
                    <th>Kumaş</th>
                    <th>Fiyatı</th>
                    <th>İndirim</th>
                    <th>Kategori ID</th>
                    <th>Aksiyonlar</th>
                </tr>";

                while ($row = $result->fetch_assoc()) {

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
                    echo "<tr>
                        <td>" . $row["urun_id"] . "</td>
                        <td>" . $row["urun_adi"] . "</td>
                        <td><img src='" . $resimYolu . "' alt='" . $row["urun_adi"] . "' style='width:100px;'></td>
                        <td>" . $row["bedeni"] . "</td>
                        <td>" . $row["urun_rengi"] . "</td>
                        <td>" . $row["aciklama"] . "</td>
                        <td>" . $row["marka"] . "</td>
                        <td>" . $row["kumas"] . "</td>
                        <td>" . $row["fiyati"] . "</td>
                        <td>" . $row["indirim"] . "</td>
                        <td>" . $row["kategori_id"] . "</td>
                        <td>
                             <div id='update_product'<form><a  class='update_button' href='update_product.php'?urun_id= '". $row["urun_id"] ."'>Güncelle</a></form></div> <br>
                            <form method='post' id='deleteForm" . $row["urun_id"] . "'>
                                <input type='hidden' name='id' value='" . $row["urun_id"] . "'>
                                <input type='hidden' name='delete' value='1'>
                                <input type='button' id='delete' onclick='confirmDelete(" . $row["urun_id"] . ")' value='Sil'>
                            </form>
                        </td>
                    </tr>";
                }
                echo "</table>";
            } else {
                echo "Ürün bulunamadı.";
            }

            if (isset($_POST["delete"])) {
                $id = $_POST["id"];

                $sql = "DELETE FROM urunler WHERE urun_id = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("i", $id);

                if ($stmt->execute()) {
                    echo "<script>
                        setTimeout(() => {
                    window.location.href = 'admin.php';
                }, 10);
                    </script>";
                    exit();
                } else {
                    echo "Hata: " . $stmt->error;
                }

                $stmt->close();
            }
            ?>
        </main>
    </div>
    <script src="js/admin.js"></script>
</body>
</html>
