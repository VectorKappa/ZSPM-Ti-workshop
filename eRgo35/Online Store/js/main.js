var lang = getCookie('lang');

const openMenu = () => { $("menu").load(lang + "/products/menu.html"); $("menu").animate({ left: 0 }, 150); $("#dim").fadeIn("slow"); clock();}
const closeMenu = () => { $("menu").animate({ left: '-500px' }, 150); $("#dim").fadeOut("slow"); }

const themeChange = () => {
    var x = getCookie('theme');
    
    if (x == "light") {
        setDarkTheme();
        $("#clock").addClass("darkClock");
        $(".hand").addClass("darkHand");
        setCookie('theme', 'dark', 1000);
    }
    else if (x == "dark") {
        setLightTheme();
        $("#clock").removeClass("darkClock");
        $(".hand").removeClass("darkHand");
        setCookie('theme', 'light', 1000);
    } 
    else {
        setDarkTheme();
        setCookie('theme', 'dark', 1000);
    }
}

const langChange = () => {
    var x = getCookie('lang');
    var y = getCookie('page');

    if (x == "en_us") {
        lang = "pl_pl";
        setCookie('lang', 'pl_pl', 1000);
        document.title = "Kup Tani Sprzęt Komputerowy - eRgo's Store";
        navigateTo(y);
    }
    else if (x == "pl_pl") {
        lang = "en_us";
        setCookie('lang', 'en_us', 1000);
        document.title = "Buy Cheap Computer Hardware - eRgo's Store";
        navigateTo(y);
    } 
    else {
        lang = "en_us";
        setCookie('lang', 'en_us', 1000);
        document.title = "Buy Cheap Computer Hardware - eRgo's Store";
        navigateTo(y);
    }

}

window.onload = () => {
    var x = getCookie('theme');
    
    if (x == "light") {
        setLightTheme();
    }
    else if (x == "dark") {
        setDarkTheme();
    }
    else {
        setLightTheme();
        setCookie('theme', 'light', 1000);
    }


    var y = getCookie('page');
    
    if (y == "main") {
        navigateTo("main");
    }
    else if (y == "processors") {
        navigateTo("processors");
    }
    else if (y == "rams") {
        navigateTo("rams");
    }
    else if (y == "graphics") {
        navigateTo("graphics");
    }
    else {
        setCookie('page', 'main', 1000);
        setCookie('lang', 'en_us', 1000);
        navigateTo("main");
    }

    if (lang == "en_us") {
        setCookie('lang', 'en_us', 1000);
        document.title = "Buy Cheap Computer Hardware - eRgo's Store";
    }
    else if (lang == "pl_pl") {
        setCookie('lang', 'pl_pl', 1000);
        document.title = "Kup Tani Sprzęt Komputerowy - eRgo's Store";
    }
    else {
        setCookie('lang', 'en_us', 1000);
        document.title = "Buy Cheap Computer Hardware - eRgo's Store";
    }
}

const notAvaiable = e => {
    if (e == "en") {
        alert('Detailed view is not avaiable in this country.');
    }
    else if (e == "pl") {
        alert('Widok szczegółowy nie jest dostępny w tym kraju.');
    }
    else {
        alert('Detailed view is not avaiable in this country.');
    }
}