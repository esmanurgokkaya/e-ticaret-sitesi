<?php
include 'config.php';

session_destroy();
setcookie('cart', json_encode($cart), time() - (86400 * 30), "/");
header("Location: ../index.php");
exit();
?>