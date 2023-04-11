//Déclaration des variables
const connexion = $('connexion');
const modal = $('modal');
const miss= $('miss');

//fonction pour récupérer et cibler l'ID désiré
function $(id){
    return document.getElementById(id);
}

//fonction pour tester et ajouter 
function action(evt){
    evt.preventDefault();
    if(login.value !=='' && password.value !==''){
        modal.classList.add('ok');
    } else {
        miss.classList.add('warning');
        miss.innerHTML='Il manque votre identifiant ou votre mot de passe';
    }

}

//Ecoute à l'évenement click sur le bouton connexion et appelle de la fonction action
connexion.addEventListener('click',action,false);
