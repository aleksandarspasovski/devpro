window.addEventListener('load', () => {
	// sortFeeds();
	createFeeds();
	toggleTextArea();
	allLikes();
	displayImage();
	var submit = document.querySelector('#submiter');
	var empty_text = document.querySelector('.form-textarea');

	empty_text.addEventListener('keyup', (e) => {
		var cr = document.querySelector('.add-p');
		cr.innerText = e.target.value.charAt(0).toUpperCase() + e.target.value.slice(1);

	});

	submit.addEventListener('click', (e) => {
		e.preventDefault();
		var response = confirm('Are you sure?');
		if (!response) {
			return false;
		} else{
			submit.form.submit();
		}
	});

});

function toggleTextArea(){
	var b = document.querySelector('.builder');
	var n = document.querySelector('.button-builder');
	var cr_post = document.querySelector('.create-post');

	n.addEventListener('click', (e) => {
		var e = e.target;
		b.classList.toggle('show');

		if (b.classList.contains('show')) {
			b.style.display = 'block';
			n.style.width = '165px';
			cr_post.style.width = '100%';
		} else{
			b.classList.remove('show')
			b.style.display = 'none';
			n.style.width = '165px';
			cr_post.style.width = '35%';
		}
	});
}
function makeAjaxRequest(method, url){
	var xhr = new XMLHttpRequest();
		xhr.open(method, url);
		xhr.onreadystatechange = () => {
			if (xhr.readyState === 4 && xhr.status === 200) {
				// console.log(xhr.readyState);
			} else if (xhr.readyState != 4 && xhr.status != 200){
				alert('Something went wrong, try again');
			}
		}
		xhr.send();

	console.log(xhr);

}
function allLikes(x){
	var x = document.querySelectorAll('.button1');
	var li_cnt = document.querySelectorAll('.span1');

	var likes = 0;
	for (let i = 0; i < x.length; i++) {
		// alert(i);
		x[i].addEventListener('click', (e) => {
			// var xb = e.target;
			console.log(i);
			e.preventDefault;
			
			if (li_cnt.value >= 0) {
				li_cnt.value = ++likes;
				if (li_cnt.value == true) {
					li_cnt.innerText = li_cnt.value;
					x.disabled = true;
					var it = parseInt(li_cnt.value);
					// session('liked'); ?????
					makeAjaxRequest('GET', '/posts/likes/'+it+'');
				}
			}

		});	
	}
}
function createFeeds(){
	var create_feed_dropdown = document.querySelector('.u-sort');
	var create_dropdown = document.querySelector('.sort-ab');

	create_dropdown.addEventListener('click', (e) => {
		var	event = e.target;
		create_feed_dropdown.classList.toggle('sort-ab-show');
	});

}
// ------------this function will automatically create section bar, it is disabled for now---------------
function sortFeeds(create_feed){
	var create_feed = document.querySelector('.sort-feeds');

	var array = ['Sort by', 'Newer', 'Older'];

	var create_section = document.createElement('SELECT');
	create_feed.appendChild(create_section);


	for (var i = 0; i < array.length; i++) {

		var create_options = document.createElement('OPTION');
		create_options.innerText = array[i];
		create_options.value = array[i];
		create_options.name = array[i];
		create_section.appendChild(create_options);
	}

}
function displayImage() {
	var file = document.querySelector('#file');
	// console.log(file);
	file.addEventListener('change', () => {
		var file_el = file.files[0];
		if (file_el) {
			var fileReader = new FileReader();
			// console.log(fileReader);
			fileReader.addEventListener('load', (e) => {
				document.querySelector('#preview').setAttribute('src', e.target.result);
			});

			fileReader.readAsDataURL(file_el);
		}
	});
}