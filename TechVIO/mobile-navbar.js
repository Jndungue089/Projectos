class MobileNavbar{
    constructor(){
        this.mobileMenu = document.querySelector(this.mobileMenu);
        this.navList = document.querySelector(this.mobileList);
        this.navLinks = document.querySelectorAll(this.mobileLinks);
        this.activeClass = "active";

        this.handleClick = this.handleClick.bind();
    }

    handleClick(){
        console.log(this);
        this.navList.classList.toggle(this.activeClass);
    }

    addClickEvent(){
        this.mobileMenu.addEventListener("click", () => console.log("Hello World!"));
    }

    init(){
        if(this.mobileMenu){
            this.addClickEvent();
        }
        return this;
    }

}

const mobileNavbar = new MobileNavbar(
    ".mobile-menu",
    ".nav-list",
    ".nav-list li",
);

mobileNavbar.init();