<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="assets/images/icons/favicon.ico" type="image/x-icon">
    <title>Pente Fino | Agendamento</title>
</head>
<body class="w-full h-screen max-h-fit flex flex-col items-center justify-center 
bg-[url('/assets/images/bgImage-login.jpg')] bg-no-repeat bg-cover backdrop-blur-sm font-['Inter']">
    <!---------------------------------------------- CARD PRINCIPAL -------------------------------------->
    <main class="mt-[100px] sm:mt-0 w-11/12 md:w-10/12 lg:w-8/12 max-h-fit 
    pb-10  flex flex-col justify-normal items-center bg-white bg-opacity-90  rounded-2xl relative">
        
        <div class="w-[45px] md:w-[55px] lg:w-[60px] top-5 md:top-8 lg:top-10 left-5 md:left-8 lg:left-10 absolute hover:scale-105 ease-in-out duration-[400ms]">
            <a href="index.html">
                <svg viewBox="0 0 74 74" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path id="Back" d="M36.6667 0C29.4147 0 22.3256 2.15046 16.2958 6.17945C10.266 10.2084 5.56631 15.935 2.7911 22.6349C0.0158872 29.3349 -0.710235 36.7073 0.704556 43.82C2.11935 50.9326 5.61151 57.466 10.7394 62.5939C15.8674 67.7218 22.4007 71.214 29.5134 72.6288C36.626 74.0436 43.9985 73.3175 50.6984 70.5422C57.3984 67.767 63.1249 63.0674 67.1539 57.0376C71.1829 51.0078 73.3334 43.9186 73.3334 36.6667C73.3334 26.9421 69.4703 17.6158 62.5939 10.7394C55.7176 3.86309 46.3913 0 36.6667 0ZM56.6667 40H24.7133L32.3567 47.6433C32.675 47.9508 32.929 48.3186 33.1037 48.7253C33.2784 49.132 33.3703 49.5694 33.3742 50.012C33.378 50.4546 33.2937 50.8935 33.1261 51.3032C32.9585 51.7128 32.711 52.085 32.398 52.398C32.085 52.711 31.7129 52.9585 31.3032 53.1261C30.8935 53.2937 30.4546 53.378 30.012 53.3742C29.5694 53.3703 29.132 53.2784 28.7253 53.1037C28.3187 52.929 27.9508 52.675 27.6433 52.3567L14.31 39.0233C13.6851 38.3982 13.3341 37.5505 13.3341 36.6667C13.3341 35.7828 13.6851 34.9351 14.31 34.31L27.6433 20.9767C27.9508 20.6583 28.3187 20.4044 28.7253 20.2297C29.132 20.055 29.5694 19.963 30.012 19.9592C30.4546 19.9553 30.8935 20.0397 31.3032 20.2073C31.7129 20.3749 32.085 20.6224 32.398 20.9353C32.711 21.2483 32.9585 21.6205 33.1261 22.0302C33.2937 22.4398 33.378 22.8787 33.3742 23.3213C33.3703 23.7639 33.2784 24.2013 33.1037 24.608C32.929 25.0147 32.675 25.3825 32.3567 25.69L24.7133 33.3333H56.6667C57.5507 33.3333 58.3986 33.6845 59.0237 34.3096C59.6488 34.9348 60 35.7826 60 36.6667C60 37.5507 59.6488 38.3986 59.0237 39.0237C58.3986 39.6488 57.5507 40 56.6667 40Z" fill="#232323"/>
                </svg>   
            </a>
        </div>

        <div class="w-[200px] md:w-[250px] lg:w-[300px]">
            <img src="./assets/images/logo-pentefino.png" alt="Logo - Pente Fino">
        </div>

        <!---------------------------------------------- FORMULÁRIO E SEÇÕES -------------------------------------->
        <form action="" method=""
        class="w-full flex flex-col max-h-fit">
            
            <!---------------------------------------------- INPUTS -------------------------------------->
            <section 
            class="w-[90%] self-center sm:flex justify-evenly">
                <!------------------------------------- SERVIÇOS E ATENDENTES ------------------------->
                <section
                class="flex flex-col max-h-fit">
                    <label
                    class="flex flex-col mb-10
                    text-black text-[20px] font-['Inter']">
                        <span class="font-bold">Serviço</span>
                        <select name="serviceUserSchedule" id="serviceUserSchedule" required
                        class="border border-black rounded-md p-2 mt-5">
                            <option value="" selected disabled>Escolha um serviço</option>
                            <optgroup label="CORTES">
                                <option value="1">CORTE COMPLETO</option>
                                <option value="2">ACABAMENTO</option>
                                <option value="3">PENTEADO</option>
                            </optgroup>
                            <optgroup label="BARBA">
                                <option value="4">BARBA COMPLETA</option>
                                <option value="5">ACABAMENTO</option>
                            </optgroup>
                        </select>
                    </label>
                
                    <label
                    class="flex flex-col mb-10
                    text-black text-[20px] font-['Inter']">
                        <span class="font-bold">Atendente</span>
                        <select name="attendantUserSchedule" id="attendantUserSchedule" required
                        class="border border-black rounded-md p-2 mt-5">
                            <option value="" selected disabled>Escolha um atendente</option>
                            <option value="1">Joãozinho</option>
                            <option value="2">Liminha</option>
                            <option value="3">Pedrinho</option>
                            <option value="4">Thiaguinho</option>
                        </select>
                    </label>
                </section>

                <!------------------------------------- DATA E HORA ------------------------->
                <section
                class="flex flex-col max-h-fit">
                    <label
                    class="flex flex-col mb-10
                    text-black text-[20px] font-['Inter']">
                        <span class="font-bold">Dia</span>
                        <input type="date" id="dateUserSchedule" name="dateUserSchedule" required
                        class="border border-black rounded-md p-2 mt-5">
                    </label>
                    <label
                    class="flex flex-col mb-10
                    text-black text-[20px] font-['Inter']">
                        <span class="font-bold">Horário</span>
                        <select name="timeUserSchedule" id="timeUserSchedule" required
                        class="border border-black rounded-md p-2 mt-5">
                            <option value="" selected disabled>Escolha um horário</option>
                            <optgroup label="MANHÃ">
                                <option value="1">9:00</option>
                                <option value="2">10:00</option>
                                <option value="3">11:00</option>
                            </optgroup>
                            <optgroup label="TARDE">
                                <option value="4">13:00</option>
                                <option value="5">14:00</option>
                                <option value="6">15:00</option>
                                <option value="7">16:00</option>
                                <option value="8">17:00</option>
                            </optgroup>
                            <optgroup label="NOITE">
                                <option value="9">19:00</option>
                                <option value="10">20:00</option>
                                <option value="11">21:00</option>
                            </optgroup>
                        </select>
                    </label>
                </section>
            </section>

            <!------------------------------------- BOTÕES ------------------------->
            <section class="md:w-[75%] lg:w-[70%] self-center
            flex flex-col items-center gap-[30px]
            md:flex-row md:gap-[10px] justify-evenly mt-5">

                <button id="confirmSchedule"
                class="w-[240px] h-[80px] bg-[#ECA72C] rounded-md
                text-[22px] text-white font-bold shadow-gray-500 shadow-md 
                hover:bg-[#684500] ease-in-out duration-[400ms]">
                    Confirmar Agendamento
                </button>

                <button type="reset"
                class="w-[240px] h-[80px] bg-[#b90101] rounded-md
                text-[22px] text-white font-bold shadow-gray-500 shadow-md 
                hover:bg-[#460707] ease-in-out duration-[400ms]">
                    Limpar Seleções
                </button>
            </section>
        </form>
    </main>
</body>
</html>