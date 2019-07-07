var menu = document.getElementById('menu');

var button = document.getElementById('button')

button.onclick=function(){
	if(menu.style.display == "none"){
		menu.style.display = "block"
		console.log(1)
	} else {
		menu.style.display = "none"
	}
}