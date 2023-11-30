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
<body class="w-full h-screen flex flex-col items-center justify-center bg-zinc-300">
    
    <main class="w-11/12 md:w-10/12 lg:w-8/12 h-4/5 flex flex-col justify-center md:justify-normal items-center bg-white rounded-2xl relative">
        
        <div>
            <img src="./assets/images/logo-pentefino.png" alt="Logo - Pente Fino">
        </div>

        <form action="" method="">
            
            <label>
                Serviço
                <select name="serviceUserSchedule" id="serviceUserSchedule" required>

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
            
            <label>
                Atendente
                <select name="attendantUserSchedule" id="attendantUserSchedule" required>

                    <option value="" selected disabled>Escolha um atendente</option>
                    <option value="1">Joãozinho</option>
                    <option value="2">Liminha</option>
                    <option value="3">Pedrinho</option>
                    <option value="4">Thiaguinho</option>
                </select>
            </label>

            <label>
                Dia
                <input type="date" id="dateUserSchedule" name="dateUserSchedule" required>
            </label>

            <label>
                Horário
                <select name="timeUserSchedule" id="timeUserSchedule" required>

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

            <button>Confirmar Agendamento</button>
            <button type="reset">Limpar Seleções</button>
        </form>
    </main>
</body>
</html>