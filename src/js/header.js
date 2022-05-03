var menuOpen=false;

document.querySelector('.menuMobile__btn').addEventListener('click',(e)=>{
    if(menuOpen===false){
        showMobileMenu();
        menuOpen=true;
    }else{
        hideMobileMenu();
        menuOpen=false;
    }
});



document.querySelector('.btn_close').addEventListener('click',()=>{
    hideMobileMenu();
    menuOpen=false;
});

var links=document.querySelectorAll('.menu__container a');
var linksMenu=document.querySelectorAll('.menu__container--mobile a');

document.addEventListener('scroll',()=>{
    scrollMenu();
})

function scrollMenu(){
    let scrollY=window.scrollY;
    
    links.forEach((link,index)=>{
        let href=link.getAttribute('href');
        let linkMenu=document.querySelector(href);
        let posSection=linkMenu.offsetTop;
        let heightSection=linkMenu.offsetHeight;
        
        if(posSection <= scrollY && (posSection + heightSection) > scrollY){
            setSelectedMenu(link);
            setSelectedMenu(linksMenu[index]);
        }else{
            removeSelectedMenu(link);
            removeSelectedMenu(linksMenu[index]);
        }
    })
}

function showMobileMenu(){
    document.querySelector('.menu__container--mobile').classList.add('show_mobile_menu_display');
    setTimeout(()=>{
        document.querySelector('.menu__container--mobile').classList.add('show_mobile_menu_opacity');
    },500);
}

function hideMobileMenu(){
    setTimeout(()=>{
        document.querySelector('.menu__container--mobile').classList.remove('show_mobile_menu_opacity');
        setTimeout(()=>{
            document.querySelector('.menu__container--mobile').classList.remove('show_mobile_menu_display');
        },300)
    },200);
}

function setSelectedMenu(itemMenu){
    itemMenu.classList.add('menu__selected');
}

function removeSelectedMenu(itemMenu){
    itemMenu.classList.remove('menu__selected');
}

function removeAllMenuSelected() {
    [...document.querySelectorAll('.menu__container a')].forEach((itemMenu)=>{
        itemMenu.classList.remove('menu__selected');
    });

    [...document.querySelectorAll('.menu__container--mobile a')].forEach((itemMenu)=>{
        itemMenu.classList.remove('menu__selected');
    })
}