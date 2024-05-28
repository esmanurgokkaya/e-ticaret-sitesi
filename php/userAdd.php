<?php 
include 'config.php';
session_start();

if(isset($_POST['registerButton'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $sql = "SELECT email FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // E-posta adresi veritabanında var mı yok mu kontrol et
    if ($result->num_rows > 0) {
        $error = "Eposta zaten kullanilmis. Giris yapmayi dene!";
        header("Location: ../register.php?error=" . urlencode($error));
    } else {
        if(isset($_POST['check'])){
            // Şifreyi hashle
            $hashedPass = password_hash($pass, PASSWORD_DEFAULT);
            
            // SQL sorgusunu hazırla
            $sql = "INSERT INTO users(username, email, password) VALUES (?, ?, ?)";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "sss", $name, $email, $hashedPass);
            mysqli_stmt_execute($stmt);

            
            header('Location: ../login.php');
            exit();
        } else {
            $error = 'Sozlesmeler kabul edilmeli!';
            header("Location: ../register.php?error=" . urlencode($error));
        }
    }
}
?>
