<?php
session_start();
session_unset();
session_destroy();

header("location:/E-Commerce/views/home.php");
exit;
?>