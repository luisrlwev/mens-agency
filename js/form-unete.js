$("#contactUnete").validator().on("submit", function(event) {
	if (event.isDefaultPrevented()) {
		// handle the invalid form...
		formErrorUnete();
        submitMSGUnete(false, "Por favor llene todos los campos requeridos");
    } else {
    	// everything looks good!
        event.preventDefault();
        submitFormUnete();
    }
});

function submitFormUnete() {
	// Initiate Variables With Form Content
	var name = $("#name").val();
    var lastname = $("#lastname").val();
	var tel = $("#tel").val();
	var email = $("#email").val();
    var direction = $("#direction").val();
    var namehome = $("#namehome").val();
    var city = $("#city").val();
    var cp = $("#cp").val();
    var country = $("#country").val();
    var gender = $("#gender").val();
    var day = $("#day").val();
    var month = $("#month").val();
    var year = $("#year").val();
    var dresssize = $("#dresssize").val();
    var height = $("#height").val();
    var weight = $("#weight").val();
    var eyes = $("#eyes").val();
    var hair = $("#hair").val();
    var shoesize = $("#shoesize").val();
    var instagram = $("#instagram").val();
    var facebook = $("#facebook").val();
    var twitter = $("#twitter").val();
    var youtube = $("#youtube").val();
    var website = $("#website").val();
    var spotlight = $("#spotlight").val();
    var image_1 = $("#image_1").val();
    var image_2 = $("#image_2").val();
    var image_3 = $("#image_3").val();
    var image_4 = $("#image_4").val();
	var message = $("#message").val();

    $.ajax({
    	type: "POST",
    	url: "php/form-unete.php",
    	data: "name=" + name + "&lastname=" + lastname + "&tel=" + tel + "&email=" + email + "&direction=" + direction + "&namehome=" + namehome + "&city=" + city + "&cp=" + cp + "&country=" + country + "&gender=" + gender + "&day=" + day + "&month=" + month + "&year=" + year + "&dresssize=" + dresssize + "&height=" + height + "&weight=" + weight + "&eyes=" + eyes + "&hair=" + hair + "&shoesize=" + shoesize + "&instagram=" + instagram + "&facebook=" + facebook + "&twitter=" + twitter + "&youtube=" + youtube + "&website=" + website + "&spotlight=" + spotlight + "&image_1=" + image_1 + "&image_2=" + image_2 + "&image_3=" + image_3 + "&image_4=" + image_4 + "&message=" + message,
    	success: function(text) {
    		if (text == "success") {
    			formSuccessUnete();
    		} else {
    			formErrorUnete();
                submitMSGUnete(false, text);
            }
        }
    });
}

function formSuccessUnete() {
	$("#contactUnete");
    submitMSGUnete(true, "¡Mensaje Enviado!");
    document.getElementById("contactUnete").reset();
}

function formErrorUnete() {
	$("#contactUnete").addClass('animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
		$(this).removeClass();
	});
}

function submitMSGUnete(valid, msg) {
	if (valid) {
        var msgClasses = "h5 text-center fadeIn animated text-success";
	} else {
		var msgClasses = "h5 text-center text-danger";
	} $("#msgSubmitUnete").removeClass().addClass(msgClasses).text(msg);
}