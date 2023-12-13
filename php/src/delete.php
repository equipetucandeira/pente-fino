<?php

require_once "config.php";


$codigo = $_GET['id'];

$query = $conn->prepare("DELETE FROM tabclientes WHERE cliId = :USER_ID");
$query_agenda = $conn->prepare("DELETE FROM TB_SCHEDULES WHERE SCHEDULE_CLIENT = :USER_ID");
$query_agenda->bindValue('USER_ID', $codigo, PDO::PARAM_INT);
$query_agenda->execute();

$query = $conn->prepare("DELETE FROM TB_USERS WHERE USER_ID = :USER_ID");
$query->bindValue('USER_ID', $codigo, PDO::PARAM_INT);

$query->execute();

header("Location: admin-access.php");


?>