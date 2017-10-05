function det(){
	var s11 = parseInt(document.querySelector("#s11").value);
	var s12 = parseInt(document.querySelector("#s12").value);
	var s13 = parseInt(document.querySelector("#s13").value);
	var s21 = parseInt(document.querySelector("#s21").value);
	var s22 = parseInt(document.querySelector("#s22").value);
	var s23 = parseInt(document.querySelector("#s23").value);
	var s31 = parseInt(document.querySelector("#s31").value);
	var s32 = parseInt(document.querySelector("#s32").value);
	var s33 = parseInt(document.querySelector("#s33").value);

	var det = s11 * s22 * s33 + s31 * s12 * s23 + s21 * s32 * s13 -
			s31 * s22 * s13 - s33 * s12 * s21 - s11 * s32 * s23;

	document.querySelector("#result").innerHTML = det;

}

document.querySelector("#determinant").addEventListener("click",det);

