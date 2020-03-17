window.addEventListener('load', () => {

	showAndHideSpinner('.text-center', true);
	 setTimeout(() => {
		makeAjaxRequest()
			.then((data) => {
				showAndHideSpinner('.text-center', false);
				makeElements(data);
			});
	 }, 1000);
});

function makeAjaxRequest(method, url){
	return new Promise((resolve, reject) => {
		var xhr = new XMLHttpRequest();
		xhr.open(method, url);
		var ses = document.querySelector('[type="hidden"]').value;
		var xhr = new XMLHttpRequest();
			xhr.open('get', '/about/listPeople/'+ses+'');
			xhr.onreadystatechange = () => {
				if (xhr.readyState === 4 && xhr.status === 200) {
					var response = JSON.parse(xhr.responseText);
					resolve(response);
				}
			}
		xhr.send();
	});
}
function makeElements(data){
    
	document.querySelector('.inner-card-wrapper').innerHTML = '';

	for (var i = 0; i < data.length; i++) {
		var cards = `
			<div class="cards">
			  <div class="card-body">
			  	<img src="picture/default-avatar.png"  alt="...">
			    <h5 class="card-title"><a href="${data[i].quote}">Job description or positions, frontend developer</a></h5>
			    <h6 class="card-subtitle mb-2 text-muted">${data[i].first_name} ${data[i].last_name}</h6>
			    <p class="card-text card-location"><a href="#">Location</a></p>
			    <p class="card-text card-salary">Salary $</p>
			    <p class="card-text card-time">${data[i].created_at}</p>
			    <!---- <a href="#" class="card-link">Another link</a> ---->
			  </div>
			  <div class="added-on"></div>
			</div>
		`;
		document.querySelector('.inner-card-wrapper').innerHTML += cards;
	}
}

function showAndHideSpinner(selector, display){
	var el = document.querySelector(selector);
	var spin = document.querySelector('.spinner');

	if (display){
		el.style.display = 'block';
		spin.style.backgroundColor = '#00000021';
	} else {
		el.style.display = 'none';
		spin.style.backgroundColor = '#fff';
	}
}
