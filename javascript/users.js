
const searchBar = document.querySelector(".users .search input"),

searchButton = document.querySelector(".users .search button"),

usersList = document.querySelector(".users .users-list");

searchButton.onclick = ()=>{

	searchBar.classList.toggle("active");

	searchBar.focus();

	searchButton.classList.toggle("active");

	searchBar.value = "";
}


searchBar.onkeyup = () =>{

	let searchTerm = searchBar.value;

	if (searchTerm != "") {

		searchBar.classList.add("active");

	}else{

		searchBar.classList.remove("active");
	}

	// Ajax Starts Here
    // Creating XML object
	let xhr = new XMLHttpRequest(); 

	xhr.open("POST", "php/search.php", true);

	xhr.onload = ()=>{

		if(xhr.readyState === XMLHttpRequest.DONE){

			if (xhr.status === 200) {
				let data = xhr.response;


				usersList.innerHTML = data;

				// console.log(data);

				// if (data == "success") {

				// 	location.href ="users.php";

				// }else{


				// 	errorText.textContent = data;
				// 	errorText.style.display = "block";


				// }
			}
		}

	}

xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xhr.send("searchTerm=" + searchTerm);
}

// This function runs after every 500ms
setInterval(() => {

	// Ajax Starts Here
    // Creating XML object
	let xhr = new XMLHttpRequest(); 

	xhr.open("GET", "php/users.php", true);

	xhr.onload = ()=>{

		if(xhr.readyState === XMLHttpRequest.DONE){

			if (xhr.status === 200) {
				let data = xhr.response;

              // if active is not contained in searchBar

				if (!searchBar.classList.contains("active")) {	

				  usersList.innerHTML = data;
				}


				// console.log(data);

				// if (data == "success") {

				// 	location.href ="users.php";

				// }else{


				// 	errorText.textContent = data;
				// 	errorText.style.display = "block";


				// }
			}
		}

	}

xhr.send();
}, 500);

