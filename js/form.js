 function setDate(){
 	var ladate = new Date()
 	document.form1.date.value = ladate.getDate() + "/" + (ladate.getMonth()+1)  + "/" + ladate.getFullYear()
 }

 function setDepartement(){
 	var departement = document.form1.listDept.value
 	document.form1.dept.value = departement
 }

 function checkSubmit(){
 	if (document.form1.nom.value == ""){
 		window.alert("Veuillez remplir le champ Nom");
 		return false
 	}
 	else if (document.form1.prenom.value == ""){
 		window.alert("Veuillez remplir le champ Prenom");
 		return false
 	}

 }
 