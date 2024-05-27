<?php 
include "config.php";
@SESSION_destroy();
header ("Location: ../index.php");
exit;
?>