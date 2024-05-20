<?php
session_start();
$user_id = $_SESSION['user_id'];
require 'config.php';

if(isset($_POST['submit'])){
    $star =mysqli_real_escape_string($conn, $_POST['rate']);
    $comment = mysqli_real_escape_string($conn,$_POST['comment']);
    // $user_id=mysqli_real_escape_string($conn, $_POST['user_id']);         
    // echo $username ;
 $date = date('Y-m-d H:i:s');
    $sql = "INSERT INTO yorum (urun_id,user_id,puan,yorum)VALUES (1,'$user_id', '$star', '$comment' )";

    if(mysqli_query($conn,$sql)){
        header("Location: ../product.php");
    }
    else{
        echo mysqli_error($conn);
    }
    

}