$('form').find('input, textarea').on('keyup blur focus', function(e) {
	var $this = $(this),
		label = $this.prev('label');

	if (e.type === 'keyup') {
		if ($this.val() === '') {
			label.removeClass('active highlight');
		} else {
			label.addClass('active highlight');
		}
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
		$("#nextBtn").text("Next");
		if ($(".page").length != index) {
			$("#progress").find("div").animate({
				"width": (100 / ($(".page").length - 1) * index) + "%"
			}, time);
		} else {
			$("#nextBtn").text("Register");
		}
		INDEX = index;
	}
}

$("#nextBtn").on("click", function() {
	goToPage(INDEX + 1, 1000);
});

$("#backBtn").on("click", function() {
	goToPage(INDEX - 1, 1000);
});