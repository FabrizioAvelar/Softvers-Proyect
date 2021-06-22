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

