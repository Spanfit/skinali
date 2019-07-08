var menu = document.getElementById('menu');
var button = document.getElementById('button')

button.onclick=function(){
	if(menu.style.transform == "translateY(-200px)"){
		menu.style.transform = "translateY(0px)"
		menu.style.margin = "0px"
		menu.style.transition = "0.2s"
	} else {
		menu.style.transform = "translateY(-200px)"
	}
}

$(window).load(function () {
	$(".before-after").twentytwenty({
		before_label: 'Без скинали',
		after_label: 'Со скинали',
	});
	$('.before-slider').slick({
		draggable: false,
		dots: true,
		dotsClass: 'before-slider__dots',
		prevArrow: $('.arrow-left'),
		nextArrow: $('.arrow-right')
	});

	$('.select').on('click', function(){
		$('.select__dropdown').toggleClass('select__dropdown_open');
	});
	$('.select__option').on('click', function(){
		var value = $(this).attr('data-value');
		$('#select-type').val(value);
		$('.select_checked').text(value);
		$('select__dropdown').toggleClass('select__dropdown_open')
	})
});

