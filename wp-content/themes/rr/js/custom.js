$(document).on("scroll", function() {
    // if ($(document).scrollTop() > 80) {
    //     $(".header_outer").addClass("shrink");
    // } else {
    //     $(".header_outer").removeClass("shrink");
    // };
});




$(document).ready(function() {
    $(".burger_tgl").click(function(){
        $(".menu_main").toggleClass("open_menu");
    });
    $(".menu_close").click(function(){
        $(".menu_main").toggleClass("open_menu");
    });
});