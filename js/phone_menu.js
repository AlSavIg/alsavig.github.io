$(function () {
    let link = $(".adaptive-menu-icon");
    let menu = $(".phone-menu");

    link.on(
        "click",
        function (event) {
            event.preventDefault();
            menu.css("transform", "translateY(0%)");
        }
    );

    let close = $(".close-menu");

    close.on(
        "click",
        function (event) {
            event.preventDefault();
            menu.css("transform", "translateY(-100%)");
        }
    );
});