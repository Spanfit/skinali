var menu = document.getElementById('menu');

var button = document.getElementById('button').onclick = function a(){
	if(menu.style.display == "none"){
		menu.style.display = 'block'
		menu.style.transition = '1s'
		menu.style.transform = 'translateY(0px)'
	}else{
		menu.style.display = "none"
	}
}
