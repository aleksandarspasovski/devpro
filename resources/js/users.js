window.addEventListener('load', () => {
	var opt = document.querySelector('#profile-options');
	opt.addEventListener('click', (e) => {
		e.preventDefault();
		console.log(e.target);
		var options = document.querySelector('.profile-options');
		if (options.classList.contains('opt-show')) {
			options.classList.remove('opt-show');
			options.removeAttribute("style");
		} else {
			options.classList.add('opt-show');
			// options.style.transitionDuration = '1s'; 
		}

	});
});
