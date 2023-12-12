<?php
include_once 'config.php';
include_once 'validate.php';

function uniqueMail($email, $conn){
    $query = $conn->prepare("SELECT COUNT(*) FROM `TB_USERS` WHERE `USER_EMAIL` = :mail");
    $query->bindValue(':mail', $email, PDO::PARAM_STR);
    $query->execute();
    $count = $query->fetchColumn();
    return $count > 0;
}

$userData = [
    'firstName' => cleaningInput($_POST['userName']),
    'lastName' => cleaningInput($_POST['userLastName']),
    'birth' => cleaningInput($_POST['userBirth']),
    'pass' => cleaningInput($_POST['userPasswordConfirm']),
    'phone' => cleaningInput($_POST['userPhoneConfirm']),
    'email' => cleaningInput($_POST['userEmailConfirm'])
];

$options = [
    'cost' => 9, // Custo do algoritmo (quanto maior, mais seguro, mas mais lento)
];
$phoneRegex = "/^\([1-9]{2}\) (?:[2-8]|9[0-9])[0-9]{3}\-[0-9]{4}$/";
$emailRegex = "/^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[\w-]{2,4}$/";

$birth = date('Y-m-d', strtotime($userData['birth']));
$pass = password_hash($userData['pass'],PASSWORD_BCRYPT,$options);



$defaultRank = 3;

if(!validateLength($userData['firstName'],3,30)){
    
    //echo 'ERRO 101 - NOME FORA DOS LIMITES';
    if(!validateLength($userData['lastName'],1,40)){
        //echo 'ERRO 1O1 - ULTIMO NOME FORA DOS LIMITES';
    }
    if(!validateRegex($birth,$dateRegex)){ 
        //echo 'ERRO 102 - DATA EM FORMATO INVÁLIDO';
    }
    if(!validateRegex($userData['phone'],$phoneRegex)){ 
        //echo 'ERRO 102- TELEFONE EM FORMATO INVÁLIDO';
    }
    if(!validateRegex($userData['email'],$emailRegex) || !validateType($userData['email'], 'email')){
        //echo 'ERRO 102 - EMAIL EM FORMATO INVÁLIDO';
    }
    if(uniqueMail($userData['email'], $conn)){
        //echo "O email já foi cadastrado";
    }
    
}
else{
    $stmt = $conn->prepare("INSERT INTO TB_USERS(USER_FIRSTNAME, USER_LASTNAME, USER_BIRTH, USER_PHONE, USER_EMAIL, USER_PASSWORD, USER_RANK) VALUES (:firstName, :lastName, :birth, :phone, :email, :pass, :urank)");

    $stmt->bindValue(':firstName', $userData['firstName'], PDO::PARAM_STR);
    $stmt->bindValue(':lastName', $userData['lastName'], PDO::PARAM_STR);
    $stmt->bindValue(':birth', $birth, PDO::PARAM_STR);
    $stmt->bindValue(':phone', $userData['phone'], PDO::PARAM_STR);
    $stmt->bindValue(':email', $userData['email'], PDO::PARAM_STR);
    $stmt->bindValue(':urank', $defaultRank, PDO::PARAM_STR);
    $stmt->bindValue(':pass', $pass, PDO::PARAM_STR);
    
    $stmt->execute();
    header('Location: login-form.php');
    exit();
}