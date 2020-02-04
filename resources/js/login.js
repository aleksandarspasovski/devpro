window.addEventListener('load', () => {
	showIcon();
});
function showIcon(){
	var select_el = document.querySelector('.display-pswd');
	var select_input = document.querySelector('[type=password]');
	select_el.addEventListener('click', (e) => {
		var e = e.target;
		if (select_input.type == 'password') {
			select_input.type = 'text';
		} else{
			select_input.type = 'password';
		}
	});
}