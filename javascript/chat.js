
const form = document.querySelector(".typing-area"),

inputField = form.querySelector(".input-field"),

sendBtn = form.querySelector("button"),

chatBox = document.querySelector(".chat-box");



form.onsubmit= (e)=>{
	// Prevents the form from submitting
	e.preventDefault(); 

}


sendBtn.onclick = ()=>{

	// Ajax Starts Here
    // Creating XML object
	let xhr = new XMLHttpRequest(); 

	xhr.open("POST", "php/insert_chat.php", true);

	xhr.onload = ()=>{

		if(xhr.readyState === XMLHttpRequest.DONE){

			if (xhr.status === 200) {
				let data = xhr.response;
                
                // make the inputField empty when value is submitted

				inputField.value = "";


				scrolltoBottom() ;


			}
		}

	}

	// Sending the form data through Ajax to Php
	// Creatng new form data object

	let formData = new FormData(form);

    // Sending the form data to php
	xhr.send(formData);
}


chatBox.onmouseenter = ()=>{

	chatBox.classList.add("active");
}


chatBox.onmouseleave = ()=>{

	chatBox.classList.remove("active");
}


// This function runs after every 500ms
setInterval(() => {

	// Ajax Starts Here
    // Creating XML object
	let xhr = new XMLHttpRequest(); 

	xhr.open("POST", "php/get-chat.php", true);

	xhr.onload = ()=>{

		if(xhr.readyState === XMLHttpRequest.DONE){

			if (xhr.status === 200) {
				let data = xhr.response;

                chatBox.innerHTML = data;

               if (!chatBox.classList.contains("active")) {

               	scrolltoBottom();

               }


			}
		}

	}

		let formData = new FormData(form);

xhr.send(formData);
}, 500);


function scrolltoBottom() {
	chatBox.scrollTop = chatBox.scrollHeight;
}

