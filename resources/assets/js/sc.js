function checkFormat(ele, e) {
	if (ele.attr("role") == "telnum") {
		if (ele.val().split()) {
			ele.prev("label").append("<span></span>");
		}
	}
}

$('form').find('input[role=steamname]').on("keydown", function(e) {
	var $this = $(this),
		length = $this.val().split("").length;

	if (length >= 4 && e.keyCode != 8) {
		return false;
	}
});

$('form').find('input[role=telnum]').on("keydown", function(e) {
	var $this = $(this),
		length = $this.val().split("").length;

	if (length >= 16 && e.keyCode != 8) {
		return false;
	}
	if (!(e.keyCode >= 48 && e.keyCode <= 57) && !(e.keyCode >= 96 && e.keyCode <= 105) && e.keyCode != 8) {
		return false;
	}
	if ((length == 3 || length == 9) && e.keyCode != 8) {
		$this.val($this.val() + " - ");
		return true;
	}
	if (e.keyCode == 8 && (length == 7 || length == 13)) {
		$this.val($this.val().split("").slice(0, length - 3).join(""));
		return true;
	}
});

$('form').find('input[role=no]').on("keydown", function(e) {
	var $this = $(this),
		length = $this.val().split("").length;

	if (length >= 3 && e.keyCode != 8) {
		return false;
	}
	if (!(e.keyCode >= 48 && e.keyCode <= 57) && !(e.keyCode >= 96 && e.keyCode <= 105) && e.keyCode != 8) {
		return false;
	}
});

$('form').find('input, textarea').on('keyup blur focus', function(e) {
	var $this = $(this),
		label = $this.prev('label');

	if (e.type === 'keyup') {
		if ($this.val() === '') {
			label.removeClass('active highlight');
		} else {
			label.addClass('active highlight');
		}
		checkFormat($this, e);
	} else if (e.type === 'blur') {
		if ($this.val() === '') {
			label.removeClass('active highlight');
		} else {
			label.removeClass('highlight');
		}
	} else if (e.type === 'focus') {

		if ($this.val() === '') {
			label.removeClass('highlight');
		} else if ($this.val() !== '') {
			label.addClass('highlight');
		}
	}
});

var INDEX = 0;

function goToPage(index, time) {
	if ($(".page").length >= index && index >= 0) {
		$("form").animate({
			"left": (index * -100) + "%"
		}, time);
		$("#lolNextBtn").attr("register", "false").text("Next");
		if ($(".page").length != index) {
			$("#lol-progress").find("div").animate({
				"width": (100 / ($(".page").length - 1) * index) + "%"
			}, time);
		} else {
			$("#lolNextBtn").attr("register", "true").text("Register");
		}
		INDEX = index;
	}
}

$("#lolNextBtn").on("click", function () {
	goToPage(INDEX + 1, 1000);
});

$("#lolBackBtn").on("click", function () {
	if ($("#lolNextBtn").attr('register') == "true") return;
	goToPage(INDEX - 1, 1000);
});