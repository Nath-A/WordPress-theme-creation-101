// ACCUEIL - LIRE LA SUITE

function lireLaSuite()
{
    pave = document.getElementById("index-suite");
    pave.style.display="block";
}

// ACCUEIL - CHANGEMENT DE SLIDE

function changeSlide($slide)
{
    switch ($slide) 
    {
        case avec-qui:
            //slide demandée display grid
            slideAvecQui = document.getElementById("slide-pour-qui");
            slideAvecQui.style.display="grid";
            // autres slides masquées
            slideQuelsSujet = document.getElementById("slide-quels-sujets");
            slideQuelsSujet.style.display="none";

            slideCEstQuoi = document.getElementById("slide-cest-quoi");
            slideCEstQuoi.style.display="none";

            slideAvecQui = document.getElementById("slide-avec-qui");
            slideAvecQui.style.display="none";

            slideComment = document.getElementById("slide-comment");
            slideComment.style.display="none";

            // bouton de la slide active change de couleur
            
            // autres boutons prennent la class cta-bleu
            // controleur de la slide active passe solid
            // controleur des autres class passent regular
            
            break;
        
        case quels-sujets :

            break;

        case cest-quoi:

            break;

        case cest-quoi:

            break;

        case cest-quoi:

            break;

        default:
            break;
    } 
}