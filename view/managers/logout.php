<?php 
session_start();
session_destroy();
header("location:../../index.php?".md5("pesan=logout"));
?>