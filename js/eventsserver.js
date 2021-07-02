// JavaScript Document
var count = 0
const element = document.getElementById("asidepropieties")

function players(){
	element.removeChild(element.lastChild)
	element.insertAdjacentHTML('beforeend', '<ul id="setpropieties"></ul>')
	var elementchild = document.getElementById('setpropieties')
	elementchild.insertAdjacentHTML('beforeend', '<input type="button" id="listpropieties" value="simons">')
}

function selectServer(expires){
	while(element.lastChild != null){
		element.removeChild(element.lastChild)
	}
	var date = new Date();
	var dateStr =date.getFullYear() + "-" + ("00" + (date.getMonth() + 1)).slice(-2) + "-" +("00" +date.getDate()).slice(-2) + " " +("00" + date.getHours()).slice(-2) + ":" +("00" + date.getMinutes()).slice(-2) + ":" +("00" + date.getSeconds()).slice(-2)
	
	if(expires > dateStr){
		element.insertAdjacentHTML('beforeend', '<ul id="select-propieties"></ul>')
		var elementchilds = document.getElementById('select-propieties')
		elementchilds.insertAdjacentHTML('beforeend', '<input type="button" id="listpropieties" value="SERVIDOR" onClick="server()">\
			<input type="button" id="listpropieties" value="CONFIGURACION" onClick="">\
			<input type="button" id="listpropieties" value="JUGADORES" onClick="players()">\
			<input type="button" id="listpropieties" value="CONSOLA">\
			<input type="button" id="listpropieties" value="VERSION">\
			<input type="button" id="listpropieties" value="ARCHIVOS">\
			<input type="button" id="listpropieties" value="MUNDOS">')
		
		element.insertAdjacentHTML('beforeend', '<ul id="elements"></ul>')
		var elementchilds = document.getElementById('elements')
		elementchilds.insertAdjacentHTML('beforeend', '<div id="divPlayers" class="divElements">\
										 <label for="nbrPlayers" class="lblElements">NUMERO DE JUGADORES</label>\
										<input type="number" class="nbrElements" id="nbrPlayers">\
			</div>\
			<div id="divWhiteList" class="divElements">\
				<label for="cbxWhiteList" class="lblElements">LISTA BLANCA</label>\
				<input type="checkbox" class="cbxElements" id="cbxWhiteList">\
				<label for="cbxWhiteList" class="lblCbx"></label>\
			</div>\
			<div id="divCommand" class="divElements">\
				<label for="cbxCommand" class="lblElements">BLOQUES DE COMANDO</label>\
				<input type="checkbox" class="cbxElements" id="cbxCommand">\
				<label for="cbxCommand" class="lblCbx"></label>\
			</div>\
			<div id="divSpawnMonsters" class="divElements">\
				<label for="cbxSpawnMonsters" class="lblElements">APARICION DE MOUNSTROS</label>\
				<input type="checkbox" class="cbxElements" id="cbxSpawnMonsters">\
				<label for="cbxSpawnMonsters" class="lblCbx"></label>\
			</div>\
			<div id="divForceGame" class="divElements">\
				<label for="cbxForceGame" class="lblElements">FORZAR MODO DE JUEGO</label>\
				<input type="checkbox" class="cbxElements" id="cbxForceGame">\
				<label for="cbxForceGame" class="lblCbx"></label>\
			</div>\
			<div id="divCracked" class="divElements">\
				<label for="cbxCracked" class="lblElements">CRAQUEADO</label>\
				<input type="checkbox" class="cbxElements" id="cbxCracked">\
				<label for="cbxCracked" class="lblCbx"></label>\
			</div>\
			<div id="divFly" class="divElements">\
				<label for="cbxFly" class="lblElements">VOLAR</label>\
				<input type="checkbox" class="cbxElements" id="cbxFly">\
				<label for="cbxFly" class="lblCbx"></label>\
			</div>')
		
		element.insertAdjacentHTML('beforeend', '<ul id="elements2"></ul>')
		var elementchilds = document.getElementById('elements2')
		elementchilds.insertAdjacentHTML('beforeend', '<div id="divGameMode" class="divElements">\
				<label for="sltGameMode" class="lblElements">MODO DE JUEGO</label>\
				<select id="sltGameMode" class="sltElements">\
					<option>SUPERVIVENCIA</option>\
					<option>CREATIVO</option>\
					<option>AVENTURA</option>\
					<option>ESPECTADOR</option>\
				</select>\
			</div>\
			<div id="divDifficulty" class="divElements">\
				<label for="sltDifficulty" class="lblElements">DIFICULTAD</label>\
				<select id="sltDifficulty" class="sltElements">\
					<option>PACIFICO</option>\
					<option>FACIL</option>\
					<option>NORMAL</option>\
					<option>DIFICIL</option>\
				</select>\
			</div>\
			<div id="divPVP" class="divElements">\
				<label for="cbxPVP" class="lblElements">PVP</label>\
				<input type="checkbox" class="cbxElements" id="cbxPVP">\
				<label for="cbxPVP" class="lblCbx"></label>\
			</div>\
			<div id="divAnimals" class="divElements">\
				<label for="cbxAnimals" class="lblElements">ANIMALES</label>\
				<input type="checkbox" class="cbxElements" id="cbxAnimals">\
				<label for="cbxAnimals" class="lblCbx"></label>\
			</div>\
			<div id="divNether" class="divElements">\
				<label for="cbxNether" class="lblElements">NETHER</label>\
				<input type="checkbox" class="cbxElements" id="cbxNether">\
				<label for="cbxNether" class="lblCbx"></label>\
			</div>\
			<div id="divNPC" class="divElements">\
				<label for="cbxNPC" class="lblElements">ALDEANOS</label>\
				<input type="checkbox" class="cbxElements" id="cbxNPC">\
				<label for="cbxNPC" class="lblCbx"></label>\
			</div>\
			<div id="divSpawn" class="divElements">\
				<label for="nbrSpawn" class="lblElements">PROTECCION DE SPAWN</label>\
				<input type="number" class="nbrElements" id="nbrSpawn">\
			</div>')
		
	}else{
		element.insertAdjacentHTML('beforeend', '<h1 id="expiresMessage">TU SERVICIO ESTA SUSPENDIDO, CONTACTA TU SOPORTE</h1>')
	}
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



