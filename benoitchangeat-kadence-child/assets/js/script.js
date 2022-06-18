// ACCUEIL - LIRE LA SUITE

function lireLaSuite()
{
    pave = document.getElementById("index-suite");
    pave.style.display="block";
}

// ACCUEIL - LIENS VERS LES RESSOURCES PENDING ! 
function ressourcesGratuites($ressource)
{
	blog = document.getElementById("ressources-gratuites-blog");
	infographie = document.getElementById("ressources-gratuites-infographies");
	communaute = document.getElementById("ressources-gratuites-communaute");
	guide = document.getElementById("ressources-gratuites-guide");
	fiches = document.getElementById("ressources-gratuites-fiches");
}

// ACCUEIL - COACHING QUESACO


function changerSlide($slide)
{

    //Récupérer les boutons
    boutonPourQui = document.getElementById("bouton-pour-qui");
    boutonQuelsSujets = document.getElementById("bouton-quels-sujets");
    boutonCEstQuoi = document.getElementById("bouton-cest-quoi");
    boutonAvecQui = document.getElementById("bouton-avec-qui");
    boutonComment = document.getElementById("bouton-comment");

    //Récupérer les controleurs
    controleurPourQui = document.getElementById("controleur-pour-qui");
    controleurQuelsSujets = document.getElementById("controleur-quels-sujets");
    controleurCEstQuoi = document.getElementById("controleur-cest-quoi");
    controleurAvecQui = document.getElementById("controleur-avec-qui");
    controleurComment = document.getElementById("controleur-comment");

    //Récupérer les slides
    slidePourQui = document.getElementById("slide-pour-qui");
    slideQuelsSujets = document.getElementById("slide-quels-sujets");
    slideCEstQuoi = document.getElementById("slide-cest-quoi");
    slideAvecQui = document.getElementById("slide-avec-qui");
    slideComment = document.getElementById("slide-comment");
	
	//N'afficher que la premiere slide (ca fonctionne pas sinon...)
    slidePourQui.style.display = "grid";
    slideQuelsSujets.style.display = "none";
    slideCEstQuoi.style.display = "none";
    slideAvecQui.style.display = "none";
    slideComment.style.display = "none";
	
	boutonPourQui.setAttribute("class","cta-blanc");
	controleurPourQui.setAttribute("class","fas fa-circle");

    switch ($slide) 
    {
        case 'pourQui':
            //slide demandée display grid + autres slides masquées
            slidePourQui.style.display="grid";
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
            controleurPourQui.setAttribute("class","fas fa-circle");
            controleurQuelsSujets.setAttribute("class","far fa-circle");
            controleurCEstQuoi.setAttribute("class","far fa-circle");
            controleurAvecQui.setAttribute("class","far fa-circle");
            controleurComment.setAttribute("class","far fa-circle");
            
            break;
        
        case 'quelsSujets' :
            //slide demandée display grid + autres slides masquées
            slidePourQui.style.display="none";
            slideQuelsSujets.style.display="grid";
            slideCEstQuoi.style.display="none";            
            slideAvecQui.style.display="none";
            slideComment.style.display="none";

            // bouton de la slide active change de couleur + autres boutons prennent la class cta-bleu
            boutonPourQui.setAttribute("class","cta-bleu");
            boutonQuelsSujets.setAttribute("class","cta-blanc");
            boutonCEstQuoi.setAttribute("class","cta-bleu");
            boutonAvecQui.setAttribute("class","cta-bleu");
            boutonComment.setAttribute("class","cta-bleu");

            // controleur de la slide active passe solid et controleurs des autres class passent regular
            controleurPourQui.setAttribute("class","far fa-circle");
            controleurQuelsSujets.setAttribute("class","fas fa-circle");
            controleurCEstQuoi.setAttribute("class","far fa-circle");
            controleurAvecQui.setAttribute("class","far fa-circle");
            controleurComment.setAttribute("class","far fa-circle");
            break;

        case 'cEstQuoi':
            //slide demandée display grid + autres slides masquées
            slidePourQui.style.display="none";
            slideQuelsSujets.style.display="none";
            slideCEstQuoi.style.display="grid";            
            slideAvecQui.style.display="none";
            slideComment.style.display="none";

            // bouton de la slide active change de couleur + autres boutons prennent la class cta-bleu
            boutonPourQui.setAttribute("class","cta-bleu");
            boutonQuelsSujets.setAttribute("class","cta-bleu");
            boutonCEstQuoi.setAttribute("class","cta-blanc");
            boutonAvecQui.setAttribute("class","cta-bleu");
            boutonComment.setAttribute("class","cta-bleu");

            // controleur de la slide active passe solid et controleurs des autres class passent regular
            controleurPourQui.setAttribute("class","far fa-circle");
            controleurQuelsSujets.setAttribute("class","far fa-circle");
            controleurCEstQuoi.setAttribute("class","fas fa-circle");
            controleurAvecQui.setAttribute("class","far fa-circle");
            controleurComment.setAttribute("class","far fa-circle");
            break;

        case 'avecQui':
            //slide demandée display grid + autres slides masquées
            slidePourQui.style.display="none";
            slideQuelsSujets.style.display="none";
            slideCEstQuoi.style.display="none";            
            slideAvecQui.style.display="grid";
            slideComment.style.display="none";

            // bouton de la slide active change de couleur + autres boutons prennent la class cta-bleu
            boutonPourQui.setAttribute("class","cta-bleu");
            boutonQuelsSujets.setAttribute("class","cta-bleu");
            boutonCEstQuoi.setAttribute("class","cta-bleu");
            boutonAvecQui.setAttribute("class","cta-blanc");
            boutonComment.setAttribute("class","cta-bleu");

            // controleur de la slide active passe solid et controleurs des autres class passent regular
            controleurPourQui.setAttribute("class","far fa-circle");
            controleurQuelsSujets.setAttribute("class","far fa-circle");
            controleurCEstQuoi.setAttribute("class","far fa-circle");
            controleurAvecQui.setAttribute("class","fas fa-circle");
            controleurComment.setAttribute("class","far fa-circle");

            break;

        case 'comment':
            //slide demandée display grid + autres slides masquées
            slidePourQui.style.display="none";
            slideQuelsSujets.style.display="none";
            slideCEstQuoi.style.display="none";            
            slideAvecQui.style.display="none";
            slideComment.style.display="grid";

            // bouton de la slide active change de couleur + autres boutons prennent la class cta-bleu
            boutonPourQui.setAttribute("class","cta-bleu");
            boutonQuelsSujets.setAttribute("class","cta-bleu");
            boutonCEstQuoi.setAttribute("class","cta-bleu");
            boutonAvecQui.setAttribute("class","cta-bleu");
            boutonComment.setAttribute("class","cta-blanc");

            // controleur de la slide active passe solid et controleurs des autres class passent regular
            controleurPourQui.setAttribute("class","far fa-circle");
            controleurQuelsSujets.setAttribute("class","far fa-circle");
            controleurCEstQuoi.setAttribute("class","far fa-circle");
            controleurAvecQui.setAttribute("class","far fa-circle");
            controleurComment.setAttribute("class","fas fa-circle");

            break;

        default:
            break;
    } 
}

window.addEventListener("load", changerSlide);
