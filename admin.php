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
            <a href="ust-giyim.php">Üst Giyim</a>
            <a href="alt-giyim.php">Alt Giyim</a>
            <a href="dis-giyim.php">Dış Giyim</a>
       </div>
        
    </header>

    <div class="content">
        <nav class="sidebar">

            <h3> ZEE YÖNETİCİLERİ</h3><br><br>

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
      <th>Kategori ID</th>
      <td><input type="text" name="kat_id" required></td>
    </tr>
    <tr>
      <td colspan="2"><button type="submit" name="submit">Yeni Ürün Ekle</button></td>
    </tr>
  </table>
</form>


            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "zeedatabase";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Veritabanına bağlanılamadı: " . $conn->connect_error);
            }

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
                $kat_id = $_POST["kat_id"];
                

                if (move_uploaded_file($temp_name, $folder)) {
                  echo "Dosya başarıyla yüklendi.";
              } else {
                  echo "Dosya yüklenemedi.";
              }

              $sql = "INSERT INTO urunler (urun_adi, resim, bedeni, urun_rengi, aciklama,marka, kumas, fiyati, indirim, kategori_id) VALUES (?, ?, ?, ?,?,?,?,?,?,?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ssssssdiii", $urun_adi, $resim, $beden, $renk, $aciklama, $marka, $kumas, $fiyat, $indirim, $kat_id);
                

                if ($stmt->execute()) {
                    echo "Yeni ürün başarıyla eklendi.";
                    header("Location: admin.php");
                    exit();
                } else {
                    echo "Hata: " . $stmt->error;
                }

                $stmt->close();
            }

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
                    $resimYolu = "images/" . $row["resim"];
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
                            <button onclick='openUpdateModal(" . $row["urun_id"] . ")'>Güncelle</button>
                            <form method='post' id='deleteForm" . $row["urun_id"] . "'>
                                <input type='hidden' name='id' value='" . $row["urun_id"] . "'>
                                <input type='hidden' name='delete' value='1'>
                                <input type='button' onclick='confirmDelete(" . $row["urun_id"] . ")' value='Sil'>
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
                    exit();
                } else {
                    echo "Hata: " . $stmt->error;
                }
            
                $stmt->close();
            }
            
               
            // Ürün güncelleme formunu gösterme
if (isset($_POST["update"])) {
    $urun_id = $_POST["urun_id"];
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
    $kat_id = $_POST["kat_id"];

    // Eğer resim yüklenmişse, yükleme işlemini yap
    if (!empty($resim) && move_uploaded_file($temp_name, $folder)) {
        echo "Dosya başarıyla yüklendi.";
    } elseif (empty($resim)) {
        // Resim yüklenmediyse, mevcut resmi kullan
        $sql = "SELECT resim FROM urunler WHERE urun_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $urun_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        $resim = $row['resim'];
    } else {
        echo "Dosya yüklenemedi.";
    }

    $sql = "UPDATE urunler SET urun_adi=?, resim=?, bedeni=?, urun_rengi=?, aciklama=?, marka=?, kumas=?, fiyati=?, indirim=?, kategori_id=? WHERE urun_id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssddiii", $urun_adi, $resim, $beden, $renk, $aciklama, $marka, $kumas, $fiyat, $indirim, $kat_id, $urun_id);


    // SQL sorgusunu çalıştırma
    if ($stmt->execute()) {
        // Güncelleme başarılı, sayfayı yeniden yükle
        header("Location: admin.php");
        exit();
    } else {
        // Güncelleme başarısız, hatayı göster
        echo "Hata: " . $stmt->error;
    }
    $stmt->close();
}

echo "
<div id='overlay' style='display:none; position:fixed; top:0; left:0; 
width:100%; height:100%; background-color:rgba(0,0,0,0.5); z-index:50;'></div>";
            
              

  echo "<div id='updateModal' style='display:none; position:fixed; top:50%; left:50%; transform:translate(-50%, -50%); width:45%; background-color:white; z-index:100; padding:20px; box-shadow: 0 2px 5px rgba(0,0,0,0.2);'>
      <table>
          <tr>
              <td><label for='urun_adi'>Ürün Adı:</label></td>
              <td><input type='text' id='urun_adi' name='urun_adi'></td>
          </tr>
          <tr>
              <td><label for='resim'>Ürün Resmi:</label></td>
              <td><input type='file' id='resim' name='resim'></td>
          </tr>
          <tr>
              <td><label for='beden'>Beden:</label></td>
              <td><input type='text' id='beden' name='beden'></td>
          </tr>
          <tr>
              <td><label for='renk'>Renk:</label></td>
              <td><input type='text' id='renk' name='renk'></td>
          </tr>
          <tr>
              <td><label for='aciklama'>Açıklama:</label></td>
              <td><textarea id='aciklama' name='aciklama'></textarea></td>
          </tr>
          <tr>
              <td><label for='marka'>Marka:</label></td>
              <td><input type='text' id='marka' name='marka'></td>
          </tr>
          <tr>
              <td><label for='kumas'>Kumaş:</label></td>
              <td><input type='text' id='kumas' name='kumas'></td>
          </tr>
          <tr>
              <td><label for='fiyat'>Fiyat:</label></td>
              <td><input type='number' id='fiyat' name='fiyat' step='0.01'></td>
          </tr>
          <tr>
              <td><label for='indirim'>İndirim:</label></td>
              <td><input type='number' id='indirim' name='indirim' step='0.01'></td>
          </tr>
          <tr>
              <td><label for='kat_id'>Kategori ID:</label></td>
              <td><input type='number' id='kat_id' name='kat_id'></td>
          </tr>
      </table>
            <form id='updateForm' method='post'>
            <button type='button' onclick='updateProduct()'>Kaydet</button>
</form>

  </form>
</div>";

                        // Veritabanı bağlantısını kapatma
                        $conn->close();
                        ?>
                    </main>
                </div>
 <script src="js/admin.js"></script>
</body>
</html>