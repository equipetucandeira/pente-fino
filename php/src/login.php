<?php
session_start();
include_once "config.php";


function cleaningInput($dataInput)
{
    $dataInput = trim($dataInput);  //Aqui estamos removendo possíveis espaços em branco presentes tanto no final quanto no começo
    $dataInput = htmlspecialchars($dataInput); //caracteres especiais são transformados em html entities (" (double quote) 	turns into &quot)
    $dataInput = stripslashes($dataInput); //Anteriormente eu estava passando o stripcslashes, mas vi que a função atual remove a barra invertida, enquanto a função que mencionei remove caracteres especiais como "\n"
    return $dataInput;
}

function cleaningInputLogin($dataInput)
{
    $dataInput = trim($dataInput); //Aqui estamos removendo possíveis espaços em branco presentes tanto no final quanto no começo
    $dataInput = str_replace(' ', '', $dataInput); //No login eu adicionei isso para caso algum engraçado tente colocar espaços no meio de strings, a fim de rodar comandos  
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

if (isset($_POST['passwordUserLogin']) && isset($_POST['emailUserLogin'])) {
    $userMail = cleaningInput($_POST['emailUserLogin']);
    $passwd = cleaningInput($_POST['passwordUserLogin']);

    if (empty($userMail)) {
        header('Location: login-form.php?errorMessage=User Name is required');
        exit();
    } elseif (empty($passwd)) {
        header('Location: login-form.php?errorMessage=Password is required');
        exit();
    } elseif (!validateType($userMail, 'email')) {
        header('Location: login-form.php?errorMessage=Email format is invalid');
    }

    $query = "SELECT USER_EMAIL, USER_PASSWORD, USER_RANK FROM TB_USERS WHERE USER_PASSWORD = :passwd AND USER_EMAIL = :mail";

    $stmt = $conn->prepare($query);

    $stmt->bindValue(":mail", $userMail, PDO::PARAM_STR);
    $stmt->bindValue(":passwd", $passwd, PDO::PARAM_STR);

    $stmt->execute();

    $results = $stmt->fetch(PDO::FETCH_ASSOC);

    if (isset($_POST['btn_login'])) {
        if ($results && $passwd == $results['USER_PASSWORD'] && $userMail == $results['USER_EMAIL']) { //A função fetch pega a proxima linha de um array associativo e anteriormente eu não estava passando o $results nessa condicional, mas depois de pesquisar, percebi que ao realizar o fetch, o ponteiro já acaba apontando para proxima linha antes de validar as credenciais, então o $results tem que me retornar true para que esse erro deixe de ocorrer
            $level = $results['USER_RANK'];
            $_SESSION['userMail'] = $results['USER_EMAIL'];
            $_SESSION['userPasswd'] = $results['USER_PASSWORD'];
            $_SESSION['userLevel'] = $results['USER_RANK'];
            switch ($level) {
                case 1:
                    header("Location:admin-access.php");
                    exit();
                    break;
                case 2:
                    header("Location: admin-access.php");
                    exit();
                    break;
                case 3:
                    header("Location: user-access.php");
                    exit();
                    break;
                default:
                    return true;
            }
        } else {
            header("Location: login-form.php?errorMessage=Name or password is invalid");
            exit();
        }

        
    }
}
?>