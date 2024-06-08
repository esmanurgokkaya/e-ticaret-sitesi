<?php 
require 'php/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

<?php
$urun_id = '';
$urun_adi = '';
$beden = '';
$renk = '';
$aciklama = '';
$marka = '';
$kumas = '';
$fiyat = '';
$indirim = '';
$kat_id = '';
$resim = '';

if (isset($_GET['urun_id'])) {
    $urun_id = $_GET['urun_id'];

    $sql = "SELECT * FROM urunler WHERE urun_id = '$urun_id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $urun_adi = $row['urun_adi'];
        $beden = $row['bedeni'];
        $renk = $row['urun_rengi'];
        $aciklama = $row['aciklama'];
        $marka = $row['marka'];
        $kumas = $row['kumas'];
        $fiyat = $row['fiyati'];
        $indirim = $row['indirim'];
        $kat_id = $row['kategori_id'];
        $resim = $row['resim'];
    } else {
        echo "Ürün bulunamadı.";
    }
}
?>

<div id='updateModal' style='position:relative; top:50%; left:50%; transform:translate(-50%, -50%); width:80%; background-color:white; z-index: 100; padding:20px;'>
    <form method="post" action="update_product.php?urun_id=<?php echo htmlspecialchars($urun_id); ?>" enctype="multipart/form-data">
        <table class="form-table">
            <tr>
                <th>Ürün Adı</th>
                <td><input type="text" id="urun_adi" name="urun_adi" class="form-control" value="<?php echo htmlspecialchars($urun_adi); ?>" required></td>
            </tr>
            <tr>
                <th>Ürün Görseli</th>
                <td><input type="file" name="resim" class="form-control"></td>
            </tr>
            <tr>
                <th>Bedeni</th>
                <td><input type="text" id="beden" name="beden" class="form-control" value="<?php echo htmlspecialchars($beden); ?>" required></td>
            </tr>
            <tr>
                <th>Rengi</th>
                <td><input type="text" id="renk" name="renk" class="form-control" value="<?php echo htmlspecialchars($renk); ?>" required></td>
            </tr>
            <tr>
                <th>Açıklama</th>
                <td><input type="text" id="aciklama" name="aciklama" class="form-control" value="<?php echo htmlspecialchars($aciklama); ?>" required></td>
            </tr>
            <tr>
                <th>Marka</th>
                <td><input type="text" id="marka" name="marka" class="form-control" value="<?php echo htmlspecialchars($marka); ?>" required></td>
            </tr>
            <tr>
                <th>Kumaş</th>
                <td><input type="text" id="kumas" name="kumas" class="form-control" value="<?php echo htmlspecialchars($kumas); ?>" required></td>
            </tr>
            <tr>
                <th>Fiyatı</th>
                <td><input type="number" id="fiyat" name="fiyat" class="form-control" value="<?php echo htmlspecialchars($fiyat); ?>" required></td>
            </tr>
            <tr>
                <th>İndirim</th>
                <td><input type="number" id="indirim" name="indirim" class="form-control" value="<?php echo htmlspecialchars($indirim); ?>" required></td>
            </tr>
            <tr>
                <th>Kategori</th>
                <td>
                    <select name="kat_adi" id="kat_adi" class="form-control" required>
                        <option value="ustgiyim" <?php echo ($kat_id == 1) ? 'selected' : ''; ?>>Üst Giyim</option>
                        <option value="altgiyim" <?php echo ($kat_id == 2) ? 'selected' : ''; ?>>Alt Giyim</option>
                        <option value="disgiyim" <?php echo ($kat_id == 3) ? 'selected' : ''; ?>>Dış Giyim</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" name="update">Kaydet</button></td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>

<?php
if (isset($_POST['update'])) {
    $urun_adi = $_POST['urun_adi'];
    $beden = $_POST['beden'];
    $renk = $_POST['renk'];
    $aciklama = $_POST['aciklama'];
    $marka = $_POST['marka'];
    $kumas = $_POST['kumas'];
    $fiyat = $_POST['fiyat'];
    $indirim = $_POST['indirim'];
    $kat_adi = $_POST['kat_adi'];
    $kat_id = ($kat_adi == 'ustgiyim') ? 1 : (($kat_adi == 'altgiyim') ? 2 : 3);

    if (!empty($_FILES['resim']['name'])) {
        $resim = $_FILES['resim']['name'];
        $temp_name = $_FILES['resim']['tmp_name'];
        $folder = "images/" . basename($resim);
        move_uploaded_file($temp_name, $folder);
    }

    $sql = "UPDATE urunler SET urun_adi = ?, resim = ?, bedeni = ?, urun_rengi = ?, aciklama = ?, marka = ?, kumas = ?, fiyati = ?, indirim = ?, kategori_id = ? WHERE urun_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssdiii", $urun_adi, $resim, $beden, $renk, $aciklama, $marka, $kumas, $fiyat, $indirim, $kat_id, $urun_id);

    if ($stmt->execute()) {
        echo "<script>
                document.getElementById('updateModal').style.display = 'none';
                const successMessage = document.createElement('div');
                successMessage.innerText = 'Ürün başarıyla güncellendi.';
                successMessage.style.position = 'fixed';
                successMessage.style.top = '50%';
                successMessage.style.left = '50%';
                successMessage.style.transform = 'translate(-50%, -50%)';
                successMessage.style.padding = '20px';
                successMessage.style.color = 'green';
                successMessage.style.textAlign = 'center';
                document.body.appendChild(successMessage);
                
                setTimeout(() => {
                    successMessage.remove();
                    window.location.href = 'admin.php';
                }, 1000);
              </script>";
    } else {
        echo "Güncelleme hatası: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
