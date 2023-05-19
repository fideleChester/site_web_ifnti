$(document).ready(function () {
    $(".slide-selector").on("click", "li", function () {
        $(".slides__spinner").css(
            "transform",
            "rotateY(" + $(this).index() * -90 + "deg)"
        );
        $(".slide-selector li").removeClass("selected");
        $(this).addClass("selected");
    });
});

const slideSelector = document.querySelector(".slide-selector");
slideSelector.addEventListener("click", () => { });