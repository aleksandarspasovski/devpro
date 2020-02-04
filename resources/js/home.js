window.addEventListener('load', () => {
	// sortFeeds();
	createFeeds();
	toggleTextArea();
	allLikes();

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
			n.style.width = '22%';
			cr_post.style.width = '100%';
		} else{
			b.classList.remove('show')
			b.style.display = 'none';
			n.style.width = '100%';
			cr_post.style.width = '22%';
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
	var x = document.querySelector('#button1');
	var li_cnt = document.querySelector('#span1');

	var likes = 0;

	x.addEventListener('click', (e) => {
		var xb = e.target;
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

		// console.log(array[i]);
	}

}