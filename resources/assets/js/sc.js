'use strict';
function submit() {

}

var index = 0,
    all = $(".page").length;
$(".process").text((index + 1) + " from " + all);

function goToPage(n, ele) {
    if (n < all) {
        $(".page-container").animate({
            "left": "-" + n * 100 + "%"
        }, 1000);
        $(".process").text((n + 1) + " from " + all);
    }
    if (n === all - 1) {
        ele.text("Submit");
        submit();
        return n - 1;
    } else {
        ele.text("Next");
    }
    return n;
}


$("#register").on("click", function () {
    $("overlay.form-overlay,div.container").fadeIn(800);
});
$(".close").on("click", function () {
    $("overlay.form-overlay,div.container").fadeOut(800);
});


$("#next").on("click", function () {
    index = goToPage(index + 1, $(this));
});