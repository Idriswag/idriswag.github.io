function sendMessage(form) {

	var data = new FormData(form);
	data.append('ajax', true);

	$.ajax({
		url: 'send_message.php',
		data,
		type: 'POST',
		contentType: false,
		processData: false,

		success: response => {

			try{

				var res = JSON.parse(response);
				alert(res.message);

			}

			catch (error){
				alert("Une erreur inconnue est survenue !");
				console.error(error)
			}
		}
	})

	return false
}