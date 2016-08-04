function showCaution(ele) {
    console.log('caution');
	var index = ["team", "player1", "player2", "player3", "player4", "player5", "player6", "rule"];
	goToPage(index.indexOf($(ele).parents(".page").attr("role")), 500);
	setTimeout(function() {
		var x = $(ele).offset().left,
			y = $(ele).offset().top
		$("#requiredCaution").css({
			"top": y,
			"left": x
		}).fadeIn(500);
	}, 600);
}

function check() {
	var inputreq = $("input[required][type!=checkbox]"),
	pass = true;
	for (var i = 0; i < inputreq.length; i++) {
		var value = inputreq.eq(i);
		if ($(value).val() === "") {
			showCaution(value);
			pass = false;
			break;
		}
	}
	var inputtel = $("input[role='telnum'][type!=checkbox]");
	for (var i = 0; i < inputreq.length; i++) {
		var value = inputreq.eq(i);
		if ($(value).val().split("").length < 16) {
			showCaution(value);
			pass = false;
			break;
		}
	}
	return pass;
}

$("#lolNextBtn").on("click", function () {
    if ($("#lolNextBtn").attr('register') == 'false') return;
    console.log('Clicked');
    if ($("#ruleAccContainer").find("div").hasClass('check')) {
        console.log('Trying to check');
        //if(check()) {
        console.log('Success!');
			$("#registerForm").find("form").submit();
        //}
	}
});