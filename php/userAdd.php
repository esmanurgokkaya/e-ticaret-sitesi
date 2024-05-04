<?php 
session_start();

include 'config.php';

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
        echo "Eposta zaten kullanilmis. Giris yapmayi dene!";
    } else {
        if(isset($_POST['check'])){
            $sql = "INSERT INTO users( username, email, password) VALUES (?, ?, ?)";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "sss", $name, $email, $pass);
            mysqli_stmt_execute($stmt);
            header('Location: ../login.php');
            exit();
        }else{
            echo 'Sozlesmeler kabul edilmeli!';
        }
    }
    
    
}

?>
