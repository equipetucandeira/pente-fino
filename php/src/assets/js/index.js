class MobileNavBar {
    constructor(mobileMenu,mobileMenu2, navList, navLinks, mobileNav,mobileNav2, dropbtn, dropcont) {
        this.mobileMenu = document.querySelector(mobileMenu);
        this.mobileMenu2 = document.querySelector(mobileMenu2);
        this.navList = document.querySelector(navList);
        this.navLinks = document.querySelectorAll(navLinks);
        this.mobileNav = document.getElementById(mobileNav);
        this.mobileNav2 = document.getElementById(mobileNav2);
        this.dropbtn = document.querySelector(dropbtn);
        this.dropcont = document.querySelector(dropcont);
        this.activeNav = "active-nav";
        this.activeMenu = "active-menu";
        this.handleClick = this.handleClick.bind(this);
        this.handleClick2 = this.handleClick2.bind(this);
        this.handleDropdownClick = this.handleDropdownClick.bind(this);
    }

    handleClick() {
        this.navList.classList.toggle(this.activeNav);
        this.mobileMenu.classList.toggle(this.activeMenu);
        this.mobileNav.classList.toggle('scale-y-0');
    }
    handleClick2() {
        this.navList.classList.toggle(this.activeNav);
        this.mobileMenu2.classList.toggle(this.activeMenu);
        this.mobileNav2.classList.toggle('scale-y-0');
    }

    handleDropdownClick(event) {
        event.stopPropagation();
        this.dropcont.style.display = (this.dropcont.style.display === 'block') ? 'none' : 'block';
    }

    addClickEvent() {
        this.mobileMenu.addEventListener('click', this.handleClick);
        this.mobileMenu2.addEventListener('click', this.handleClick2);

        this.navLinks.forEach(link => {
            link.addEventListener('click', () => {
                this.handleClick();
            });
        });

        this.dropbtn.addEventListener('click', this.handleDropdownClick);

        window.addEventListener('click', () => {
            this.dropcont.style.display = 'none';
        });
    }

    init() {
        if (this.mobileMenu) {
            this.addClickEvent();
        }
        return this;
    }
}

const mobileNavbar = new MobileNavBar(
    '.mobile-menu',
    '.mobile-menu2',
    '.nav-list',
    '.nav-list li',
    'mobileNav',
    'mobileNav2',
    '.dropbtn',
    '.dropcont'
);

mobileNavbar.init();