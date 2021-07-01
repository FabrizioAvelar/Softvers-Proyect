// JavaScript Document
const element = document.getElementById('asidepropieties')

function profile(username){
	element.removeChild(element.lastChild)
	element.insertAdjacentHTML('beforeend', '<ul id="elements"></ul>')
	const elementchild = document.getElementById('elements')
	elementchild.insertAdjacentHTML('beforeend', '<li id="liElements">\
				<form method="post" id="changeUsername">\
					<h2 class="h2Elements">CAMBIAR NOMBRE DE USUARIO</h2><br>\
					<label for="username" id="lblUsername" class="lblElements">USUARIO</label><br>\
					<input type="text" id="username" class="txbElements" placeholder="' + username + '"><br><br>\
					<input type="button" id="subtmitUsername" class="smtElements" value="CAMBIAR"><br><br><br><br id="divisionUsername">\
				</form>\
			</li>\
			<hr color="#70b62c">\
			<li id="liElements">\
				<form method="post" id="changePassword">\
					<h2 class="h2Elements">CAMBIAR CONTRASEÑA</h2><br>\
					<label for="password" id="lblPassword" class="lblElements">CONTRASEÑA ACTUAL</label><br>\
					<input type="password" id="password" class="txbElements"><br><br>\
					<label for="newPassword" id="lblNewPassword" class="lblElements">NUEVA CONTRASEÑA</label><br>\
					<input type="password" id="newPassword" class="txbElements"><br><br>\
					<label for="rNewPassword" id="lblRNewPassword" class="lblElements">REPETIR NUEVA CONTRASEÑA</label><br>\
					<input type="password" id="rNewPassword" class="txbElements"><br><br>\
					<input type="button" id="subtmitPassword" class="smtElements" value="CAMBIAR"><br><br><br><br id="divisionPassword">\
				</form>\
			</li>')
}

function verEmail(verEmails){
	var strings;
	if(verEmails == false){
		strings = '<br><br><h2 class="h2Elements">EL E-MAIL NO ESTA VERIFICADO</h2><br><input type="button" id="subtmitPassword" class="smtElements" value="VERIFICAR" onClick="Verify()">'
	}else{
		strings = '<br><br><h2 class="h2Elements">EL E-MAIL ESTA VERIFICADO</h2><br>'
	}
	element.removeChild(element.lastChild)
	element.insertAdjacentHTML('beforeend', '<ul id="elements"></ul>')
	const elementchild = document.getElementById('elements')
	elementchild.insertAdjacentHTML('beforeend', '<li id="liElements">\
				<form method="post" id="changeUsername">\
					' + strings + '\
				</form>\
			</li>')
}

function Verify(){
	location.href ="../forms/verifyEmailForm.php";
}