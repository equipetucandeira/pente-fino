
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
            <a href="#sobre" class="hover:text-yellow-500 ease-in-out duration-[400ms]">
                Sobre
            </a>
        </li>
        <li class="flex">
            <a href="#" class="mt-[10px]">
                <img src="./assets/images/logo-pentefino.png" alt="Logo Pente-Fino" width="100" height="100">
            </a>
        </li>
        <li>
            <a href="#agendar" class="hover:text-yellow-500 ease-in-out duration-[400ms]">
                Agendar
            </a>
        </li>
    
        <?php if( isset($_SESSION['status']) && !empty($_SESSION['status']) )
        {
        ?>
            <li>
            <div class="relative inline-block text-left">
                <div>
                    <button type="button" class="inline-flex w-full justify-center gap-x-1.5" id="menu-button">
                        <img src="./assets/images/icons/user.png" width="32" height="32" alt="Profile">
                    </button>
                </div>
                
                <div class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
                    <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">Minha Conta</a>
                    <form method="POST" action="#" role="none">
                        <button type="submit" class="text-gray-700 block w-full px-4 py-2 text-left text-sm" role="menuitem" tabindex="-1" id="menu-item-3">Sair</button>
                    </form>
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
    <div class="h-100px md:hidden flex justify-evenly items-center z-50	">

        <div class=" mobile-menu flex flex-col items-center cursor-pointer h-100px justify-center">

            <div class="line1 w-10 h-1 bg-white mb-1"></div>
            <div class="line2 w-10 h-1 bg-white mb-1"></div>
            <div class="line3 w-10 h-1 bg-white"></div>
        </div>

        <a href="#" class="mt-[10px]">
            <img src="./assets/images/logo-pentefino.png" alt="Logo Pente-Fino" width="100" height="100">
        </a>

        <?php if( isset($_SESSION['status']) && !empty($_SESSION['status']) )
        {
        ?>
                <img src="./assets/images/icons/user.png" width="32" height="32" alt="Profile">
        <?php }else{ ?>
    
            <a href="./login-form.php" class="text-yellow-500 hover:text-white ease-in-out duration-[400ms] font-['Sancreek'] text-3xl">
                Login
            </a>
        <?php } ?>
    </div>

    

    <!-- Menu Responsivo para telas pequenas -->
    <ul id="mobileNav" class="md:hidden flex flex-col items-center bg-transparent backdrop-blur text-white w-full absolute top-h-100px  
    transition ease-in-out delay-150 transform scale-y-0 font-['Sancreek'] text-3xl h-h-calc justify-around">

        <li>
            <a href="index.html" class="hover:text-yellow-500 ease-in-out duration-[400ms]">
                Página Inicial
            </a>
        </li>
        <li>
            <a href="#" class="py-2 hover:text-yellow-500 ease-in-out duration-[400ms]">
                Sobre
            </a>
        </li>
        <li>
            <a href="#" class="py-2 hover:text-yellow-500 ease-in-out duration-[400ms]">
                Agendar
            </a>
        </li>
        
        <li>
            <a href="#" class="py-2 hover:text-yellow-500 ease-in-out duration-[400ms]">
                Login
            </a>
        </li>
    </ul>
</header>

<script>
    // Adicione o script JavaScript aqui
    var menuButton = document.getElementById('menu-button');
    var dropdownMenu = document.querySelector('.absolute');

    // Exibir o menu quando o mouse passa sobre o botão
    menuButton.addEventListener('click', function() {
      menuButton.setAttribute('aria-expanded', 'true');
      dropdownMenu.style.display = 'block';
    });

    // Ocultar o menu quando o mouse deixa o botão
    dropdownMenu.addEventListener('click', function() {
      menuButton.setAttribute('aria-expanded', 'false');
      dropdownMenu.style.display = 'none';
    });
  </script>