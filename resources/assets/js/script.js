$("#register").on("click", function () {
    $("overlay.form-overlay,div.container").fadeIn(800);
});
$(".close").on("click", function () {
    $("overlay.form-overlay,div.container").fadeOut(800);
})
// 
// 
// 
// 
//
var ANIMATED = false;

function start(n) {
    var w = $(window).width(),
        h = $(window).height();
    if (n == undefined) {
        n = 0;
    }
    if ($(".text.main").eq(n).length == 1) {
        $(".text.main").eq(n).animate({
            "top": ("-=" + h / 20),
            "opacity": 1
        }, 800, function () {
            start(n + 1);
        });
    } else {
        ANIMATED = true;
    }
}

window.onload = function () {
    var page = $(".page");
    for (var i in page) {
        page.eq(i).css({
            "left": (100 * i) + "%"
        });
    }
    start(0);
}

$(window).resize(function () {
    if (ANIMATED) {
        var w = $(window).width(),
            h = $(window).height();
        $(".text.main.title").css({
            "top": h / 10
        });
        $(".text.main.content").css({
            "top": h / 4
        });
        $(".button.main").css({
            "top": 7 * h / 10
        });
    }
});