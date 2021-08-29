var info = JSON.parse(array_info);
var cycles = array_cycles;

var check_user = false;
var check_password = false;

let form = document.getElementById("in");


form.addEventListener("submit", ()=>{

	let nick = document.getElementById("nick").value;
	let passwd = document.getElementById("passwd").value;

	for(var n = 0; n < cycles; n++){
		let user = info[n][1];
		console.log(user);
		if(nick == user){
			check_user = true;
			break;
		} else {
			console.log("usuario no encontrado");
		}
	}

	for(var p = 0; p < cycles; p++){
		let password = info[p][2];
		console.log(password);
		if(password == passwd){
			check_password = true;
			break;
		} else {
			console.log("contraseña no encontrada");
		}
	}

	if (check_user == true && check_password == true) {
		window.location.href = "../welcome.php";
	} else {
		alert("usuario o contraseña erroneos");
	}
});