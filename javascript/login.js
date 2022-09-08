const form = document.querySelector(".Login form"),
continueBtn = form.querySelector(".button input"),
errorText = form.querySelector(".error-txt");


form.onsubmit= (e)=>{

	// Prevents the form from submitting
	e.preventDefault(); 

}

continueBtn.onclick = ()=>{

	// console.log("Hello World");

	// Ajax Starts Here
    // Creating XML object
	let xhr = new XMLHttpRequest(); 

	xhr.open("POST", "php/login.php", true);

	xhr.onload = ()=>{

		if(xhr.readyState === XMLHttpRequest.DONE){

			if (xhr.status === 200) {
				let data = xhr.response;

				// console.log(data);

				if (data == "success") {

					location.href ="users.php";

				}else{


					errorText.textContent = data;
					errorText.style.display = "block";


				}
			}
		}

	}

	// Sending the form data through Ajax to Php
	// Creatng new form data object

	let formData = new FormData(form);

      // Sending the form data to php
	xhr.send(formData);
} 