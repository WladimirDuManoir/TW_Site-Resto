
 function setDate() {
 	var ladate = new Date()
 	document.form1.date.value = ladate.getDate() + "/" + (ladate.getMonth()+1)  + "/" + ladate.getFullYear()
 }

 function setDepartement() {
 	var departement = document.form1.listDept.value
 	document.form1.dept.value = departement
 }

 function checkSubmit() {
 	if (document.form1.nom.value == "") {
 		window.alert("Veuillez remplir le champ Nom");
 		return false
 	}
 	else if (document.form1.prenom.value == "") {
 		window.alert("Veuillez remplir le champ Prenom");
 		return false
 	}
 }

function checkFormElement() {	
	// Element of get off focus (blur)
	var elem = document.getElementById("nom");
	// Check element 
	if (elem.value == "") {
		// if wrong add note + wrong-entry class
		if (!hasClass(elem,"wrong-entry")) {
			elem.className += " wrong-entry ";
			//elem.classList.add(" wrong-entry ");
		}
	}else {
		if (!hasClass(elem," wrong-entry ")) { 
			//elem.className -= " wrong-entry ";
			elem.className = elem.className.replace(/\bwrong-entry\b/,'');
		}
	}
}

function hasClass(element, cls) {
    return (' ' + element.className + ' ').indexOf(' ' + cls + ' ') > -1;
}

 