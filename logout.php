<?php
session_start();
echo "logout";
//unset($_SESSION['valid']);
session_destroy();
header('location: homepage.html');
?>