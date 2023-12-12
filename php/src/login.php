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
        exit();
    }

    $query = "SELECT USER_ID, USER_EMAIL, USER_PASSWORD, USER_RANK, USER_FIRSTNAME FROM TB_USERS WHERE USER_EMAIL = :mail";

    $stmt = $conn->prepare($query);

    $stmt->bindParam(":mail", $userMail, PDO::PARAM_STR);

    $stmt->execute();

    $results = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($results && password_verify($passwd, $results['USER_PASSWORD']) && $userMail == $results['USER_EMAIL']) {
        $level = $results['USER_RANK'];
        $_SESSION['userMail'] = $results['USER_EMAIL'];
        $_SESSION['userName'] = $results['USER_FIRSTNAME'];
        $_SESSION['userPasswd'] = $results['USER_PASSWORD'];
        $_SESSION['userLevel'] = $results['USER_RANK'];
        $_SESSION['userId'] = $results['USER_ID'];
        $_SESSION["status"] = 1;

        switch ($level) {
            case 1:
            case 2:
                header("Location: admin-access.php");
                break;
            case 3:
                header("Location: user-access.php");
                break;
            default:
                return true;
        }

        exit();  // Importante para garantir que o script seja encerrado após o redirecionamento
    } else {
        header("Location: login-form.php?errorMessage=Name or password is invalid");
        exit();
    }
}
?>