<?php

require_once "config.php";


$codigo = $_GET['id'];

$query = $conn->prepare("DELETE FROM tabclientes WHERE cliId = :USER_ID");

$query->bindValue('USER_ID', $codigo, PDO::PARAM_INT);

$query->execute();

header('Location: admin-access.php');


?>