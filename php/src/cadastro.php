<?php

include 'config.php';

$firstName = $_POST['userName'];
$lastName =$_POST['userLastName'];
$birth =$_POST['userBirth'];
$pass =$_POST['userPasswordConfirm'];
$phone =$_POST['userPhoneConfirm'];
$email =$_POST['userEmailConfirm'];

$stmt = $conn->prepare("INSERT INTO TB_USERS(USER_FIRSTNAME, USER_LASTNAME, USER_BIRTH, USER_PHONE, USER_EMAIL, USER_PASSWORD) VALUES (:firstName, :lastName, :birth, :phone, :email, :pass");

$stmt->bindParam(':firstName', $firstName);
$stmt->bindParam(':lastName', $lastName);
$stmt->bindParam(':birth', $birth);
$stmt->bindParam(':phone', $phone);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':pass', $pass);

$stmt->execute();


?>