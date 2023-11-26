<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="assets/images/icons/favicon.ico" type="image/x-icon">
    <title>Pente Fino | Login</title>
</head>
<body class="w-full h-screen flex flex-col items-center justify-center bg-[url('/assets/images/bgImage-login.jpg')] bg-no-repeat bg-cover backdrop-blur-sm">
    
    <main class="w-11/12 md:w-10/12 lg:w-8/12 h-4/5 bg-zinc-300 bg-opacity-90 rounded-2xl flex flex-col justify-center md:justify-normal items-center relative">

        <div class="w-[45px] md:w-[55px] lg:w-[60px] top-5 md:top-8 lg:top-10 left-5 md:left-8 lg:left-10 absolute">
            <a href="index.html">
                <img src="assets/images/icons/back.svg" alt="Voltar (Back)" class="w-full h-full" >
            </a>
        </div>

        <div class="w-[200px] md:w-[250px] lg:w-[300px]">
            <img src="assets/images/logo-pentefino.png" alt="Logo - Pente Fino">
        </div>

        <form action="#" method=""
            class="w-fit h-fit flex flex-col items-center" >

            <input type="text" id="emailUserLogin" name="emailUserLogin" placeholder="E-mail"
            class="w-[300px] md:w-[500px] lg:w-[550px] h-[60px] md:h-[65px] lg:h-[70px] 
            bg-[#262d3b] rounded-[15px] mt-5 pl-5 
            text-white text-[20px] font-['Inter'] 
            placeholder:text-white placeholder:text-[20px]" 
            >

            <input type="password" id="passwordUserLogin" name="passwordUserLogin" placeholder="Senha"
            class="w-[300px] md:w-[500px] lg:w-[550px] h-[60px] md:h-[65px] lg:h-[70px] 
            bg-[#262d3b] rounded-[15px] mt-5 pl-5 
            text-white text-[20px] font-['Inter'] 
            placeholder:text-white placeholder:text-[20px]" 
            
            >

            <button type="submit"
            class="w-[300px] md:w-[500px] lg:w-[550px] h-[60px] md:h-[65px] lg:h-[70px]
            bg-[#ECA72C] rounded-[18px] mt-[55px] 
            text-white font-black text-[30px] font-['Inter'] 
            hover:bg-[#684500] ease-in-out duration-500">
                ENTRAR
            </button>
        </form>

        <span class="mt-6 text-[14px] md:text-[18px]">
            Ainda não tem uma conta? 
            <a href="cadastro.php">
                <strong class="font-black underline text-[#262d3b] hover:text-black ease-in-out duration-300">Cadastre-se</strong>
            </a>
        </span>      
    </main> 
</body>
</html>