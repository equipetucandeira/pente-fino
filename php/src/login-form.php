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
    <title>Pente Fino | Login</title>
</head>

<body class="w-full h-screen bg-[url('/assets/images/bgImage-login.jpg')] bg-no-repeat bg-cover backdrop-blur-sm">
    <?php include "header.php";?>   
    <section class="m-auto relative flex items-center justify-center min-h-screen">

    <div class="bg-zinc-300 bg-opacity-90 rounded-2xl p-10 w-fit h-fit flex flex-col items-center">
        <div class="flex m-auto h-16 flex-row items-center w-full relative">
            <div class="absolute left-1/5">
                    <a href="index.php">
                        <svg width="50" viewBox="0 0 74 74" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path id="Back"
                                d="M36.6667 0C29.4147 0 22.3256 2.15046 16.2958 6.17945C10.266 10.2084 5.56631 15.935 2.7911 22.6349C0.0158872 29.3349 -0.710235 36.7073 0.704556 43.82C2.11935 50.9326 5.61151 57.466 10.7394 62.5939C15.8674 67.7218 22.4007 71.214 29.5134 72.6288C36.626 74.0436 43.9985 73.3175 50.6984 70.5422C57.3984 67.767 63.1249 63.0674 67.1539 57.0376C71.1829 51.0078 73.3334 43.9186 73.3334 36.6667C73.3334 26.9421 69.4703 17.6158 62.5939 10.7394C55.7176 3.86309 46.3913 0 36.6667 0ZM56.6667 40H24.7133L32.3567 47.6433C32.675 47.9508 32.929 48.3186 33.1037 48.7253C33.2784 49.132 33.3703 49.5694 33.3742 50.012C33.378 50.4546 33.2937 50.8935 33.1261 51.3032C32.9585 51.7128 32.711 52.085 32.398 52.398C32.085 52.711 31.7129 52.9585 31.3032 53.1261C30.8935 53.2937 30.4546 53.378 30.012 53.3742C29.5694 53.3703 29.132 53.2784 28.7253 53.1037C28.3187 52.929 27.9508 52.675 27.6433 52.3567L14.31 39.0233C13.6851 38.3982 13.3341 37.5505 13.3341 36.6667C13.3341 35.7828 13.6851 34.9351 14.31 34.31L27.6433 20.9767C27.9508 20.6583 28.3187 20.4044 28.7253 20.2297C29.132 20.055 29.5694 19.963 30.012 19.9592C30.4546 19.9553 30.8935 20.0397 31.3032 20.2073C31.7129 20.3749 32.085 20.6224 32.398 20.9353C32.711 21.2483 32.9585 21.6205 33.1261 22.0302C33.2937 22.4398 33.378 22.8787 33.3742 23.3213C33.3703 23.7639 33.2784 24.2013 33.1037 24.608C32.929 25.0147 32.675 25.3825 32.3567 25.69L24.7133 33.3333H56.6667C57.5507 33.3333 58.3986 33.6845 59.0237 34.3096C59.6488 34.9348 60 35.7826 60 36.6667C60 37.5507 59.6488 38.3986 59.0237 39.0237C58.3986 39.6488 57.5507 40 56.6667 40Z"
                                fill="#232323" />
                        </svg>
                    </a>
            </div>
            <div class="lg:left-60 md:left-56 left-28 absolute">
                <img src="./assets/images/logo-pentefino.png" alt="Logo - Pente Fino" class="w-20 md:w-20 lg:w-30">
            </div>
        </div>
    

        <?php
        if (isset($_GET['errorMessage'])) { ?>
            <h1 class="error bg-red-700 rounded-md p-4 text-white font-['Inter'] " id="error-message"><?php echo $_GET['errorMessage']; ?></h1>
        <?php } ?>

        <form action="./login.php" method="post" class="w-fit h-fit flex flex-col items-center">

            <input type="text" id="emailUserLogin" name="emailUserLogin" placeholder="E-mail" maxlength="60" required class="w-[300px] md:w-[500px] lg:w-[550px] h-[60px] md:h-[65px] lg:h-[70px] 
            bg-[#262d3b] rounded-[15px] mt-10 pl-5 
            text-white text-[20px] font-['Inter'] 
            placeholder:text-white placeholder:text-[20px]">

            <input type="password" id="passwordUserLogin" name="passwordUserLogin" placeholder="Senha" maxlength="12" required class="w-[300px] md:w-[500px] lg:w-[550px] h-[60px] md:h-[65px] lg:h-[70px] relative
            bg-[#262d3b] rounded-[15px] mt-[50px] pl-5 pr-5
            text-white text-[20px] font-['Inter'] 
            placeholder:text-white placeholder:text-[20px]">

            <span class="w-[42px] bg-[#262d3b] absolute
            translate-x-[105px] md:translate-x-[205px] lg:translate-x-[230px] 
            translate-y-[158px] md:translate-y-[165px] lg:translate-y-[175px]">
                <img src="./assets/images/icons/show-password.png" alt="Mostrar Senha (Show Password)" id="showPassword" class="hover:cursor-pointer">
            </span>

            <button type="submit" class="w-[300px] md:w-[500px] lg:w-[550px] h-[60px] md:h-[65px] lg:h-[70px]
            bg-[#ECA72C] rounded-[18px] mt-[55px] 
            text-white font-black text-[30px] font-['Inter'] 
            hover:bg-[#684500] ease-in-out duration-500" name="btn_login">
                ENTRAR
            </button>
        </form>

        <span class="mt-6 text-[14px] md:text-[18px]">
            Ainda não tem uma conta?
            <a href="cadastro.html">
                <strong class="font-black underline text-[#262d3b] hover:text-black ease-in-out duration-300">Cadastre-se</strong>
            </a>
        </span>
    </div>
        </section>
</body>

</html>
<script>
    $(document).ready(function() {
        var error = $('#error-message');
        error.fadeIn();
        if (error.length) {
            setTimeout(() => {
                error.fadeOut('slow', () => {
                    $(this).remove();
                });
            }, 3000);
        }
    });
</script>