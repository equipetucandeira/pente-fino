class MobileNavBar {
    constructor(mobileMenu, navList, navLinks, mobileNav, dropbtn, dropcont) {
        this.mobileMenu = document.querySelector(mobileMenu);
        this.navList = document.querySelector(navList);
        this.navLinks = document.querySelectorAll(navLinks);
        this.mobileNav = document.getElementById(mobileNav);
        this.dropbtn = document.querySelector(dropbtn);
        this.dropcont = document.querySelector(dropcont);
        this.activeNav = "active-nav";
        this.activeMenu = "active-menu";
        this.handleClick = this.handleClick.bind(this);
        this.handleDropdownClick = this.handleDropdownClick.bind(this);
    }

    handleClick() {
        this.navList.classList.toggle(this.activeNav);
        this.mobileMenu.classList.toggle(this.activeMenu);
        this.mobileNav.classList.toggle('scale-y-0');
    }

    handleDropdownClick(event) {
        event.stopPropagation();
        this.dropcont.style.display = (this.dropcont.style.display === 'block') ? 'none' : 'block';
    }

    addClickEvent() {
        this.mobileMenu.addEventListener('click', this.handleClick);

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
    '.nav-list',
    '.nav-list li',
    'mobileNav',
    '.dropbtn',
    '.dropcont'
);

mobileNavbar.init();
