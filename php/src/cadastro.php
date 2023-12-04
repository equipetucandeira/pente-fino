<?php
include 'config.php';

function cleaningInput($dataInput)
{
    $dataInput = trim($dataInput);  //Aqui estamos removendo possíveis espaços em branco presentes tanto no final quanto no começo
    $dataInput = htmlspecialchars($dataInput); //caracteres especiais são transformados em html entities (" (double quote) 	turns into &quot)
    $dataInput = stripslashes($dataInput); //Anteriormente eu estava passando o stripcslashes, mas vi que a função atual remove a barra invertida, enquanto a função que mencionei remove caracteres especiais como "\n"
    return $dataInput;
}

function validateLength($dataInput, $min, $max)
{
    $dataInput = strlen($dataInput);
    if ($dataInput >= $min && $dataInput <= $max) {
        return true; //Validando tamanho da string no backend
    }
}

function validateType($dataInput, $typeInput)
{ //Validação de tipo paar que o usuário não cometa o erro de digitar algo que não seja um e-mail, por exemplo
    switch ($typeInput) {
        case 'email':
            return filter_var($dataInput, FILTER_VALIDATE_EMAIL) !== false;
            break;
        case 'date':
            return filter_var($dataInput, FILTER_VALIDATE_EMAIL) !== false;
            break;
        default:
            return true; //Qualquer tipo valido, mas nao especificado
    }
}

function uniqueInput($input, $otherInputs)
{ //Acredito que essa função pode ser muito útil também na hora de fazer o cadastro
    return !in_array($input, $otherInputs);
}

function validateRegex($dataInput, $pattern)
{
    return preg_match($pattern, $dataInput) === 1;
}

$options = [
    'cost' => 12, // Custo do algoritmo (quanto maior, mais seguro, mas mais lento)
];

$firstName = validateLenght(cleaningInput($_POST['userName']),3,30);
$lastName =validateLenght(cleaningInput($_POST['userLastName']),1,40);
$birth = $_POST['userBirth'];
$pass = password_hash($_POST['userPasswordConfirm'],PASSWORD_BCRYPT,$options);
$phone = validateLenght($_POST['userPhoneConfirm'],14,15);
$email = validateType($_POST['userEmailConfirm'], 'email');

$stmt = $conn->prepare("INSERT INTO TB_USERS(USER_FIRSTNAME, USER_LASTNAME, USER_BIRTH, USER_PHONE, USER_EMAIL, USER_PASSWORD) VALUES (:firstName, :lastName, :birth, :phone, :email, :pass");

$stmt->bindParam(':firstName', $firstName);
$stmt->bindParam(':lastName', $lastName);
$stmt->bindParam(':birth', $birth);
$stmt->bindParam(':phone', $phone);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':pass', $pass);

$stmt->execute();


?>