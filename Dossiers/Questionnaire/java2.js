var rep = new Array;
var faite = new Array;
var score = 0;
rep[1] = "c";
rep[2] = "b";
rep[3] = "b";
rep[4] = "a";
rep[5] = "c";
rep[6] = "b";
rep[7] = "b";
rep[8] = "c";
rep[9] = "a";
function Engine(question, reponse) {
        if (reponse != rep[question]) {
                if (!faite[question]) {
                        faite[question] = -1;
                        alert("Faux !!   La bonne réponse était en - " + rep[question] + " -");
                        }
                else {
                        alert("Tu as déjà répondu à cette question !");
                        }
                }
        else {
                if (!faite[question]) {
                        faite[question] = -1;
                        score++;
                        alert("Bonne réponse !! ");
                        }
                else { 
                        alert("Tu as déjà répondu à cette question !");
                        }
                }
}
function NextLevel () {
        if (score > 9) {
                alert("Tricheur !");
                }
        if (score > 8 && score <= 9) {
                alert(score + "/9. " + "Un coup de maître !");
                }
        if (score > 6 && score <= 8) {
                alert(score + "/9. " + "Bien, mais... pas parfait.");
                }
        if (score >= 4 && score < 6) {
                alert(score + "/9. " + "Pas terrible... un autre essai ?");
                }
        if (score < 4) {
                alert(score + "/9. " + "Il faut refaire l'exercice");
                }
faite = new Array;
score = 0;
document.quest.reset();
}