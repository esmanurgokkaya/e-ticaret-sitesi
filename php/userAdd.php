<?php 
session_start();

include 'config.php';

if(isset($_POST['registerButton'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    
}

?>
