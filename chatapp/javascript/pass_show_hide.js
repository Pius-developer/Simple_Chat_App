const passwordfield = document.querySelector(".form  input[type='password'] "),
toggleBtn = document.querySelector(".form .field i");

toggleBtn.onclick = ()=>{

	// alert();
	if (passwordfield.type== "password") {
		passwordfield.type = "text";

		toggleBtn.classList.add("active");

	}else{
		passwordfield.type = "password";

		toggleBtn.classList.remove("active");
	}

	
}


