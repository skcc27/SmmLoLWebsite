function showCaution(ele) {
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

$("#nextBtn[register='true']").on("click", function() {
	if($("#ruleAccContainer > div.checkbox").hasClass('check')) {
		if(check()) {
			$("#registerForm").find("form").submit();
		}
	}
});