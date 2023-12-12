<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <script src="./assets/js/index.js" defer></script>
    <script src="./assets/js/tailwind.config.js" defer></script>
    <link rel="stylesheet" href="./assets/css/style.css">

    <link rel="shortcut icon" href="./assets/images/icons/favicon.ico" type="image/x-icon">
    <title>Pente Fino</title>

    <link href="../../assets/css/dist/output.css" rel="stylesheet">
</head>

<body>
    <!--------------------------HEADER - BANNER-------------------------->
    <section class="bg-[url('./assets/images/bgImage-Index.jpg')] h-screen bg-cover">

        <?php
        include "header.php";
        ?>

        <div class="flex flex-col h-h-calc justify-center font-['Sancreek'] ml-percent-10 w-1/2">

            <h1 class="md:text-7xl text-5xl text-white">
                A Agenda que vai até você!
            </h1>

            <button class="w-full mt-9 text-4xl text-white border border-solid border-white p-4 
            hover:border-ycol hover:text-ycol ease-in-out duration-[400ms]">

                <a href="#" class="w-full h-[100%]">
                    Agende agora
                </a>
            </button>
        </div>
    </section>

    <!--------------------------QUEM SOMOS ?------------------------------->
    <section class="border-4 border-black flex flex-col lg:flex-row m-4 lg:m-12 ">

        <div class="flex flex-col justify-center items-center 
        gap-4 p-4
        lg:pl-14 xl:pl-36 xl:items-start lg:p-0">

            <div id="sobre" class="text-center text-black text-[50px] md:text-[80px] lg:text-[60px]  font-normal font-['Smythe']">

                Quem somos?
            </div>

            <div class="text-black text-center text-[25.5px] md:text-[35px] font-normal font-['Smythe']">
                Bem-vindo à Barbearia Pente Fino!
            </div>

            <div class="text-black  text-[25px] md:text-[30px] font-normal font-['Smythe']">

                Somos uma equipe apaixonada por proporcionar cortes precisos e cuidados personalizados, combinando
                tradição e modernidade.
            </div>

            <div>
                <span class="text-black text-[25px] md:text-[30px] font-normal font-['Smythe']">

                    Na Barbearia Estilo Clássico, não apenas cortamos cabelo, mas criamos memórias através de cada
                    corte.
                </span>

                <span class="text-amber-400 text-[25px] md:text-[30px] font-normal font-['Smythe'] underline">

                    Visite-nos
                </span>

                <span class="text-black text-[25px] md:text-[30px] font-normal font-['Smythe']">

                    para transformar sua rotina de cuidados pessoais em momentos especiais.
                </span>
            </div>
        </div>

        <div class="hidden lg:block">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="550" zoomAndPan="magnify" viewBox="0 0 450 449.999984" height="600" preserveAspectRatio="xMidYMid meet" version="1.0">
                <defs>
                    <clipPath id="1285a9d0c1">
                        <path d="M 99.171875 44.996094 L 450 44.996094 L 450 449.996094 L 99.171875 449.996094 Z M 99.171875 44.996094 " clip-rule="nonzero" />
                    </clipPath>
                    <clipPath id="a3e7c31739">
                        <path d="M 302 4 L 377 4 L 377 108 L 302 108 Z M 302 4 " clip-rule="nonzero" />
                    </clipPath>
                    <clipPath id="4de32a4b74">
                        <path d="M 449.992188 121.101562 L 243.035156 275.152344 L 147.648438 147.003906 L 354.605469 -7.046875 Z M 449.992188 121.101562 " clip-rule="nonzero" />
                    </clipPath>
                    <clipPath id="0e122eba58">
                        <path d="M 449.992188 121.101562 L 243.035156 275.152344 L 147.648438 147.003906 L 354.605469 -7.046875 Z M 449.992188 121.101562 " clip-rule="nonzero" />
                    </clipPath>
                    <clipPath id="f59d2eb2ea">
                        <path d="M 449.992188 121.101562 L 243.035156 275.152344 L 147.648438 147.003906 L 354.605469 -7.046875 Z M 449.992188 121.101562 " clip-rule="nonzero" />
                    </clipPath>
                    <clipPath id="a11b84f6cf">
                        <path d="M 396.527344 49.269531 L 308.941406 114.464844 L 266.539062 57.496094 L 354.121094 -7.699219 Z M 396.527344 49.269531 " clip-rule="nonzero" />
                    </clipPath>
                    <clipPath id="b572bdf4ad">
                        <path d="M 396.527344 49.269531 L 308.941406 114.464844 L 267.113281 58.265625 L 354.695312 -6.925781 Z M 396.527344 49.269531 " clip-rule="nonzero" />
                    </clipPath>
                    <clipPath id="a65b9f0ac4">
                        <path d="M 210 139 L 305 139 L 305 232 L 210 232 Z M 210 139 " clip-rule="nonzero" />
                    </clipPath>
                    <clipPath id="e1f21dcb89">
                        <path d="M 449.992188 121.101562 L 243.035156 275.152344 L 147.648438 147.003906 L 354.605469 -7.046875 Z M 449.992188 121.101562 " clip-rule="nonzero" />
                    </clipPath>
                    <clipPath id="c2ad1e0c43">
                        <path d="M 449.992188 121.101562 L 243.035156 275.152344 L 147.648438 147.003906 L 354.605469 -7.046875 Z M 449.992188 121.101562 " clip-rule="nonzero" />
                    </clipPath>
                    <clipPath id="1c0c7e80f9">
                        <path d="M 449.992188 121.101562 L 243.035156 275.152344 L 147.648438 147.003906 L 354.605469 -7.046875 Z M 449.992188 121.101562 " clip-rule="nonzero" />
                    </clipPath>
                    <clipPath id="269387c2a2">
                        <path d="M 317.761719 155.570312 L 211.785156 234.453125 L 191.5625 207.285156 L 297.539062 128.402344 Z M 317.761719 155.570312 " clip-rule="nonzero" />
                    </clipPath>
                    <clipPath id="cad8dee6d2">
                        <path d="M 317.761719 155.570312 L 212.363281 234.023438 L 192.140625 206.855469 L 297.539062 128.402344 Z M 317.761719 155.570312 " clip-rule="nonzero" />
                    </clipPath>
                    <clipPath id="f7bd99cae9">
                        <path d="M 168 88 L 435 88 L 435 167 L 168 167 Z M 168 88 " clip-rule="nonzero" />
                    </clipPath>
                    <clipPath id="7200c0a93a">
                        <path d="M 449.992188 121.101562 L 243.035156 275.152344 L 147.648438 147.003906 L 354.605469 -7.046875 Z M 449.992188 121.101562 " clip-rule="nonzero" />
                    </clipPath>
                    <clipPath id="e0e1695cb7">
                        <path d="M 449.992188 121.101562 L 243.035156 275.152344 L 147.648438 147.003906 L 354.605469 -7.046875 Z M 449.992188 121.101562 " clip-rule="nonzero" />
                    </clipPath>
                    <clipPath id="f4dd333514">
                        <path d="M 449.992188 121.101562 L 243.035156 275.152344 L 147.648438 147.003906 L 354.605469 -7.046875 Z M 449.992188 121.101562 " clip-rule="nonzero" />
                    </clipPath>
                </defs>
                <g clip-path="url(#1285a9d0c1)">
                    <path fill="#545454" d="M 449.953125 449.996094 L 99.214844 247.496094 L 449.953125 44.996094 Z M 449.953125 449.996094 " fill-opacity="1" fill-rule="nonzero" />
                </g>
                <g clip-path="url(#a3e7c31739)">
                    <g clip-path="url(#4de32a4b74)">
                        <g clip-path="url(#0e122eba58)">
                            <g clip-path="url(#f59d2eb2ea)">
                                <g clip-path="url(#a11b84f6cf)">
                                    <g clip-path="url(#b572bdf4ad)">
                                        <path fill="#000000" d="M 352.417969 9.992188 C 340.214844 8.117188 328.777344 16.515625 326.953125 28.683594 C 325.148438 40.753906 333.558594 52.199219 345.617188 54.078125 C 357.738281 55.960938 369.203125 47.535156 371.09375 35.339844 C 372.96875 23.3125 364.519531 11.851562 352.417969 9.992188 Z M 316.269531 107.964844 C 314.480469 106.5625 313.164062 104.984375 311.960938 103.339844 C 311.195312 102.300781 310.511719 102.191406 309.371094 102.695312 C 307.222656 103.644531 305 104.421875 302.3125 105.464844 C 304.296875 102.515625 306.007812 99.992188 307.699219 97.457031 C 314.515625 87.242188 319.984375 76.261719 325.5625 65.371094 C 328.941406 58.773438 327.96875 51.804688 324.605469 45.375 C 315.574219 28.136719 325.683594 7.519531 344.757812 4.535156 C 360.09375 2.140625 374.230469 12.625 376.558594 28.125 C 378.8125 43.121094 368.214844 57.367188 353.101562 59.503906 C 344.046875 60.78125 337.339844 65.113281 333.128906 73.429688 C 328.941406 81.703125 323.933594 89.546875 319.925781 97.925781 C 318.410156 101.089844 317.171875 104.355469 316.269531 107.964844 " fill-opacity="1" fill-rule="nonzero" />
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                </g>
                <g clip-path="url(#a65b9f0ac4)">
                    <g clip-path="url(#e1f21dcb89)">
                        <g clip-path="url(#c2ad1e0c43)">
                            <g clip-path="url(#1c0c7e80f9)">
                                <g clip-path="url(#269387c2a2)">
                                    <g clip-path="url(#cad8dee6d2)">
                                        <path fill="#000000" d="M 271.769531 147.996094 C 254.273438 172.0625 236.597656 195.996094 218.832031 219.863281 C 216.011719 223.644531 213.210938 227.4375 210.339844 231.300781 C 213.253906 231.726562 215.441406 231.238281 217.59375 229.003906 C 239.839844 205.933594 258.058594 187.257812 280.394531 164.285156 C 287.066406 157.417969 297.898438 146.28125 304.898438 139.074219 L 271.769531 147.996094 " fill-opacity="1" fill-rule="nonzero" />
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                </g>
                <g clip-path="url(#f7bd99cae9)">
                    <g clip-path="url(#7200c0a93a)">
                        <g clip-path="url(#e0e1695cb7)">
                            <g clip-path="url(#f4dd333514)">
                                <path fill="#000000" d="M 428.558594 119.082031 C 426.839844 131.246094 415.378906 139.816406 403.203125 138.042969 C 391.121094 136.277344 382.695312 124.933594 384.410156 112.734375 C 386.109375 100.632812 397.460938 92.144531 409.621094 93.878906 C 421.726562 95.605469 430.269531 106.976562 428.558594 119.082031 Z M 307.015625 124.582031 C 306.570312 127.621094 303.753906 129.71875 300.714844 129.273438 C 297.675781 128.828125 295.574219 126.003906 296.019531 122.964844 C 296.464844 119.925781 299.28125 117.828125 302.320312 118.277344 C 305.359375 118.722656 307.460938 121.542969 307.015625 124.582031 Z M 382.488281 101.855469 C 378.070312 109.25 371.765625 113.683594 362.964844 114.378906 C 352.683594 115.195312 342.492188 116.941406 332.160156 117.1875 C 324.152344 117.375 316.753906 115.742188 311.199219 109.4375 C 309.796875 107.847656 308.71875 107.855469 306.917969 108.558594 C 262.898438 125.777344 218.871094 142.96875 174.789062 160.042969 C 171.777344 161.210938 169.550781 162.605469 168.960938 166.121094 C 169.554688 165.992188 170.089844 165.898438 170.613281 165.769531 C 207.667969 156.679688 244.75 147.679688 281.925781 139.097656 C 308.875 132.871094 335.742188 126.300781 363.527344 124.628906 C 372.476562 124.089844 379.320312 127.121094 385.042969 133.660156 C 392.492188 142.167969 401.875 145.542969 412.875 142.949219 C 423.816406 140.375 430.796875 133.199219 433.496094 122.324219 C 436.820312 108.921875 429.546875 95.226562 416.804688 90.128906 C 403.996094 85 389.597656 89.949219 382.488281 101.855469 " fill-opacity="1" fill-rule="nonzero" />
                            </g>
                        </g>
                    </g>
                </g>
            </svg>
        </div>
    </section>

    <!--------------------------AGENDAMENTOS----------------------------->

    <section class="flex flex-col justify-center items-center md:h-h-calc mt-10">

        <h1 id="agendar" class="md:text-8xl text-6xl font-['Smythe'] mb-5 font-bold">
            Agendamentos
        </h1>

        <div class="w-percent-80 border border-solid border-black p-10 flex justify-around lg:flex-row flex-col">

            <div class="flex flex-col">
                <div class="mb-10">

                    <h2 class="font-['Smythe'] text-5xl mb-5 font-bold">

                        Agende seu Estilo!
                    </h2>

                    <ul class="list-disc ml-percent-10">
                        <li class="font-['Smythe'] text-2xl">
                            Marque Seu horário para um corte impecável
                        </li>
                        <li class="font-['Smythe'] text-2xl">
                            Escolha o dia e a hora que se encaixam no seu ritmo
                        </li>
                    </ul>
                </div>

                <div>
                    <h2 class="font-['Smythe'] text-5xl mb-5 font-bold">

                        Corte sem complicações!
                    </h2>

                    <ul class="list-disc ml-percent-10">
                        <li class="font-['Smythe'] text-2xl">
                            Mais tempo para você, menos tempo esperando
                        </li>
                        <li class="font-['Smythe'] text-2xl">
                            Agende seu corte de cabelo ou barba online, sem sair de
                            casa!
                        </li>
                        <li class="font-['Smythe'] text-2xl">
                            Nosso sistema de agendamento é simples e intuitivo
                        </li>
                    </ul>
                </div>
            </div>

            <div class="flex flex-col justify-center mt-10 items-center">

                <h2 class="font-['Smythe'] [text-shadow:_3px_3px_3px_rgb(236_167_44_/_70%)] md:text-7xl text-5xl mb-10 text-center font-bold">

                    Está esperando <br> o quê?
                </h2>

                <a href="#" class="w-percent-80 flex justify-center items-center">

                    <button class="w-full bg-ycol p-5 text-white rounded-xl font-['Smythe'] font-bold text-2xl
                    border border-solid border-ycol 
                    hover:bg-transparent hover:text-ycol 
                    ease-in-out duration-[400ms]">

                        Agende um horário
                    </button>
                </a>
            </div>
        </div>
    </section>
    <!------------------------- O QUE FALAM DE NÓS -------------------------->
    <section class="w-[100%] h-fit lg:h-[100vh] flex flex-col mt-[100px] bg-[url('./assets/images/bgImage-quemsomos.png')] bg-cover bg-no-repeat">

        <section class="flex flex-col w-[100%] h-fit">
            <h1 id="title-quemsomos" class="mt-[20px] self-center font-bold
            text-white text-[40px] sm:text-[70px] md:text-[90px] lg:text-[100px] font-['Smythe'] drop-shadow-2xl">
                O que falam sobre nós?
            </h1>

            <section class="flex flex-col items-center gap-[20px] pb-[50px] lg:flex-row md:justify-evenly w-[100%] h-fit mt-[6%]">

                <div class="w-[85%] md:w-[70%] lg:w-[30%] h-fit pb-[20px] flex flex-col 
                bg-zinc-300 bg-opacity-90 rounded-[20px]">

                    <div class="flex justify-evenly mt-[20px] sm:mb-[20px]">
                        <img src="./assets/images/icons/star.png" alt="Estrela (Star)" class="w-[40px] sm:w-[46px]">
                        <img src="./assets/images/icons/star.png" alt="Estrela (Star)" class="w-[40px] sm:w-[46px]">
                        <img src="./assets/images/icons/star.png" alt="Estrela (Star)" class="w-[40px] sm:w-[46px]">
                        <img src="./assets/images/icons/star.png" alt="Estrela (Star)" class="w-[40px] sm:w-[46px]">
                        <img src="./assets/images/icons/star.png" alt="Estrela (Star)" class="w-[40px] sm:w-[46px]">
                    </div>

                    <p class="flex flex-col self-center w-[80%] mt-[20px] mb-[0]
                    text-center text-[22px] font-['Inter']">
                        “Sou cliente do Pente Fino a mais de 1 ano e recomendo demais!
                        Ambiente sempre limpo e super agradável. Nota 10!”
                        <br>
                        <span class="font-black lg:mt-[30px]">
                            - Pedrinho
                        </span>
                    </p>
                </div>

                <div class="w-[85%] md:w-[70%] lg:w-[30%] h-fit pb-[20px] flex flex-col 
                bg-zinc-300 bg-opacity-90 rounded-[20px]">

                    <div class="flex justify-evenly mt-[20px] sm:mb-[20px]">
                        <img src="./assets/images/icons/star.png" alt="Estrela (Star)" class="w-[40px] sm:w-[46px]">
                        <img src="./assets/images/icons/star.png" alt="Estrela (Star)" class="w-[40px] sm:w-[46px]">
                        <img src="./assets/images/icons/star.png" alt="Estrela (Star)" class="w-[40px] sm:w-[46px]">
                        <img src="./assets/images/icons/star.png" alt="Estrela (Star)" class="w-[40px] sm:w-[46px]">
                        <img src="./assets/images/icons/star.png" alt="Estrela (Star)" class="w-[40px] sm:w-[46px]">
                    </div>


                    <p class="flex flex-col self-center text-center text-[22px] w-[80%] mt-[20px] mb-[0] font-['Inter']">
                        “Ótima barbearia! Recomendo para todos. Atendentes super profissionais e atenciosos!”
                        <br>
                        <span class="font-black lg:mt-[30px]">
                            - Joãozinho
                        </span>
                    </p>
                </div>

                <div class="w-[85%] md:w-[70%] lg:w-[30%] h-fit pb-[20px] flex flex-col 
                bg-zinc-300 bg-opacity-90 rounded-[20px]">

                    <div class="flex justify-evenly mt-[20px] sm:mb-[20px]">
                        <img src="./assets/images/icons/star.png" alt="Estrela (Star)" class="w-[40px] sm:w-[46px]">
                        <img src="./assets/images/icons/star.png" alt="Estrela (Star)" class="w-[40px] sm:w-[46px]">
                        <img src="./assets/images/icons/star.png" alt="Estrela (Star)" class="w-[40px] sm:w-[46px]">
                        <img src="./assets/images/icons/star.png" alt="Estrela (Star)" class="w-[40px] sm:w-[46px]">
                        <img src="./assets/images/icons/star.png" alt="Estrela (Star)" class="w-[40px] sm:w-[46px]">
                    </div>

                    <p class="flex flex-col self-center text-center text-[22px] w-[80%] mt-[20px] mb-[0] font-['Inter']">
                        “Muito bom poder cortar o cabelo com um ótimo profissional e
                        ao mesmo tempo estar em um ambiente agradável! Eu recomendo!!!!”
                        <br>
                        <span class="font-black lg:mt-[30px]">
                            - Juninho
                        </span>
                    </p>
                </div>

            </section>
        </section>
    </section>
    <!------------------------------RODAPÉ--------------------------------->
    <footer class="w-full h-[620px] mt-[500px] bottom-0 flex flex-col ">

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

                    <a href="#" class="w-[100%] h-[100%]
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