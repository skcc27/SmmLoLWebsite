function OpenPopup(popup, time) {
	if (time == undefined) {
		time = 500;
	}
	return $(popup).fadeIn(time);
}

function ClosePopup(popup, time) {
	if (time == undefined) {
		time = 500;
	}
	return $(popup).fadeOut(time);
}

$("#registerBtn").on("click", function() {
	OpenPopup($("#" + $(this).attr("go")), 800);
});

$("close").on("click", function() {
	ClosePopup($(this).parents(".lol-pop-up"), 800);
});

$(".lol-pop-up").find("overlay").on("click", function () {
	ClosePopup($(this).parent(), 800);
});

$("form > div.page").each(function(index, value) {
	$(value).css({
		"left": (index * 100) + "%"
	});
});

$("#Pg > div.section").each(function(index, value) {
	$(value).css({
		"top": (index * 100) + "%"
	});
});

$("#page-final").css({
	"left": ($("div.page").length * 100) + "%"
})

$(".page").find("input[required]").each(function(index, value) {
	$(value).prev("label").append("<span class='req'>*</span>");
});

$("#moreInfoBtn").on("click", function() {
	$("#Pg").animate({
		"top": "-100%"
	}, 1000);
});

$("div.lol-checkbox").on("click", function () {
	$(this).toggleClass('check');
});

var info = {
	"fname": "first_name",
	"lname": "last_name",
	"no": "batch",
	"sumname": "summoner_name",
	"telnum": "phone",
	"fb": "facebook"
};

$("div.page[role!='team']").find("input[role]").each(function(index, value) {
	value = $(value);
	value.attr("name", info[value.attr("role")] + "_" + value.parents("div.page").attr("role").split("player").join(""));
})

$(document).on("click", function () {
	$(".lol-caution").fadeOut(500);
});

window.onload = function() {
	function pStart(n, time, callback) {
		if (n < $("p.main-page").length) {
			$("p.main-page").eq(n).fadeIn(time, function() {
				pStart(n + 1, time, callback);
			});
		} else {
			return (callback)();
		}
	}
	pStart(0, 1000, function() {
		$("overlay.start-main-page").css({
			"display": "none"
		});
	});
}