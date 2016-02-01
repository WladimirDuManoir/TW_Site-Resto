var defaultColor = document.bgColor;

// Premiere solution: avec un switch
function changeColor1(color) { 
    switch(color) {
        case 0: // rouge
            document.bgColor='#FF0000'; break;
        case 1: // orange
            document.bgColor='#FF8000'; break;
        case 2: // jaune
            document.bgColor='#FFFF00'; break;
        case 3: // vert
            document.bgColor='#00FF00'; break;
        case 4: // bleu
            document.bgColor='#0000FF'; break;
        case 5: // violet
            document.bgColor='#FF00FF'; break;
        case 6: // blanc
            document.bgColor='#FFFFFF'; break;
        case 7: // noir
            document.bgColor='#000000'; break;
        default:
            document.bgColor=defaultColor; break;
    }
}

// Deuxieme solution: avec un tableau: meilleure car elle permet 
//d'ajouter facilement des couleurs.
function changeColor2(color) { 
    var colors=['#FF0000','#FF8000','#FFFF00','#00FF00',
                '#0000FF','#FF00FF','#FFFFFF','#000000'];
    if ((color>=0)&&(color<colors.length)) { 
    	document.bgColor=colors[color];
    }
    /* if ((color>=0)&&(color<colors.length)) { 
	document.style.backgroundColor=colors[color];
    }*/
    else {
    	document.bgColor=defaultColor; 
    }
}
var changeColor = changeColor1;
