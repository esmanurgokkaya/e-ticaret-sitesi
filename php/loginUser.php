<?php
include 'config.php';
if (isset($_POST['loginButton'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $sql = "SELECT user_id, username, password FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // E-posta adresi veritabanında var mı yok mu kontrol et
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($pass, $row['password'])) {
            // Giriş başarılı, kullanıcıyı yönlendir
            
            $_SESSION['username'] = $row['username'];
            $_SESSION['user_id'] = $row['user_id'];
            if ($row['username'] == 'admin') {
                header('Location: ../admin.php');
            } else {
                header("Location: ../index.php");
            }
            
            exit();
        } else {
            $error = "Hatalı şifre.";
            header("Location: ../login.php?error=" . urlencode($error));
        }
    } else {
        $error = "E-posta kayıtlı değil. Üye olmayı deneyin!";
        header("Location: ../login.php?error=" . urlencode($error));
    }
}
