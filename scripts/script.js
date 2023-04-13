//fonction fléchée pour récupérer et cibler l'ID désiré
$=(id)=>document.getElementById(id);

//Déclaration des variables
const connexion = $('connexion');
const modal = $('modal');
const miss= $('miss');
let titreConsultation = $('personalise');

//fonction pour tester et ajouter 
function action(evt){
    evt.preventDefault();
    if(login.value !=='' && password.value !==''){
        modal.classList.add('ok');
        let input = document.getElementById("login").value; // je récupère le champ INPUT
        titreConsultation.innerHTML= `<h2>Bonjour ${input} ! <i class="fa-regular fa-face-smile"></i></h2>`; // J'ajoute l'identifiant saisie au message de bienvenue
        
    } else {
        miss.classList.add('warning');
        miss.innerHTML='Il manque votre identifiant ou votre mot de passe';
    }

}


//Ecoute à l'évenement click sur le bouton connexion et appelle de la fonction action
connexion.addEventListener('click',action,false);
