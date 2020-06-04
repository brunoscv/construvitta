$(function () {
	var fileInput = document.querySelector('input[type=file]');
	var dropzone = document.querySelector('div');

	fileInput.addEventListener('change', function() {
		var files = fileInput.files;
		var names = $.map(files, function (val) { return val.name; });
		$.each(names, function (i, name) {
			$("#filename").append("<li class='list-group-item px-0'>"
									+ "<div class='row align-items-center'>"
									+	"<div class='col-auto'>"
									+		"<div class='avatar'>"
									+			"<img class='avatar-img rounded' src='../../assets/img/theme/images.png'>"
									+		"</div>"
									+	"</div>"
									+ 	"<div class='col ml--3'>"
									+		"<h4 class='mb-1'>" + name + "</h4>"
									+		"<p class='small text-muted mb-0'><strong>0.1"+ i + "</strong> MB</p>"
									+	"</div>"
									+	"<div class='col-auto'>"
									+		"<a href='#' role='button' aria-haspopup='true' aria-expanded='false'>"
									+			"<i class='fa fa-trash-alt'></i>"
									+		"</a>"
									+	"</div>"
									+ "</div>"
									+ "</li>");
			console.log(name);
		});
		// filenameContainer.innerText = fileInput.value.split('\\').pop();
	});

	fileInput.addEventListener('dragenter', function() {
		dropzone.classList.add('dragover');
	});

	fileInput.addEventListener('dragleave', function() {
		dropzone.classList.remove('dragover');
	});

	$(document).ready(function () {
		$("#cpf").mask("999.999.999-99");
		$("#data_nasc").mask("99/99/9999");
		$("#telefone_cliente").mask("(99) 9 9999-9999");
	});
});