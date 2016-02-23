function checkForm(formulaire) {
    checkName(formulaire.nom);
    checkFirstname(formulaire.prenom);
    checkMail(formulaire.mail);
    checkDepNum(formulaire.numDep);
    //formulaire.submit();
}

function initDate(field) {
    var date=new Date();
    var str="";
    str=date.getDate() + '/' + (1+date.getMonth()) +'/' + date.getFullYear();
    field.value=str;
}

function checkName(field) {
    if ((field.value =='')||(field.value == undefined) ) {
        window.alert('Vous devez donner un nom');
    }
}

function checkFirstname(field) {
    if ((field.value =='')||(field.value == undefined) ) {
        window.alert('Vous devez donner un prénom');
    }
}

function checkMail(field) {
    re=new RegExp('[^@]+@.*\.[^\.]+');
    if ( ! field.value.match(re)) {
        window.alert("Votre adresse mail n'a pas une forme valide");
    }
}

function checkDepNum(field) {
    if ((field.value =='')||(field.value == undefined) ) {
        window.alert('Vous devez choisir un département');
    }
}
function updateDepNum (selectfield,numberfield) {
    numberfield.value=selectfield.value;
}


