function limpa(id){
	document.getElementById(id).value= " ";
}

function zera(id){
	var s = document.getElementById(id).value;
	if(s == ""){
		document.getElementById(id).value = "0";
	}
}

function zeraTudo(){
	var m1 = document.getElementById("nm1").value;
	var nd = document.getElementById("nnd").value;
	var ni = document.getElementById("nni").value;

	if(m1 == ""){
		document.getElementById("nm1").value = "0";
	} 
	if(nd == ""){
		document.getElementById("nnd").value = "0";
	}
	if(ni == ""){
		document.getElementById("nni").value = "0";
	}		
}