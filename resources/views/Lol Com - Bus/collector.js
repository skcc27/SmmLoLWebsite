function check() {
	var inputreq = $("input[required][type!=checkbox]")
	for (var i = 0; i < inputreq.length; i++) {
		var index = ["team", "player1", "player2", "player3", "player4", "player5", "player6", "rule"],
			value = inputreq.eq(i);
		if ($(value).val() === "") {
			goToPage(index.indexOf($(value).parents(".page").attr("role")), 500);
			setTimeout(function() {
				var x = $(value).offset().left,
					y = $(value).offset().top
				$("#requiredCaution").css({
					"top": y,
					"left": x
				}).fadeIn(500);
			},600);
			break;
		}
	}
}