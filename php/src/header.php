<script src="./assets/js/index.js" defer></script>
<header>
    <!-- Menu de Navegação para telas médias e grandes -->
    <ul class="hidden w-full justify-evenly h-100px items-center p-5 font-['Sancreek'] text-2xl text-white
    md:flex lg:text-3xl nav-list">
        <li>
            <a href="index.php" class="hover:text-yellow-500 ease-in-out duration-[400ms]">
                Página Inicial
            </a>
        </li>
        <li>
            <a href="index.php#sobre" class="hover:text-yellow-500 ease-in-out duration-[400ms]">
                Sobre
            </a>
        </li>
        <li class="flex">
            <a href="index.php" class="mt-[10px]">
                <img src="./assets/images/logo-pentefino.png" alt="Logo Pente-Fino" width="100" height="100">
            </a>
        </li>
        <li>
            <a href="agendar.php" class="hover:text-yellow-500 ease-in-out duration-[400ms]">
                Agendar
            </a>
        </li>
    
        <?php if( isset($_SESSION['userMail']) && !empty($_SESSION['userMail']) )
        {
        ?>
            <li>
            <div class="relative inline-block text-left dropdown">
                <button type="button" class="inline-flex w-full justify-center gap-x-1.5 dropbtn">
                    <img src="./assets/images/icons/user.png" width="32" height="32" alt="Profile">
                </button>

                <div class="dropcont hidden absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
                    <?php if( isset($_SESSION['userLevel']) && $_SESSION['userLevel'] == 3){?>
                    <a href="./user-access.php" class="text-gray-700 block px-4 py-2 text-sm">Minha Conta</a>
                    <?php }else{ ?>
                    <a href="./admin-access.php" class="text-gray-700 block px-4 py-2 text-sm">Minha Conta</a>
                    <?php } ?>
                    <a href="logout.php" class="text-gray-700 block px-4 py-2 text-sm">Sair</a>
                </div>
            </div>
        </li>
        <?php }else{ ?>
            <li>
            <a href="./login-form.php" class="text-yellow-500 hover:text-white ease-in-out duration-[400ms]">
                Login
            </a>
        </li>
        <?php } ?>
    </ul>

    <!-- Menu Hamburguer visível apenas em telas pequenas -->
<div class="h-100px md:hidden flex justify-evenly items-center z-50">

<div class="mobile-menu flex flex-col items-center cursor-pointer h-100px justify-center">

    <div class="line1 w-10 h-1 bg-white mb-1"></div>
    <div class="line2 w-10 h-1 bg-white mb-1"></div>
    <div class="line3 w-10 h-1 bg-white"></div>
</div>

<a href="index.php" class="mt-[10px]">
    <img src="./assets/images/logo-pentefino.png" alt="Logo Pente-Fino" width="100" height="100">
</a>

<?php if (isset($_SESSION['userMail']) && !empty($_SESSION['userMail'])) { ?>
    <div class="mobile-menu2 relative inline-block text-left">
        <button type="button" class="inline-flex w-full justify-center gap-x-1.5">
            <img src="./assets/images/icons/user.png" width="32" height="32" alt="Profile">
        </button>
    </div>
<?php } else { ?>
    <a href="./login-form.php" class="text-yellow-500 hover:text-white ease-in-out duration-[400ms] font-['Sancreek'] text-2xl text-yellow-500">
        Login
    </a>
<?php } ?>

</div>

<!-- Menu Responsivo para telas pequenas -->
<ul id="mobileNav" class="md:hidden flex flex-col items-center bg-transparent backdrop-blur text-white w-full absolute top-h-100px  
transition ease-in-out delay-150 transform scale-y-0 font-['Sancreek'] text-3xl h-h-calc justify-around">
<!-- Menu items for small screens -->
<li>
    <a href="index.php" class="hover:text-yellow-500 ease-in-out duration-[400ms]">
        Página Inicial
    </a>
</li>
<li>
    <a href="index.php#sobre" class="py-2 hover:text-yellow-500 ease-in-out duration-[400ms]">
        Sobre
    </a>
</li>
<li>
    <a href="indepx.php#agendar" class="py-2 hover:text-yellow-500 ease-in-out duration-[400ms]">
        Agendar
    </a>
</li>
</ul>

<!-- Menu Responsivo para telas pequenas -->
<ul id="mobileNav2" class="md:hidden flex flex-col items-center bg-transparent backdrop-blur text-white w-full absolute top-h-100px  
transition ease-in-out delay-150 transform scale-y-0 font-['Sancreek'] text-3xl h-h-calc justify-around">
<!-- Menu items for small screens -->
<li>
    <?php if( isset($_SESSION['userLevel']) && $_SESSION['userLevel'] == 3){?>
    <a href="./user-access.php" class="text-gray-700 block px-4 py-2 text-sm">Minha Conta</a>
    <?php }else{ ?>
    <a href="./admin-access.php" class="text-gray-700 block px-4 py-2 text-sm">Minha Conta</a>
    <?php } ?>
</li>
<li>
    <a href="logout.php" class="py-2 hover:text-yellow-500 ease-in-out duration-[400ms]">
        Sair
    </a>
</li>
</ul>
