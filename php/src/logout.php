<?php 
session_start();
unset($_SESSION['userMail']);
unset($_SESSION['userPasswd']); //vai destruir as variáveis
unset($_SESSION['userLevel']);
unset($_SESSION['status']);
session_destroy();
header('Location: index.php');
?>