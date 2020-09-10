const navigateTo = e => {
    var lang = getCookie("lang");
    $("main").load(lang + "/products/" + e + ".html");
    setCookie('page', e, 1000);
    closeMenu();
}