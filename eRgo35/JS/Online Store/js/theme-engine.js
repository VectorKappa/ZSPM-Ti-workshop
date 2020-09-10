function setLightTheme() {
    $("body").addClass("light"); $("body").removeClass("dark");
    $("menu").addClass("light"); $("menu").removeClass("dark");
    $("#day-moon").addClass("fa-moon-o"); $("#day-moon").removeClass("fa-sun-o");
    // $("#clock").removeClass("darkClock");
    // $(".hand").removeClass("darkHand");
}

function setDarkTheme() {
    $("body").addClass("dark"); $("body").removeClass("light");
    $("menu").addClass("dark"); $("menu").removeClass("light");
    $("#day-moon").addClass("fa-sun-o"); $("#day-moon").removeClass("fa-moon-o"); 
    // $("#clock").addClass("darkClock");
    // $(".hand").addClass("darkHand");
}