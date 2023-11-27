<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>FOOTER</title>
</head>
<body class="w-full h-screen flex flex-col">

    <!-- AO FINALIZAR E JUNTAR TODAS AS PEÇAS DO SITE, ADICIONAREMOS ESTE TRECHO DE CÓDIGO (FOOTER) AO INDEX, MAS, POR ENQUANTO,
    VAMOS MANTER SEPARADOS PARA FACILITAR OS MERGES-->
    

    <footer class="w-full h-[620px] mt-auto bottom-0 flex flex-col ">
        
        <section 
        class="w-full h-[435px] max-h-fit bg-[#232323]
        flex flex-col md:flex-row items-center justify-evenly">

            <section
            class="w-[100%] md:w-[45%] h-4/5 
            flex flex-col
            items-center justify-center md:justify-normal">
                
                <h3 
                class="text-white font-extrabold font-['Inter']
                text-[20px] md:text-[30px] lg:text-[38px]">
                    ENTRE EM CONTATO
                </h3>
                <br>
                <p 
                class="text-white font-normal font-['Inter']
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

            <section
            class="w-[100%] md:w-[45%] h-4/5
            flex flex-col
            items-center justify-center md:justify-normal">

                <h3 
                class="text-white font-extrabold font-['Inter']
                text-[20px] md:text-[30px] lg:text-[36px]">
                    AGENDE UM HORÁRIO
                </h3>
                <br>
                <button 
                class="w-[200px] md:w-[245px] h-[65px] md:h-[85px]
                border-[#ECA72C] border-solid border-2 rounded-[8px]
                mt-[20px] md:mt-[60px]
                text-[#ECA72C] font-bold font-['Inter']
                hover:text-white hover:bg-[#ECA72C] ease-in-out duration-300">

                    <a href="login.php" 
                    class="w-[100%] h-[100%]
                    text-[20px] md:text-[30px]">
                        AGENDAR
                    </a>
                </button>
            </section>
        </section>

        <section 
        class="w-full h-[185px] bg-[#2A2A2C] 
        flex flex-col items-center justify-center">

            <span
            class="text-white font-light font-['Inter'] italic 
            text-[20px] md:text-[32px] lg:text-[40px]">
                © 2023 Pente Fino Barber Shop
            </span>
        </section>
    </footer>
</body>
</html>