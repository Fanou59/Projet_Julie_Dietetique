//Déclaration de la variable
const connexion = $('connexion');
const modal = $('modal');
const miss= $('miss');

//fonction pour récupérer cibler l'ID désiré
function $(id){
    return document.getElementById(id);
}
function action(evt){
    evt.preventDefault();
    if(login.value !=='' && password.value !==''){
        modal.classList.add('ok');
    } else {
        miss.classList.add('warning');
        miss.innerHTML='Il manque votre identifiant ou votre mot de passe';
    }

}


//Ecoute à l'évenement click sur le bouton connexion et on fait l'action
connexion.addEventListener('click',action,false);

