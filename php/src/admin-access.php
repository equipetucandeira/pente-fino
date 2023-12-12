<?php
session_start();
include 'config.php';

if(!isset($_SESSION['userMail']) || !isset($_SESSION['userPasswd'])){
    header('Location: login-form.php');
    exit();
}
$logado = $_SESSION['userMail'];

$query_adm = "SELECT USER_FIRSTNAME, USER_LASTNAME FROM TB_USERS WHERE USER_EMAIL = :logado";
$stmt = $conn->prepare($query_adm);
$stmt->bindParam(':logado', $logado, PDO::PARAM_STR);
$stmt->execute();
$resp = $stmt->fetch(PDO::FETCH_ASSOC);
$name_adm = $resp['USER_FIRSTNAME'] . " " . $resp['USER_LASTNAME'];


$query_cal = "SELECT
s.SCHEDULE_ID,
c.USER_FIRSTNAME AS client_firstname,
c.USER_LASTNAME AS client_lastname,
a.USER_FIRSTNAME AS attendant_firstname,
a.USER_LASTNAME AS attendant_lastname,
sv.SERVICE_NAME,
s.SCHEDULE_DATE,
s.SCHEDULE_VALUE,
s.SCHEDULE_TIME
FROM TB_SCHEDULES s
JOIN TB_USERS c ON s.SCHEDULE_CLIENT = c.USER_ID
JOIN TB_USERS a ON s.SCHEDULE_ATTENDANT = a.USER_ID
JOIN TB_SERVICES sv ON s.SCHEDULE_SERVICES = sv.SERVICE_ID";

$stmt_cal = $conn->prepare($query_cal);
$stmt_cal->execute();
$result_cal = $stmt_cal->fetchAll(PDO::FETCH_ASSOC);


$query_cli = "SELECT * FROM TB_USERS WHERE USER_RANK = 3";
$stmt_cli = $conn->prepare($query_cli);
$stmt_cli->execute();

$query_fun = "SELECT * FROM TB_USERS WHERE USER_RANK = 2";
$stmt_fun = $conn->prepare($query_fun);
$stmt_fun->execute();


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
<<<<<<< HEAD

<section class="bg-[url('./assets/images/back-access-adm.jpg')] h-screen bg-cover">


