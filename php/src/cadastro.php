<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <link rel="shortcut icon" href="/assets/images/icons/favicon.ico" type="image/x-icon">
    <title>Pente Fino | Cadastro</title>
</head>

<body class="w-full h-screen flex flex-col items-center justify-center bg-[url('/assets/images/back-3.jpeg')] bg-no-repeat bg-cover backdrop-blur-sm">

    <main class="w-11/12 md:w-8/12 lg:w-6/12 h-3/4 bg-zinc-300 bg-opacity-90 rounded-2xl flex flex-col justify-center md:justify-normal items-center relative">

        <div class="w-[45px] md:w-[55px] lg:w-[60px] top-5 md:top-8 lg:top-10 left-5 md:left-8 lg:left-10 absolute">
            <a href="index.html">
                <img src="assets/images/icons/back.svg" alt="Voltar (Back)" class="w-full h-full" >
            </a>
        </div>

        <div class="w-2/6 md:w-3/12 lg:w-1/5">
            <img src="assets/images/logo-principal.png" alt="Logo - Pente Fino">
        </div>

                <form action="" method="GET">

                    <div class="step step-1 active">
                        <div class="w-fit h-fit flex flex-col items-center">
                                <input maxlenght="30"type="text" id="userName" name="userName" placeholder="Primeiro nome"
                                class="w-[300px] md:w-[400px] lg:w-[450px] h-[50px] md:h-[55px] lg:h-[60px] 
                                bg-[#262d3b] rounded-[15px] mt-5 pl-5 
                                text-white text-[15px] font-['Inter'] 
                                placeholder:text-[15px] required" required
                                >
                                <span class="span-required">seu nome deve ter mais de 3 caracteres</span>

                                <input maxlenght="40" type="text" id="userLastName" name="userLastName" placeholder="Sobrenome"
                                class="w-[300px] md:w-[400px] lg:w-[450px] h-[50px] md:h-[55px] lg:h-[60px] 
                                bg-[#262d3b] rounded-[15px] mt-5 pl-5 
                                text-white text-[15px] font-['Inter'] 
                                placeholder:text-[15px] required" required
                                >
                                <span class="span-required">Insira seu sobrenome</span>

                                <input type="text" onfocus="(this.type = 'date')" id="userBirth" name="userBirth" placeholder="Data de nascimento"
                                class="w-[300px] md:w-[400px] lg:w-[450px] h-[50px] md:h-[55px] lg:h-[60px] 
                                bg-[#262d3b] rounded-[15px] mt-5 pl-5  pr-5
                                text-white text-[15px] font-['Inter'] 
                                placeholder:text-[15px] required" required
                                >
                                <span class="span-required">Data inválida</span>
                                
                                <button type="button"
                                    class="next-step w-[130px] md:w-[130px] lg:w-[170px] h-[45px] md:h-[45px] lg:h-[50px]
                                    bg-[#ECA72C] rounded-[16px] mt-[25px] 
                                    text-white font-black text-[18px] font-['Inter'] 
                                    hover:bg-[#684500] ease-in-out duration-500">
                                    Próximo
                                </button>
                        </div>
                    </div>  
                    <div class="step step-2">
                        <div class="w-fit h-fit flex flex-col items-center">
                            <input maxlenght="11" type="text" id="userPhone" name="userPhone" placeholder="11 998888888"
                            class="w-[300px] md:w-[400px] lg:w-[450px] h-[50px] md:h-[55px] lg:h-[60px] 
                                bg-[#262d3b] rounded-[15px] mt-5 pl-5 
                                text-white text-[15px] font-['Inter'] 
                                placeholder:text-[15px] required" required 
                                >
                                <span class="span-required">Formato inválido</span>
                            
                            <input maxlenght="11" type="text" id="userPhoneConfirm" name="userPhoneConfirm" placeholder="Confirme o número de celular"
                            class="w-[300px] md:w-[400px] lg:w-[450px] h-[50px] md:h-[55px] lg:h-[60px] 
                                bg-[#262d3b] rounded-[15px] mt-5 pl-5 
                                text-white text-[15px] font-['Inter'] 
                                placeholder:text-[15px] required" required
                                >
                                <span class="span-required">Os campos devem ser iguais</span>
                            <div class="flex space-x-4">
                                <button type="button"
                                class="prev-step w-[130px] md:w-[130px] lg:w-[170px] h-[45px] md:h-[45px] lg:h-[50px]
                                    bg-[#ECA72C] rounded-[16px] mt-[25px] 
                                    text-white font-black text-[18px] font-['Inter'] 
                                    hover:bg-[#684500] ease-in-out duration-500">
                                    Voltar
                                </button>
                                <button type="button"
                                class="next-step w-[130px] md:w-[130px] lg:w-[170px] h-[45px] md:h-[45px] lg:h-[50px]
                                    bg-[#ECA72C] rounded-[16px] mt-[25px] 
                                    text-white font-black text-[18px] font-['Inter'] 
                                    hover:bg-[#684500] ease-in-out duration-500">
                                    Próximo
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="step step-3">
                        <div class="w-fit h-fit flex flex-col items-center">
                            <input maxlenght="60" type="text" id="userEmail" name="userEmail" placeholder="E-mail"
                            class="w-[300px] md:w-[400px] lg:w-[450px] h-[50px] md:h-[55px] lg:h-[60px] 
                                bg-[#262d3b] rounded-[15px] mt-5 pl-5 
                                text-white text-[15px] font-['Inter'] 
                                placeholder:text-[15px] required" required
                                >
                                <span class="span-required">email inválido</span>
                            <input maxlenght="60" type="text" id="userEmailConfirm" name="userEmailConfirm" placeholder="Confirme o E-mail"
                            class="w-[300px] md:w-[400px] lg:w-[450px] h-[50px] md:h-[55px] lg:h-[60px] 
                                bg-[#262d3b] rounded-[15px] mt-5 pl-5 
                                text-white text-[15px] font-['Inter'] 
                                placeholder:text-[15px] required" required
                                >
                                <span class="span-required">os campos devem ser iguais</span>
                            <div class="flex space-x-4">
                                <button type="button"
                                class="prev-step w-[130px] md:w-[130px] lg:w-[170px] h-[45px] md:h-[45px] lg:h-[50px]
                                    bg-[#ECA72C] rounded-[16px] mt-[25px] 
                                    text-white font-black text-[18px] font-['Inter'] 
                                    hover:bg-[#684500] ease-in-out duration-500">
                                    Voltar
                                </button>
                                <button type="button"
                                class="next-step w-[130px] md:w-[130px] lg:w-[170px] h-[45px] md:h-[45px] lg:h-[50px]
                                    bg-[#ECA72C] rounded-[16px] mt-[25px] 
                                    text-white font-black text-[18px] font-['Inter'] 
                                    hover:bg-[#684500] ease-in-out duration-500">
                                    Próximo
                                </button>
                            </div>
                        </div>    
                    </div>
                    <div class="step step-4">
                        <div class="w-fit h-fit flex flex-col items-center">
                            <input maxlenght="12" type="text" id="userPassword" name="userPassword" placeholder="Senha"
                            class="w-[300px] md:w-[400px] lg:w-[450px] h-[50px] md:h-[55px] lg:h-[60px] 
                                bg-[#262d3b] rounded-[15px] mt-5 pl-5 
                                text-white text-[15px] font-['Inter'] 
                                placeholder:text-[15px] required" required
                                >
                                <span class="span-required">A senha deve ter no mínimo 4 caracteres</span>
                            <input maxlenght="12" type="text" id="userPasswordConfirm" name="userPasswordConfirm" placeholder="Confirme sua Senha"
                            class="w-[300px] md:w-[400px] lg:w-[450px] h-[50px] md:h-[55px] lg:h-[60px] 
                                bg-[#262d3b] rounded-[15px] mt-5 pl-5 
                                text-white text-[15px] font-['Inter'] 
                                placeholder:text-[15px] required" required
                                >
                                <span class="span-required">As senhas devem ser compatíveis</span>
                            <div class="flex space-x-4">
                            <button type="button"
                                class="prev-step w-[130px] md:w-[130px] lg:w-[170px] h-[45px] md:h-[45px] lg:h-[50px]
                                    bg-[#ECA72C] rounded-[16px] mt-[25px] 
                                    text-white font-black text-[18px] font-['Inter'] 
                                    hover:bg-[#684500] ease-in-out duration-500">
                                    Voltar
                                </button>
                                <button type="submit"
                                    class="submit-step w-[130px] md:w-[130px] lg:w-[170px] h-[45px] md:h-[45px] lg:h-[50px]
                                    bg-[#ECA72C] rounded-[16px] mt-[25px]  
                                    text-white font-black text-[18px] font-['Inter'] 
                                    hover:bg-[#684500] ease-in-out duration-500">
                                    Cadastrar
                                </button> 
                            </div>
                        </div>
                    </div>

                    <div class="step step-5 m-10">
                        <div id="sucess-box" class="w-fit h-fit flex flex-col items-center" >
                            
                            <p class="text-green-500 font-black text-[30px] font-['Inter'] text-center"> Cadastro confirmado com sucesso!</p>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="green" class="stroke-green-400 w-[120px] md:w-[150px] lg:w-[200px] h-[55px] md:h-[55px] lg:h-[60px]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <div class="flex space-x-4">
                                <button id="button-home"
                                        class="w-[120px] md:w-[150px] lg:w-[200px] h-[55px] md:h-[55px] lg:h-[60px]
                                        bg-[#ECA72C] rounded-[16px] mt-[45px] 
                                        text-white font-black text-18px] font-['Inter'] 
                                        hover:bg-[#684500] ease-in-out duration-500">
                                        <a href="/index.html"> Inicio</a>
                                </button> 
                                <button id="button-login"
                                        class="w-[120px] md:w-[150px] lg:w-[200px] h-[55px] md:h-[55px] lg:h-[60px]
                                        bg-[#ECA72C] rounded-[16px] mt-[45px] 
                                        text-white font-black text-[18px] font-['Inter'] 
                                        hover:bg-[#684500] ease-in-out duration-500">
                                        <a href="/login.php"> Login</a>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
                

    </main>
<script src="/assets/js/index.js"></script>
</body>

</html>

<?php
/*
include 'config.php';

$firstName = $_POST[''];
$lastName =;
$birth =;
$pass =;
$phone =;
$email =;

$stmt = $conn->prepare("INSERT INTO TB_USERS(USER_FIRSTNAME, USER_LASTNAME, USER_BIRTH, USER_PHONE, USER_EMAIL, USER_PASSWORD) VALUES (:firstName, :lastName, :birth, :phone, :email, :pass");

$stmt->bindParam(':firstName', $firstName);
$stmt->bindParam(':lastName', $lastName);
$stmt->bindParam(':birth', $birth);
$stmt->bindParam(':phone', $phone);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':pass', $pass);

$stmt->execute();

*/
?>