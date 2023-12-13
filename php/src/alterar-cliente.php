<?php
session_start();
require_once "config.php";

$codigo = $_GET['id'];
$consulta = $conn->prepare('SELECT * FROM TB_USERS WHERE USER_ID = :code');
$consulta->bindValue(':code', $codigo);
$consulta->execute();

$linha = $consulta->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
   <script src="./assets/js/tailwind.config.js" defer></script>
   <link rel="stylesheet" href="./assets/css/style.css">

   <link rel="shortcut icon" href="./assets/images/icon/favicon.ico" type="image/x-icon">
   <title>Pente Fino | Admin</title>
</head>

<body>
   <div class="p-20 flex justify-center items-center flex-col" id="box-prin">

      <h3 class="md:text-7xl text-5xl text-yellow-500 font-['Sancreek'] mt-5">Alterando</h3>
      <?php echo "<h3 class='text-5xl mt-10'>Cliente: {$linha['USER_FIRSTNAME']}</h3>"; ?>
      <form action="alterar-cliente-action.php" method="POST" class="w-1/2">
         <input type="hidden" name="txtid" value="<?php echo "{$linha['USER_ID']}" ?>">
         <div class="mt-5">
            <label for="nome" class="font-['Smythe'] text-2xl">Nome: </label><br>
            <input type="text" name="txtnome" id="nome" class="w-full rounded" value="<?php echo "{$linha['USER_FIRSTNAME']}"; ?>">
         </div>
         <div class="mt-5">
            <label for="sobrenome" class="font-['Smythe'] text-2xl">Sobrenome: </label><br>
            <input type="text" name="txtsobrenome" id="sobrenome" class="w-full rounded" value="<?php echo "{$linha['USER_LASTNAME']}"; ?>">
         </div>
         <div class="mt-5">
            <label for="data" class="font-['Smythe'] text-2xl">Data Nascimento: </label><br>
            <input type="date" name="txtdatanasc" id="data" class="w-full rounded" value="<?php echo "{$linha['USER_BIRTH']}"; ?>">
         </div>
         <div class="mt-5">
            <label for="email" class="font-['Smythe'] text-2xl">Email: </label><br>
            <input type="email" name="txtemail" id="email" class="w-full rounded" value="<?php echo "{$linha['USER_EMAIL']}"; ?>">
         </div>
         <div class="mt-5">
            <label for="senha" class="font-['Smythe'] text-2xl">Senha: </label><br>
            <input type="text" name="txtsenha" class="w-full rounded" id="senha">
         </div>
         <div class="mt-5">
            <label for="rank" class="font-['Smythe'] text-2xl">Rank: </label><br>
            <input type="text" name="txtrank" id="rank" class="w-full rounded" value="<?php echo "{$linha['USER_RANK']}"; ?>">
         </div>
         <div class="mt-5">
            <label for="fone" class="font-['Smythe'] text-2xl">Telefone: </label><br>
            <input type="text" name="txtfone" id="fone" class="w-full rounded" value="<?php echo "{$linha['USER_PHONE']}"; ?>">
         </div>
         <!--data de nascimento do cliente-->
         <!--botões de controle -->
         <div class="flex w-full justify-center">
            <button type="submit" class="font-['Smythe'] text-3xl mt-5 text-green-500 hover:text-green-800 ease-in-out duration-[400ms] " name="btnalterar">Alterar </button>
         </div>
      </form>
      <button id="but-excluir" class="text-red-500 font-['Smythe'] text-3xl mt-5 hover:text-red-800 ease-in-out duration-[400ms]">Excluir</button>

      <div class="box-show" id="box-show">
         <div class="p-10 bg-white rounded">
            <h1 class="font-['Smythe'] text-3xl">Tem certeza que deseja excluir ? </h1>
            <div class="mt-5 flex justify-evenly width-full">
               <button id="btn-cancelar" class="text-green-500 font-['Smythe'] text-3xl hover:text-green-800 ease-in-out duration-[400ms]">Cancelar</button>
               <button id="btn-confirmar" class="text-red-500 font-['Smythe'] text-3xl hover:text-red-800 ease-in-out duration-[400ms]"><?php echo "<a href='delete.php?id=$codigo'>"; ?>Excluir<?php echo "</a>"; ?></button>
            </div>
         </div>
      </div>



      <div>
</body>
<script src="./assets/js/alterar-cliente.js"></script>

</html>