=======
<section class="bg-[url('./assets/images/back-access-adm.jpg')] h-screen bg-cover">
>>>>>>> 5a56f9b6b3a959582fb73bca4410df6f15ee1a7c
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
                echo "$name_adm";
                 ?> </h1>
                Seja Bem vindo </h1>
            <h1 class="md:text-7xl text-5xl text-yellow-500"><?php
                                                                echo "$name_adm";
                                                                ?> </h1>


        </div>
    </section>

    <section class="p-10 w-full mt-20" id="agendamentos">
        <div class="w-full">
            <h2 class="md:text-7xl text-5xl text-yellow-500 font-['Sancreek']">Agendamentos</h2>
            <?php

     if (count($result_cal) > 0) {
        echo "<table class='w-full mt-10'>";
        echo "<thead>";
        echo "<tr class='font-['Smythe'] text-3xl'>";
    if (count($result_cal) > 0) {
        echo "<table class='w-full mt-10'>";
        echo "<thead>";
        echo "<tr class='font-[\"Smythe\"] text-3xl'>";
        echo "<th>ID</th>";
        echo "<th>Cliente</th>";
        echo "<th>Atendente</th>";
        echo "<th>Serviço</th>";
        echo "<th>Data</th>";
        echo "<th>Valor</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";

        foreach ($result_cal as $row) {
            echo "<tr>";
            echo "<td class='text-center'>{$row['SCHEDULE_ID']}</td>";
            echo "<td class='text-center'>{$row['client_firstname']} {$row['client_lastname']}</td>";
            echo "<td class='text-center'>{$row['attendant_firstname']} {$row['attendant_lastname']}</td>";
            echo "<td class='text-center'>{$row['SERVICE_NAME']}</td>";
            echo "<td class='text-center'>{$row['SCHEDULE_DATE']}</td>";
            echo "<td class='text-center'>{$row['SCHEDULE_VALUE']}</td>";
            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";
    } else {
        echo "Nenhum agendamento encontrado.";
    }

            if (count($result_cal) > 0) {
                echo "<div class='overflow-x-auto'>";
                echo "<table class='w-full mt-10 table-auto'>";
                echo "<thead>";
                echo "<tr class='font-['Smythe'] text-3xl'>";
                echo "<th class='px-4 py-2'>ID</th>";
                echo "<th class='px-4 py-2'>Cliente</th>";
                echo "<th class='px-4 py-2'>Atendente</th>";
                echo "<th class='px-4 py-2'>Serviço</th>";
                echo "<th class='px-4 py-2'>Data</th>";
                echo "<th class='px-4 py-2'>Valor</th>";
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
        echo "<th>Horário</th>";
        echo "<th>Valor</th>";
        echo "<th>Excluir</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";


        foreach ($result_cal as $row) {
            echo "<tr class='mt-8 leading-10'>";
            echo "<td class='text-center'>{$row['SCHEDULE_ID']}</td>";
            echo "<td class='text-center'>{$row['client_firstname']} {$row['client_lastname']}</td>";
            echo "<td class='text-center'>{$row['attendant_firstname']} {$row['attendant_lastname']}</td>";
            echo "<td class='text-center'>{$row['SERVICE_NAME']}</td>";
            $scheduleDate = new DateTime($row['SCHEDULE_DATE']);
            $formattedDate = $scheduleDate->format('d/m/Y');
            echo "<td class='text-center'>$formattedDate</td>";            echo "<td class='text-center'>{$row['SCHEDULE_TIME']}</td>";
            echo "<td class='text-center'>{$row['SCHEDULE_VALUE']}</td>";
            echo "<td class='text-center'><a class='text-center flex justify-center items-center' href='delete-agenda.php?id={$row['SCHEDULE_ID']}'> <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-6 h-6 text-gray-800 hover:text-red-500 ease-in-out duration-[400ms]'>
                <path stroke-linecap='round' stroke-linejoin='round' d='M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5m6 4.125l2.25 2.25m0 0l2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z' />
              </svg>
              </a></td>
            </tr>";
            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";
    } else {
        echo "Nenhum agendamento encontrado.";
    }
            ?>
        </div>
    </section>

    <section class="p-10 w-full mt-20" id="clientes">
        <div class="w-full">
            <h2 class="md:text-7xl text-5xl text-blue-500 font-['Sancreek']">Lista de Clientes</h2>
            <table class="w-full mt-10">

            <tr class="font-['Smythe'] text-3xl">
                <th>ID</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Data Nasc.</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Config</th>
            </tr>
        <?php
            while ($resp_cli = $stmt_cli->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr class='mt-8 leading-10'><td class='text-center'>{$resp_cli['USER_ID']}</td>";
                echo "<td class='text-center'>{$resp_cli['USER_FIRSTNAME']}</td>";
                echo "<td class='text-center'>{$resp_cli['USER_LASTNAME']}</td>";
                echo "<td class='text-center'>{$resp_cli['USER_BIRTH']}</td>";
                echo "<td class='text-center'>{$resp_cli['USER_EMAIL']}</td>";
                echo "<td class='text-center'>{$resp_cli['USER_PHONE']}</td>";
                echo "<td class='text-center'><a class='text-center flex justify-center items-center' href='alterar-cliente.php?id={$resp_cli['USER_ID']}'> <svg class='w-6 h-6 text-gray-800 hover:text-blue-500 ease-in-out duration-[400ms]' aria-hidden='true' xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'>
>>>>>>> 5a56f9b6b3a959582fb73bca4410df6f15ee1a7c
                <path  stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M7.75 4H19M7.75 4a2.25 2.25 0 0 1-4.5 0m4.5 0a2.25 2.25 0 0 0-4.5 0M1 4h2.25m13.5 6H19m-2.25 0a2.25 2.25 0 0 1-4.5 0m4.5 0a2.25 2.25 0 0 0-4.5 0M1 10h11.25m-4.5 6H19M7.75 16a2.25 2.25 0 0 1-4.5 0m4.5 0a2.25 2.25 0 0 0-4.5 0M1 16h2.25'/>
            </svg></a></td>
            </tr>";
            }      
      ?>
            </table>

            <div class="overflow-x-auto">
                <table class="w-full mt-10 table-auto">
                    <thead>
                        <tr class="font-['Smythe'] text-3xl">
                            <th class="px-4 py-2 md:py-4">ID</th>
                            <th class="px-4 py-2 md:py-4">Nome</th>
                            <th class="px-4 py-2 md:py-4">Sobrenome</th>
                            <th class="px-4 py-2 md:py-4">Data Nasc.</th>
                            <th class="px-4 py-2 md:py-4">Email</th>
                            <th class="px-4 py-2 md:py-4">Telefone</th>
                            <th class="px-4 py-2 md:py-4">Config</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($resp_cli = $stmt_cli->fetch(PDO::FETCH_ASSOC)) {
                            echo "<tr class='mt-8 leading-10'>";
                            echo "<td class='px-4 py-2 text-center md:py-4'>{$resp_cli['USER_ID']}</td>";
                            echo "<td class='px-4 py-2 text-center md:py-4'>{$resp_cli['USER_FIRSTNAME']}</td>";
                            echo "<td class='px-4 py-2 text-center md:py-4'>{$resp_cli['USER_LASTNAME']}</td>";
                            echo "<td class='px-4 py-2 text-center md:py-4'>{$resp_cli['USER_BIRTH']}</td>";
                            echo "<td class='px-4 py-2 text-center md:py-4'>{$resp_cli['USER_EMAIL']}</td>";
                            echo "<td class='px-4 py-2 text-center md:py-4'>{$resp_cli['USER_PHONE']}</td>";
                            echo "<td class='px-4 py-2 text-center md:py-4'>";
                            echo "<a class='flex justify-center items-center' href='alterar-cliente.php?id={$resp_cli['USER_ID']}'>";
                            echo "<svg class='w-6 h-6 md:w-8 md:h-8 text-gray-800' aria-hidden='true' xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'>";
                            echo "<path stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M7.75 4H19M7.75 4a2.25 2.25 0 0 1-4.5 0m4.5 0a2.25 2.25 0 0 0-4.5 0M1 4h2.25m13.5 6H19m-2.25 0a2.25 2.25 0 0 1-4.5 0m4.5 0a2.25 2.25 0 0 0-4.5 0M1 10h11.25m-4.5 6H19M7.75 16a2.25 2.25 0 0 1-4.5 0m4.5 0a2.25 2.25 0 0 0-4.5 0M1 16h2.25'/>";
                            echo "</svg></a></td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section class="p-10 w-full mt-20" id="funcionarios">
        <div class="w-full">
            <h2 class="md:text-7xl text-5xl text-green-500 font-['Sancreek']">Lista de Funcionários</h2>
            <table class="w-full mt-10">

            <tr class="font-['Smythe'] text-3xl">
                <th>ID</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Data Nasc.</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Config</th>
            </tr>
        <?php
            while ($resp_fun = $stmt_fun->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr class='mt-8 leading-10'><td class='text-center'>{$resp_fun['USER_ID']}</td>";
                echo "<td class='text-center'>{$resp_fun['USER_FIRSTNAME']}</td>";
                echo "<td class='text-center'>{$resp_fun['USER_LASTNAME']}</td>";
                echo "<td class='text-center'>{$resp_fun['USER_BIRTH']}</td>";
                echo "<td class='text-center'>{$resp_fun['USER_EMAIL']}</td>";
                echo "<td class='text-center'>{$resp_fun['USER_PHONE']}</td>";

                echo "<td class='text-center'><a class='text-center flex justify-center items-center' href='alterar-cliente.php?id={$resp_fun['USER_ID']}'> <svg class='w-6 h-6 text-gray-800 hover:text-green-500 ease-in-out duration-[400ms]' aria-hidden='true' xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'>
                <path  stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M7.75 4H19M7.75 4a2.25 2.25 0 0 1-4.5 0m4.5 0a2.25 2.25 0 0 0-4.5 0M1 4h2.25m13.5 6H19m-2.25 0a2.25 2.25 0 0 1-4.5 0m4.5 0a2.25 2.25 0 0 0-4.5 0M1 10h11.25m-4.5 6H19M7.75 16a2.25 2.25 0 0 1-4.5 0m4.5 0a2.25 2.25 0 0 0-4.5 0M1 16h2.25'/>
            </svg></a></td>
            </tr>";
            }      
      ?>
            </table>
        </div>
    </section>
</body>

            <div class="overflow-x-auto">
                <table class="w-full mt-10 table-auto">
                    <thead>
                        <tr class="font-['Smythe'] text-3xl">
                            <th class="px-4 py-2 md:py-4">ID</th>
                            <th class="px-4 py-2 md:py-4">Nome</th>
                            <th class="px-4 py-2 md:py-4">Sobrenome</th>
                            <th class="px-4 py-2 md:py-4">Data Nasc.</th>
                            <th class="px-4 py-2 md:py-4">Email</th>
                            <th class="px-4 py-2 md:py-4">Telefone</th>
                            <th class="px-4 py-2 md:py-4">Config</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($resp_fun = $stmt_fun->fetch(PDO::FETCH_ASSOC)) {
                            echo "<tr class='mt-8 leading-10'>";
                            echo "<td class='px-4 py-2 text-center md:py-4'>{$resp_fun['USER_ID']}</td>";
                            echo "<td class='px-4 py-2 text-center md:py-4'>{$resp_fun['USER_FIRSTNAME']}</td>";
                            echo "<td class='px-4 py-2 text-center md:py-4'>{$resp_fun['USER_LASTNAME']}</td>";
                            echo "<td class='px-4 py-2 text-center md:py-4'>{$resp_fun['USER_BIRTH']}</td>";
                            echo "<td class='px-4 py-2 text-center md:py-4'>{$resp_fun['USER_EMAIL']}</td>";
                            echo "<td class='px-4 py-2 text-center md:py-4'>{$resp_fun['USER_PHONE']}</td>";
                            echo "<td class='px-4 py-2 text-center md:py-4'>";
                            echo "<a class='flex justify-center items-center' href='alterar-cliente.php?id={$resp_fun['USER_ID']}'>";
                            echo "<svg class='w-6 h-6 md:w-8 md:h-8 text-gray-800' aria-hidden='true' xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'>";
                            echo "<path stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M7.75 4H19M7.75 4a2.25 2.25 0 0 1-4.5 0m4.5 0a2.25 2.25 0 0 0-4.5 0M1 4h2.25m13.5 6H19m-2.25 0a2.25 2.25 0 0 1-4.5 0m4.5 0a2.25 2.25 0 0 0-4.5 0M1 10h11.25m-4.5 6H19M7.75 16a2.25 2.25 0 0 1-4.5 0m4.5 0a2.25 2.25 0 0 0-4.5 0M1 16h2.25'/>";
                            echo "</svg></a></td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <footer class="w-full h-[620px] mt-[100px] bottom-0 flex flex-col ">

<section class="w-full h-[435px] max-h-fit bg-[#232323]
flex flex-col md:flex-row items-center justify-evenly">

    <section class="w-[100%] md:w-[45%] h-4/5 
    flex flex-col
    items-center justify-center md:justify-normal">

        <h3 class="text-white font-extrabold font-['Inter']
        text-[20px] md:text-[30px] lg:text-[38px]">

            ENTRE EM CONTATO
        </h3>
        <br>
        <p class="text-white font-normal font-['Inter']
        text-[20px] md:text-[30px] lg:text-[36px]">

            Av. Salgado Filho,
            <br>
            3501 - Centro,
            <br>
            Guarulhos - SP,
            <br>
            07115-000
        </p>
    </section>

    <section class="w-[100%] md:w-[45%] h-4/5
    flex flex-col
    items-center justify-center md:justify-normal">

        <h3 class="text-white font-extrabold font-['Inter']
        text-[20px] md:text-[30px] lg:text-[36px]">

            AGENDE UM HORÁRIO
        </h3>
        <br>
        <button class="w-[200px] md:w-[245px] h-[65px] md:h-[85px]
        border-[#ECA72C] border-solid border-2 rounded-[8px]
        mt-[20px] md:mt-[60px]
        text-[#ECA72C] font-bold font-['Inter']
        hover:text-white hover:bg-[#ECA72C] ease-in-out duration-300">

            <a href="agendar.php" class="w-[100%] h-[100%]
            text-[20px] md:text-[30px]">

                AGENDAR
            </a>
        </button>
    </section>
</section>

<section class="w-full h-[185px] bg-[#2A2A2C] 
flex flex-col items-center justify-center">

    <span class="text-white font-light font-['Inter'] italic 
    text-[20px] md:text-[32px] lg:text-[40px]">

        © 2023 Pente Fino Barber Shop
    </span>
</section>
</footer>
</body>

</html>

