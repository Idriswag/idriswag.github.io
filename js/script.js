$(document).ready(() => {
	
	$('a').on('click', (e) => {

		var currentTarget = e.currentTarget;
		var href = currentTarget.getAttribute('href');
		var section_id = href.replace('#', '');

		var section = document.getElementById(section_id !== '' ? section_id : 'home');

		if(section){
			$('#products').css('marginBottom', '0px');
			$('#about').css('marginBottom', '0px');
			$('#contact').css('marginBottom', '0px');
			section.style.marginBottom = section_id === 'products' ? '50px' : '30px';
		}
		
	})
})