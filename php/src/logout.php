<?php 
session_start();
unset($_SESSION['userMail']);
unset($_SESSION['userPasswd']); //vai destruir as variáveis
unset($_SESSION['userLevel']);
header('Location: index.html');
?>