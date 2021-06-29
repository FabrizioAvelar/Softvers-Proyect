// JavaScript Document

function Avers(){
	var aver = document.getElementById("name")
	var elements = document.getElementsByClassName("elements")
	var names = aver.value
	aver.remove()
	elements.insertAdjacentHTML('afterbegin', '<label id="name">okis</label>')
}
	