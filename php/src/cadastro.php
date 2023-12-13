<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="./assets/js/cadastro.js" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <link rel="shortcut icon" href="./assets/images/icon/favicon.ico " type="image/x-icon">
    <title>Pente Fino | Cadastro</title>
</head>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="./assets/js/cadastro.js" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="./assets/images/icon/favicon.ico " type="image/x-icon">
    <title>Pente Fino | Cadastro</title>
</head>


<body class="w-full h-screen bg-[url('/assets/images/bgImage-login.jpg')] bg-no-repeat bg-cover backdrop-blur-sm">

    <section class="m-auto relative flex items-center justify-center min-h-screen">
        <div class="bg-zinc-300 bg-opacity-90 rounded-2xl p-10 w-fit h-fit flex flex-col items-center">

            <div class="flex m-auto h-16 flex-row items-center w-full relative">
                <div class="absolute left-1/5">
                    <a href="index.php">
                        <svg width="50" viewBox="0 0 74 74" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path id="Back" d="M36.6667 0C29.4147 0 22.3256 2.15046 16.2958 6.17945C10.266 10.2084 5.56631 15.935 2.7911 22.6349C0.0158872 29.3349 -0.710235 36.7073 0.704556 43.82C2.11935 50.9326 5.61151 57.466 10.7394 62.5939C15.8674 67.7218 22.4007 71.214 29.5134 72.6288C36.626 74.0436 43.9985 73.3175 50.6984 70.5422C57.3984 67.767 63.1249 63.0674 67.1539 57.0376C71.1829 51.0078 73.3334 43.9186 73.3334 36.6667C73.3334 26.9421 69.4703 17.6158 62.5939 10.7394C55.7176 3.86309 46.3913 0 36.6667 0ZM56.6667 40H24.7133L32.3567 47.6433C32.675 47.9508 32.929 48.3186 33.1037 48.7253C33.2784 49.132 33.3703 49.5694 33.3742 50.012C33.378 50.4546 33.2937 50.8935 33.1261 51.3032C32.9585 51.7128 32.711 52.085 32.398 52.398C32.085 52.711 31.7129 52.9585 31.3032 53.1261C30.8935 53.2937 30.4546 53.378 30.012 53.3742C29.5694 53.3703 29.132 53.2784 28.7253 53.1037C28.3187 52.929 27.9508 52.675 27.6433 52.3567L14.31 39.0233C13.6851 38.3982 13.3341 37.5505 13.3341 36.6667C13.3341 35.7828 13.6851 34.9351 14.31 34.31L27.6433 20.9767C27.9508 20.6583 28.3187 20.4044 28.7253 20.2297C29.132 20.055 29.5694 19.963 30.012 19.9592C30.4546 19.9553 30.8935 20.0397 31.3032 20.2073C31.7129 20.3749 32.085 20.6224 32.398 20.9353C32.711 21.2483 32.9585 21.6205 33.1261 22.0302C33.2937 22.4398 33.378 22.8787 33.3742 23.3213C33.3703 23.7639 33.2784 24.2013 33.1037 24.608C32.929 25.0147 32.675 25.3825 32.3567 25.69L24.7133 33.3333H56.6667C57.5507 33.3333 58.3986 33.6845 59.0237 34.3096C59.6488 34.9348 60 35.7826 60 36.6667C60 37.5507 59.6488 38.3986 59.0237 39.0237C58.3986 39.6488 57.5507 40 56.6667 40Z" fill="#232323" />
                        </svg>
                    </a>
                </div>
                <div class="lg:left-48 md:left-40 left-28 absolute">
                    <img src="./assets/images/logo-pentefino.png" alt="Logo - Pente Fino" class="w-20 md:w-20 lg:w-30">
                </div>
            </div>


