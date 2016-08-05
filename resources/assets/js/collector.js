function showCaution(ele) {
    console.log('caution');
    console.log('Data: ' + ele);
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
    for (var i = 0; i < inputtel.length; i++) {
        var value = inputtel.eq(i);
        if ($(value).val().length < 16) {
			showCaution(value);
			pass = false;
			break;
		}
	}
	return pass;
}

function send_data(data) {
    /*var data_array = data.split("&"),
	data_json = {};
	for(var i = 0; i < data_array.length; i++) {
		data_json[data_array[i].split("=")[0]] = data_array[i].split("=")[1];
     }*/
	$.ajax({
		type: "POST",
        url: '/team/register',
        data: data,
        success: function (msg) {
            alert('Submission result: ' + msg.message);
		}
	});
}

$("#lolNextBtn").on("click", function () {
    if ($("#lolNextBtn").attr('register') == 'false') return;
    console.log('Clicked');
    if ($("#ruleAccContainer").find("div").hasClass('check')) {
        console.log('Trying to check');
        if(check()) {
            console.log('Success!');
			send_data($("#registerForm").find("form").serialize());
        }
	}
});
