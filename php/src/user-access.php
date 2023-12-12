<?php
session_start();
include 'config.php';

if( !isset($_SESSION['status']) && empty($_SESSION['status']) ){
    header('Location: login-form.php');
    exit();
}

$logado = $_SESSION['userMail'];

$query_cli = "SELECT USER_FIRSTNAME, USER_LASTNAME FROM TB_USERS WHERE USER_EMAIL = :logado";
$stmt = $conn->prepare($query_cli);
$stmt->bindParam(':logado', $logado, PDO::PARAM_STR);
$stmt->execute();
$resp = $stmt->fetch(PDO::FETCH_ASSOC);
$name_cli = $resp['USER_FIRSTNAME'] . " " . $resp['USER_LASTNAME'];

$query = "SELECT S.SCHEDULE_ID, S.SCHEDULE_SERVICES, S.SCHEDULE_CLIENT, S.SCHEDULE_ATTENDANT, S.SCHEDULE_DATE, S.SCHEDULE_VALUE, S.SCHEDULE_TIME,
SE.SERVICE_NAME, U.USER_FIRSTNAME, U.USER_LASTNAME
FROM TB_SCHEDULES S
JOIN TB_SERVICES SE ON S.SCHEDULE_SERVICES = SE.SERVICE_ID
JOIN TB_USERS U ON S.SCHEDULE_ATTENDANT = U.USER_ID";


$stmt = $conn->prepare($query);
$stmt->execute();
$resp = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="./assets/js/login.js" defer></script>
    <script src="./assets/js/tailwind.config.js" defer></script>
    <link rel="stylesheet" href="./assets/css/style.css">

    <link rel="shortcut icon" href="./assets/images/icon/favicon.ico" type="image/x-icon">
    <title>Pente Fino | Admin</title>
</head>

<body>
<section class="bg-[url('./assets/images/back-access-adm.jpg')] h-screen bg-cover">
        <header>
            <!-- Menu Hamburguer visível apenas em telas pequenas -->
            <div class="h-100px md:hidden flex justify-evenly items-center z-50	">

                <div class=" mobile-menu flex flex-col items-center cursor-pointer h-100px justify-center">

                    <div class="line1 w-10 h-1 bg-black mb-1"></div>
                    <div class="line2 w-10 h-1 bg-black mb-1"></div>
                    <div class="line3 w-10 h-1 bg-black"></div>
                </div>

                <a href="#" class="mt-[10px]">
                    <img src="./assets/images/logo-principal.png" alt="Logo Pente-Fino" width="100" height="100">
                </a>

                
            </div>

            <!-- Menu de Navegação para telas médias e grandes -->
            <ul class="hidden w-full justify-evenly h-100px items-center p-5 font-['Sancreek'] text-2xl text-white
            md:flex lg:text-3xl nav-list">
                <li>
                    <a href="#agendamentos" class="hover:text-yellow-500 ease-in-out duration-[400ms]">
                        Agendamentos
                    </a>
                </li>
                <li>
                    <a href="#clientes" class="hover:text-yellow-500 ease-in-out duration-[400ms]">
                        Clientes
                    </a>
                </li>
                <li class="flex">
                    <a href="#Top" class="mt-[10px]">
                        <img src="./assets/images/logo-principal.png" alt="Logo Pente-Fino" width="100" height="100">
                    </a>
                </li>
                <li>
                    <a href="#funcionarios" class="hover:text-yellow-500 ease-in-out duration-[400ms]">
                        Funcionários
                    </a>
                </li>
                <li>
                    <a href="./logout.php" class="text-red-500 hover:text-white ease-in-out duration-[400ms]">
                        Sair
                    </a>
                </li>
                
            </ul>

            <!-- Menu Responsivo para telas pequenas -->
            <ul id="mobileNav" class="md:hidden flex flex-col items-center bg-transparent backdrop-blur text-white w-full absolute top-h-100px  
            transition ease-in-out delay-150 transform scale-y-0 font-['Sancreek'] text-3xl h-h-calc justify-around">

                <li>
                    <a href="#agendamentos" class="hover:text-yellow-500 ease-in-out duration-[400ms]">
                        Agendamentos
                    </a>
                </li>
                <li>
                    <a href="#clientes" class="py-2 hover:text-yellow-500 ease-in-out duration-[400ms]">
                        Clientes
                    </a>
                </li>
                <li>
                    <a href="#funcionarios" class="py-2 hover:text-yellow-500 ease-in-out duration-[400ms]">
                        Funcionários
                    </a>
                </li>
                <li>
                    <a href="./logout.php" class="py-2 hover:text-red-500 ease-in-out duration-[400ms]">
                        Sair
                    </a>
                </li>
            </ul>
        </header>

        <div class="flex flex-col h-h-calc justify-center font-['Sancreek'] ml-percent-10 w-1/2">

            <h1 class="md:text-7xl text-5xl text-white">
                Seja Bem vindo </h1> <h1 class="md:text-7xl text-5xl text-yellow-500"><?php 
                echo "$name_cli";
                 ?> </h1>
            
        </div>
    </section>

    <section class="p-10 w-full mt-20" id="agendamentos">
        <div class="w-full">
            <h2 class="md:text-7xl text-5xl text-yellow-500 font-['Sancreek']">Agendamentos</h2>
            <?php
     if ($resp) {
        echo "<table class='w-full mt-10'>";
        echo "<thead>";
        echo "<tr class='font-['Smythe'] text-3xl'>";
        echo "<th>ID</th>";
        echo "<th>Nome do serviço</th>";
        echo "<th>Atendente</th>";
        echo "<th>Data</th>";
        echo "<th>Valor</th>";
        echo "<th>Hora</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";

        foreach ($resp as $row) {
            echo "<tr>";
            echo "<td class='text-center'>{$row['SCHEDULE_ID']}</td>";
            echo "<td class='text-center'>{$row['SERVICE_NAME']}</td>";
            echo "<td class='text-center'>{$row['USER_FIRSTNAME']}". " {$row['USER_LASTNAME']}"."</td>";
            $scheduleDate = new DateTime($row['SCHEDULE_DATE']);
            $formattedDate = $scheduleDate->format('d/m/Y');
            echo "<td class='text-center'>$formattedDate</td>";
            echo "<td class='text-center'>R$ {$row['SCHEDULE_VALUE']}</td>";
            echo "<td class='text-center'>{$row['SCHEDULE_TIME']}</td>";
            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";
    } else {
        echo "Você ainda não possui agendamentos  .";
    }
            ?>
        </div>
    </section>

    
</body>
</html>