<body class="w-full h-screen bg-[url('/assets/images/bgImage-login.jpg')] bg-no-repeat bg-cover backdrop-blur-sm">

            <form action="./cadastro-send.php" method="POST">

                <div class="step step-1 active">
                    <div class="w-fit h-fit flex flex-col items-center">
                        <h1 Class="p-6 font-['Sancreek'] text-3xl text-black">Dados pessoais</h1>

                        <input maxlenght="30" type="text" id="userName" name="userName" placeholder="Insira seu primeiro nome" class="w-[300px] md:w-[400px] lg:w-[450px] h-[50px] md:h-[55px] lg:h-[60px] 
                                bg-[#262d3b] rounded-[15px] mt-5 pl-5 
                                text-white text-[15px] font-['Inter'] 
                                placeholder:text-[15px] required" required>
                        <span class="span-required">seu nome deve ter mais de 3 caracteres</span>

                        <input maxlenght="40" type="text" id="userLastName" name="userLastName" placeholder="Insira seu sobrenome" class="w-[300px] md:w-[400px] lg:w-[450px] h-[50px] md:h-[55px] lg:h-[60px] 
                                bg-[#262d3b] rounded-[15px] mt-5 pl-5 
                                text-white text-[15px] font-['Inter'] 
                                placeholder:text-[15px] required" required>
                        <span class="span-required">Insira seu sobrenome</span>

                        <input type="text" onfocus="(this.type = 'date')" id="userBirth" name="userBirth" placeholder="Data de nascimento" class="w-[300px] md:w-[400px] lg:w-[450px] h-[50px] md:h-[55px] lg:h-[60px] 
                                bg-[#262d3b] rounded-[15px] mt-5 pl-5  pr-5
                                text-white text-[15px] font-['Inter'] 
                                placeholder:text-[15px] required" required>
                        <span class="span-required">Data inválida</span>

                        <button type="button" class="next-step w-[130px] md:w-[130px] lg:w-[170px] h-[45px] md:h-[45px] lg:h-[50px]
                                    bg-[#ECA72C] rounded-[16px] mt-[25px] 
                                    text-white font-black text-[18px] font-['Inter'] 
                                    hover:bg-[#684500] ease-in-out duration-500">
                            Próximo
                        </button>
                    </div>
                </div>
                <div class="step step-2">
                    <div class="w-fit h-fit flex flex-col items-center">
                        <h1 Class="p-6 font-['Sancreek'] text-3xl text-black">Telefone ou Celular</h1>
                        <h1 Class="p-2 font-['Sancreek'] text-1xl text-black">Digite apenas números!</h1>
                        <input maxlenght="11" type="text" id="userPhone" name="userPhone" placeholder="Insira o telefone" class="w-[300px] md:w-[400px] lg:w-[450px] h-[50px] md:h-[55px] lg:h-[60px] 
                                bg-[#262d3b] rounded-[15px] mt-5 pl-5 
                                text-white text-[15px] font-['Inter'] 
                                placeholder:text-[15px] required" required>
                        <span class="span-required">Formato inválido</span>

                        <input maxlenght="11" type="text" id="userPhoneConfirm" name="userPhoneConfirm" placeholder="Confirme o telefone" class="w-[300px] md:w-[400px] lg:w-[450px] h-[50px] md:h-[55px] lg:h-[60px] 
                                bg-[#262d3b] rounded-[15px] mt-5 pl-5 
                                text-white text-[15px] font-['Inter'] 
                                placeholder:text-[15px] required" required>
                        <span class="span-required">Os campos devem ser iguais</span>
                        <div class="flex space-x-4">
                            <button type="button" class="prev-step w-[130px] md:w-[130px] lg:w-[170px] h-[45px] md:h-[45px] lg:h-[50px]
                                    bg-[#ECA72C] rounded-[16px] mt-[25px] 
                                    text-white font-black text-[18px] font-['Inter'] 
                                    hover:bg-[#684500] ease-in-out duration-500">
                                Voltar
                            </button>
                            <button type="button" class="next-step w-[130px] md:w-[130px] lg:w-[170px] h-[45px] md:h-[45px] lg:h-[50px]
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
                        <h1 Class="p-6 font-['Sancreek'] text-3xl text-black">E-mail</h1>
                        <input maxlenght="60" type="text" id="userEmail" name="userEmail" placeholder="Insira o E-mail" class="w-[300px] md:w-[400px] lg:w-[450px] h-[50px] md:h-[55px] lg:h-[60px] 
                                bg-[#262d3b] rounded-[15px] mt-5 pl-5 
                                text-white text-[15px] font-['Inter'] 
                                placeholder:text-[15px] required" required>
                        <span class="span-required">email inválido</span>
                        <input maxlenght="60" type="text" id="userEmailConfirm" name="userEmailConfirm" placeholder="Confirme o E-mail" class="w-[300px] md:w-[400px] lg:w-[450px] h-[50px] md:h-[55px] lg:h-[60px] 
                                bg-[#262d3b] rounded-[15px] mt-5 pl-5 
                                text-white text-[15px] font-['Inter'] 
                                placeholder:text-[15px] required" required>
                        <span class="span-required">os campos devem ser iguais</span>
                        <div class="flex space-x-4">
                            <button type="button" class="prev-step w-[130px] md:w-[130px] lg:w-[170px] h-[45px] md:h-[45px] lg:h-[50px]
                                    bg-[#ECA72C] rounded-[16px] mt-[25px] 
                                    text-white font-black text-[18px] font-['Inter'] 
                                    hover:bg-[#684500] ease-in-out duration-500">
                                Voltar
                            </button>
                            <button type="button" class="next-step w-[130px] md:w-[130px] lg:w-[170px] h-[45px] md:h-[45px] lg:h-[50px]
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
                        <h1 Class="p-6 font-['Sancreek'] text-3xl text-black">Senha</h1>
                        <h1 Class="p-2 font-['Sancreek'] text-1xl text-black">Digite sua melhor senha!</h1>
                        <input maxlenght="12" type="text" id="userPassword" name="userPassword" placeholder="Senha" class="w-[300px] md:w-[400px] lg:w-[450px] h-[50px] md:h-[55px] lg:h-[60px] 
                                bg-[#262d3b] rounded-[15px] mt-5 pl-5 
                                text-white text-[15px] font-['Inter'] 
                                placeholder:text-[15px] required" required>
                        <span class="span-required">A senha deve ter no mínimo 4 caracteres</span>
                        <input maxlenght="12" type="text" id="userPasswordConfirm" name="userPasswordConfirm" placeholder="Confirme sua Senha" class="w-[300px] md:w-[400px] lg:w-[450px] h-[50px] md:h-[55px] lg:h-[60px] 
                                bg-[#262d3b] rounded-[15px] mt-5 pl-5 
                                text-white text-[15px] font-['Inter'] 
                                placeholder:text-[15px] required" required>
                        <span class="span-required">As senhas devem ser compatíveis</span>
                        <div class="flex space-x-4">
                            <button type="button" class="prev-step w-[130px] md:w-[130px] lg:w-[170px] h-[45px] md:h-[45px] lg:h-[50px]
                                    bg-[#ECA72C] rounded-[16px] mt-[25px] 
                                    text-white font-black text-[18px] font-['Inter'] 
                                    hover:bg-[#684500] ease-in-out duration-500">
                                Voltar
                            </button>
                            <button type="submit" class="submit-step w-[130px] md:w-[130px] lg:w-[170px] h-[45px] md:h-[45px] lg:h-[50px]
                                    bg-[#ECA72C] rounded-[16px] mt-[25px]  
                                    text-white font-black text-[18px] font-['Inter'] 
                                    hover:bg-[#684500] ease-in-out duration-500">
                                Cadastrar
                            </button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </section>


</body>
</html>