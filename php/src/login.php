<?php
session_start();
include_once "config.php";
include_once "validate.php";


if (isset($_POST['passwordUserLogin']) && isset($_POST['emailUserLogin'])) {
    $userMail = cleaningInputLogin($_POST['emailUserLogin']);
    $passwd = cleaningInputLogin($_POST['passwordUserLogin']);


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
        if ($results && password_verify($passwd, $results['USER_PASSWORD']) && $userMail == $results['USER_EMAIL']) { //A função fetch pega a proxima linha de um array associativo e anteriormente eu não estava passando o $results nessa condicional, mas depois de pesquisar, percebi que ao realizar o fetch, o ponteiro já acaba apontando para proxima linha antes de validar as credenciais, então o $results tem que me retornar true para que esse erro deixe de ocorrer
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
