// ACCUEIL - LIRE LA SUITE

function lireLaSuite()
{
    pave = document.getElementById("index-suite");
    pave.style.display="block";
}

// ACCUEIL - CHANGEMENT DE SLIDE
//Récupérer les boutons
function onRecupereTout()
{
    boutonPourQui = document.getElementById("bouton-pour-qui");
    boutonQuelsSujets = document.getElementById("bouton-quels-sujets");
    boutonCEstQuoi = document.getElementById("bouton-cest-quoi");
    boutonAvecQui = document.getElementById("bouton-avec-qui");
    boutonComment = document.getElementById("bouton-comment");

    //Récupérer les controleurs
    controleurPourQui = document.getElementById("controleur-pour-qui").getElementsByTagName("i")[0];
    controleurQuelsSujets = document.getElementById("controleur-quels-sujets").getElementsByTagName("i")[0];
    controleurCEstQuoi = document.getElementById("controleur-cest-quoi").getElementsByTagName("i")[0];
    controleurAvecQui = document.getElementById("controleur-avec-qui").getElementsByTagName("i")[0];
    controleurComment = document.getElementById("controleur-comment").getElementsByTagName("i")[0];

    //Récupérer les slides
    slidePourQui = document.getElementById("slide-pour-qui");
    slideQuelsSujets = document.getElementById("slide-quels-sujets");
    slideCEstQuoi = document.getElementById("slide-cest-quoi");
    slideAvecQui = document.getElementById("slide-avec-qui");
    slideComment = document.getElementById("slide-comment");
}


function changeSlide($slide)
{
    // trotinette E scooter

    switch ($slide) 
    {
        case pourQui:
            //slide demandée display grid
            slidePourQui.style.display="grid";
            
            // autres slides masquées
            slideQuelsSujets.style.display="none";
            slideCEstQuoi.style.display="none";            
            slideAvecQui.style.display="none";
            slideComment.style.display="none";

            // bouton de la slide active change de couleur + autres boutons prennent la class cta-bleu
            boutonPourQui.setAttribute("class","cta-blanc");
            boutonQuelsSujets.setAttribute("class","cta-bleu");
            boutonCEstQuoi.setAttribute("class","cta-bleu");
            boutonAvecQui.setAttribute("class","cta-bleu");
            boutonComment.setAttribute("class","cta-bleu");
            
            // controleur de la slide active passe solid et controleurs des autres class passent regular
            controleurPourQui.setAttribute("class","fa fas");
            controleurQuelsSujets.setAttribute("class","fa far");
            controleurCEstQuoi.setAttribute("class","fa far");
            controleurAvecQui.setAttribute("class","fa far");
            controleurComment.setAttribute("class","fa far");
            
            break;
        
        case quelsSujets :

            break;

        case cEstQuoi:

            break;

        case avecQui:

µ
            break;

        case comment:

            break;

        default:
            break;
    } 
}