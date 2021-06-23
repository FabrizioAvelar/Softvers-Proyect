// JavaScript Document
var count = 0
const element = document.getElementById('asidepropieties')

function players(){
	element.removeChild(element.lastChild)
	element.insertAdjacentHTML('beforeend', '<ul id="setpropieties"></ul>')
	const elementchild = document.getElementById('setpropieties')
	elementchild.insertAdjacentHTML('beforeend', '<input type="button" id="listpropieties" value="simons">')
}

function server(){
	element.removeChild(element.lastChild)
	element.insertAdjacentHTML('beforeend', '<ul id="setpropieties"></ul>')
	const elementchild = document.getElementById('setpropieties')
	elementchild.insertAdjacentHTML('beforeend', '<input type="button" id="listpropieties" value="prendete sesamo">')
}


/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("ulnav").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

