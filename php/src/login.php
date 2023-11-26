<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="shortcut icon" href="assets/images/icons/favicon.ico" type="image/x-icon">
    <title>Pente Fino | Login</title>
</head>
<body class="w-full h-screen flex flex-col items-center justify-center bg-[url('/assets/images/bgImage-login.jpg')] bg-no-repeat bg-cover backdrop-blur-sm">
    
    <main class="w-11/12 md:w-10/12 lg:w-8/12 h-4/5 bg-zinc-300 bg-opacity-90 rounded-2xl flex flex-col items-center relative">
        
        <div class="w-[45px] md:w-[55px] lg:w-[60px] top-5 md:top-8 lg:top-10 left-5 md:left-8 lg:left-10 absolute">
            <img src="assets/images/icons/back.svg" alt="Voltar (Back)" class="w-full h-full" >
        </div>

        <div class="w-[160px] md:w-[250px] lg:w-[300px]">
            <img src="assets/images/logo-pentefino.png" alt="Logo - Pente Fino">
        </div>

        <form action="" method=""
            class="w-fit h-fit flex flex-col" >

            <input type="text" id="emailUserLogin" name="emailUserLogin"
            class="" >

            <input type="password" id="passwordUserLogin" name="passwordUserLogin"
            class="" >

            <button type="submit">ENTRAR</button>
        </form>

        <a href="#">Ainda não tem uma conta? <strong>Cadastre-se</strong></a>
    </main> 
</body>
</html>