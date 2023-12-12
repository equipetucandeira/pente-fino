<?php

require_once "config.php";


$codigo = $_GET['id'];

$query_agenda = $conn->prepare("DELETE FROM TB_SCHEDULES WHERE SCHEDULE_ID = :ID");
$query_agenda->bindValue(':ID', $codigo, PDO::PARAM_INT);
$query_agenda->execute();


header("Location: " . $_SERVER['HTTP_REFERER']);

?>