/*
 * Fonction "factory" qui retourne la fonction devant 
 * etre associee a l'evenement
 */
function messageFactory(message){
    return function(){alert(message);};
}

// Fonction pour changer la "value" d'un bouton 
function changeValue(button,text){
    // On demande d'abord la comfirmation
    reponse=confirm("mon nouveau texte sera: "+text);
    // si c'est bon, on change
    if (reponse){button.value=text;}
}

// Fonction qui initialise le comportement des boutons 
function initButtons(){
    // on recupere les "input" dans un tableau (methode DOM)
    buttons=document.getElementsByTagName("input");
    // pour chaque element du tableau
    for (var i=0;i<buttons.length;i++){
        button=buttons[i];
        // si c'est un bouton
        if (button.type=='button'){
            // on construit le message
            message="je suis le bouton "+button.id;
            message+="; mon texte est "+button.value;
            
            //on assigne le comportement "onclick"
            button.onclick=messageFactory(message);
        }
    }
    
    // on assigne anonymement la fonction au dernier bouton
    // "this" represente l'element qui appelle la fonction
    document.getElementById('b4').onclick=function(){changeValue(this,"Hello World");};
}

// Fonction initialisant le champ texte
function initText(message){
    // on recupere le champ par son identifiant (methode DOM)
    texte=document.getElementById("tt");
    // on lui attribut le message
    texte.value=message;
}

/*
 * Fonction d'initialisation, qui associe les evenements aux
 * boutons et initialise le texte.
 * Elle est executée au chargement de la page.
 */
function init() {
    initText("bonjour tout le monde!");
    initButtons();
}

/* 
 * ceci permet d'executer la fonction "init" apres le 
 * chargement de la page html
 */
window.onload=init;

