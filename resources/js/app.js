require('./bootstrap');

const dropArea = document.querySelector(".uploader"),
	dragText = dropArea.querySelector("h3"),
	button = dropArea.querySelector(".btn"),
	icon = dropArea.querySelector("#icon"),
	input = dropArea.querySelector("#file-input");
	
let file;

input.addEventListener("change", function () {
	file = this.files[0];
	dropArea.style.borderStyle="solid";
	showFile();
});

dropArea.addEventListener("dragover", function (event) {
	event.preventDefault();
	dropArea.style.borderStyle="solid";
	dragText.innerHTML = "Release to Upload File";
	icon.classList.remove("fa-upload");
	icon.classList.add("fa-download");
});

dropArea.addEventListener("dragleave", function (event) {
	event.preventDefault();
	dropArea.style.border = '4px dashed #2F80ECff';
	dragText.innerHTML = "Drag and drop a images or click here";
	icon.classList.add("fa-upload");
	icon.classList.remove("fa-download");
});

dropArea.addEventListener("drop", function (event) {
	dropArea.style.borderStyle="solid";
	dragText.innerHTML = "file is dropped";
	icon.classList.remove("fa-upload");
	icon.classList.add("fa-download");
	file = event.dataTransfer.files[0];
	showFile();
});

function showFile() {
	let filetype = file.type;

	let js = [
		"text/javascript",
		"application/x-javascript",
		"application/javascript"
	];

	let img = [
		"image/png",
		"image/jpeg"
	];

	if (filetype == "text/css") {
		let fileReader = new FileReader();
		fileReader.onload = () => {
			// let imgTag = `<img src="../img/css-banner.jpg" alt="css file">`;
			$(".uploader").append(imgTag);
		}
		fileReader.readAsDataURL(file);
	}

	if (js.includes(filetype)) {
		let fileReader = new FileReader();
		fileReader.onload = () => {
			// let imgTag = `<img src="../img/js-banner.png" alt="js file">`;
			$(".uploader").append(imgTag);
		}
		fileReader.readAsDataURL(file);
	}

	if (img.includes(filetype)) {
		let fileReader = new FileReader();
		fileReader.onload = () => {
			let fileURL = fileReader.result;
			// let imgTag = `<img src="${fileURL}" alt="user uploaded file">`;
			$(".uploader").append(imgTag);
		}
		fileReader.readAsDataURL(file);
	}
}
