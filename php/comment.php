<?php
require 'config.php';

if(isset($_POST['submit'])){
    $star = $_POST['rate'];
    $comment = $_POST['comment'];
    $date = date('Y-m-d H:i:s');
    // $username=$_POST['user_id'];
    // echo $username ;

    $sql = "INSERT INTO yorum (urun_id,user_id,puan,yorum)VALUES (1,1,'{$star}', '{$comment}' )";

    if(mysqli_query($conn,$sql)){
        header("Location: ../product.php");
    }
    else{
        echo mysqli_error($conn);
    }
    

}