<?php
session_start();
include 'config.php';

if (!isset($_SESSION['status']) && empty($_SESSION['status'])) {
    header('Location: login-form.php');
    exit();
}

$level = $_SESSION['userLevel'];

$allowedLevels = [3];

if (!in_array($level, $allowedLevels)) {
    header('Location: ./index.php');
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
    <title>Pente Fino | User</title>
</head>

<body>
    <section class="bg-[url('./assets/images/back-user.jpg')] h-screen bg-cover">
      <?php include "header.php"?>

        <div class="flex flex-col h-h-calc justify-center font-['Sancreek'] ml-percent-10 w-1/2">

            <h1 class="md:text-7xl text-5xl text-white">
                Seja Bem vindo </h1>
            <h1 class="md:text-7xl text-5xl text-yellow-500"><?php
                                                                echo "$name_cli";
                                                                ?> </h1>
            <button class="w-full mt-9 text-4xl text-white border border-solid border-white p-4 
            hover:border-ycol hover:text-ycol ease-in-out duration-[400ms]">

                <a href="agendar.php" class="w-full h-[100%]">
                    Agende aqui
                </a>
            </button>

        </div>
    </section>

    <section class="p-10 w-full mt-20" id="agendamentos">
        <div class="w-full">
            <h2 class="md:text-7xl text-5xl text-yellow-500 font-['Sancreek']">Agendamentos</h2>
            <?php
            if ($resp) {
                echo "<div class='overflow-x-auto'>";
                echo "<table class='min-w-full table-auto mt-10'>";
                echo "<thead>";
                echo "<tr class='font-['Smythe'] text-3xl'>";
                echo "<th class='px-4 py-2'>ID</th>";
                echo "<th class='px-4 py-2'>Nome do serviço</th>";
                echo "<th class='px-4 py-2'>Atendente</th>";
                echo "<th class='px-4 py-2'>Data</th>";
                echo "<th class='px-4 py-2'>Valor</th>";
                echo "<th class='px-4 py-2'>Hora</th>";
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";

                foreach ($resp as $row) {
                    echo "<tr>";
                    echo "<td class='text-center px-4 py-2'>{$row['SCHEDULE_ID']}</td>";
                    echo "<td class='text-center px-4 py-2'>{$row['SERVICE_NAME']}</td>";
                    echo "<td class='text-center px-4 py-2'>{$row['USER_FIRSTNAME']} {$row['USER_LASTNAME']}</td>";
                    $scheduleDate = new DateTime($row['SCHEDULE_DATE']);
                    $formattedDate = $scheduleDate->format('d/m/Y');
                    echo "<td class='text-center px-4 py-2'>$formattedDate</td>";
                    echo "<td class='text-center px-4 py-2'>R$ {$row['SCHEDULE_VALUE']}</td>";
                    echo "<td class='text-center px-4 py-2'>{$row['SCHEDULE_TIME']}</td>";
                    echo "</tr>";
                }

                echo "</tbody>";
                echo "</table>";
                echo "</div>";
            } else {
                "<h3 class='text-2xl mt-5'>Você ainda não possui agendamentos. </h3>";
            }
            ?>
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

</body>

</html>
