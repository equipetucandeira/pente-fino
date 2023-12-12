<?php
session_start();
include "config.php";

$Id = $_POST['txtid'];
$Nome = $_POST['txtnome'];
$Sobrenome = $_POST['txtsobrenome'];
$Datanasc = $_POST['txtdatanasc'];
$Email = $_POST['txtemail'];
$Senha = $_POST['txtsenha'];
$Rank = $_POST['txtrank'];
$Telefone = $_POST['txtfone'];
$options = [
    'cost' => 9, // Custo do algoritmo (quanto maior, mais seguro, mas mais lento)
];
$pass = password_hash($Senha,PASSWORD_BCRYPT,$options);


$query = $conn->prepare("UPDATE TB_USERS 
                         SET USER_FIRSTNAME = :Nome, 
                             USER_LASTNAME = :Sobrenome, 
                             USER_BIRTH = :Datanasc,
                             USER_EMAIL = :Email, 
                             USER_PASSWORD = :Senha, 
                             USER_RANK = :Rank, 
                             USER_PHONE = :Telefone
                         WHERE USER_ID = :Id");

$query->bindValue(':Id', $Id, PDO::PARAM_INT);
$query->bindValue(':Nome', $Nome, PDO::PARAM_STR);
$query->bindValue(':Sobrenome', $Sobrenome, PDO::PARAM_STR);
$query->bindValue(':Datanasc', $Datanasc, PDO::PARAM_STR);
$query->bindValue(':Email', $Email, PDO::PARAM_STR);
$query->bindValue(':Senha', $pass, PDO::PARAM_STR);
$query->bindValue(':Rank', $Rank, PDO::PARAM_STR);
$query->bindValue(':Telefone', $Telefone, PDO::PARAM_STR);

if ($query->execute()) {
    header('Location: admin-access.php'); //arrumar aqui
} else {
    echo "Erro ao executar a consulta.";
}

?>