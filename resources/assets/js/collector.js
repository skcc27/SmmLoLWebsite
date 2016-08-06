function showCaution(ele) {
    console.log('caution');
	var index = ["team", "player1", "player2", "player3", "player4", "player5", "player6", "rule"];
	goToPage(index.indexOf($(ele).parents(".page").attr("role")), 500);
    setTimeout(function () {
        $("#requiredCaution").fadeIn(500)
    }, 1000);
}

function check() {
    var inputreq = $("input[required]");
	for (var i = 0; i < inputreq.length; i++) {
		var value = inputreq.eq(i);
		if ($(value).val() === "") {
			showCaution(value);
            return false;
		}
	}
    var inputtel = $("input[role='telnum'][required]");
    for (var i = 0; i < inputtel.length; i++) {
        var value = inputtel.eq(i);
        if ($(value).val().length < 16) {
			showCaution(value);
            return false;
		}
	}
    return true;
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
            $.notify({
                // optionsicon: '
                glyphicon: 'glyphicon glyphicon-warning-sign',
                title: '<bold>Submission status</bold>',
                message: msg.message
            }, {
                // settings
                type: msg.status,
                allow_dismiss: true,
                placement: {
                    from: "bottom",
                    align: "right"
                }
            });
            if (msg.status == 'success') {
                ClosePopup('.lol-pop-up', 800);
                $('.lol-form').reset();
            }
            //alert('Submission result: ' + msg.message);
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
        else {

        }
	}
});
