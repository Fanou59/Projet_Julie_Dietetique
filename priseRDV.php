<?php
$titrePage = 'Prenons un RDV';
include 'header.php';
include 'nav.php'; ?>

<header class="header__page">
    <h1>Prenez un RDV</h1>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. ?</p>
</header>
<main>
    <div class="container">
        <h2 class="form__title">Merci de remplir le formulaire suivant</h2>
        <form action="#" method="get">
            <div class="userinfo">
                <div class="userinfo__inputbox">
                    <label for="name">Nom :</label>
                    <input id="name" name="name" type="text" required>
                </div>
                <div class="userinfo__inputbox">
                    <label for="prenom">Prénom :</label>
                    <input id="prenom" name="prenom" type="text" required>
                </div>
                <div class="userinfo__inputbox">
                    <label for="email">Email :</label>
                    <input id="email" name="email" type="email" required>
                </div>
                <div class="userinfo__inputbox">
                    <label for="telephone">Télephone :</label>
                    <input id="telephone" name="telephone" type="tel" required>
                </div>
                <div class="userinfo__inputbox">
                    <label for="age">Age :</label>
                    <input id="age" name="age" type="number" required>
                </div>
                <div class="userinfo__genre">
                    <span class="gender-title">Genre</span>
                    <div class="gender-category">
                        <input type="radio" name="homme" id="homme">
                        <label for="homme">Homme</label>
                        <input type="radio" name="femme" id="femme">
                        <label for="femme">Femme</label>
                        <input type="radio" name="nogender" id="nogender">
                        <label for="nogender">Non genré</label>
                    </div>
                </div>
            </div>
            <div class="useractivity">
                <label for="activite">Quel est votre niveau d'activité ?</label>
                <select id="activite">
                    <option selected>Choisissez...</option>
                    <option value="sedentaire">Sédentaire</option>
                    <option value="moyenA">Moyennement actif</option>
                    <option value="actif">Actif</option>
                    <option value="tresA">Très actif</option>
                </select>
            </div>
            <div class="userfood">
                <label for="modeAlimentaire">Quel est votre mode alimentaire ?</label>
                <select id="modeAlimentaire">
                    <option selected>Choisissez...</option>
                    <option value="equilibre">Equilibré</option>
                    <option value="flexitarien">Fléxitarien</option>
                    <option value="vegetarien">Végétarien</option>
                    <option value="vegetalien">Végétalien</option>
                </select>
            </div>
            <div class="usertextarea">
                <div class="usertextarea__intolerence">
                    <label for="intolerence">Renseignez ici vos intolérences alimentaires :</label>
                    <textarea name="intolerence" id="intolerence" rows="3"></textarea>
                </div>
                <div class="usertextarea__allergies">
                    <label for="allergie">Renseigner ici vos allergies si vous en avez :</label>
                    <textarea name="allergie" id="allergie" rows="3"></textarea>
                </div>
            </div>
            <div class="usersports">
                <span class="usersport__title">Quel(s) sport(s) pratiquez-vous ?</span>
                <div class="usersport__category">
                    <input type="checkbox" name="fitness" id="fitness">
                    <label for="fitness">Fitness</label>
                    <input type="checkbox" name="running" id="running">
                    <label for="running">Running</label>
                    <input type="checkbox" name="marche" id="marche">
                    <label for="marche">Marche</label>
                    <input type="checkbox" name="cyclisme" id="cyclisme">
                    <label for="cyclisme">Cyclisme</label>
                    <input type="checkbox" name="artmartiaux" id="artmartiaux">
                    <label for="artmartiaux">Art Martiaux</label>
                    <input type="checkbox" name="yoga" id="yoga">
                    <label for="yoga">Yoga</label>
                    <input type="checkbox" name="pilates" id="pilates">
                    <label for="pilates">Pilates</label>
                    <input type="checkbox" name="autres" id="autres">
                    <label for="autres">Autres</label>
                    <input type="checkbox" name="nosport" id="nosport">
                    <label for="nosport">Pas de sport</label>
                </div>
            </div>
            <div class="submit">
                <div class="submit__acceptrgpd">
                    <input type="checkbox" name="rgpd" id="rgpd">
                    <label for="rgpd"><i>J'ai lu et j'accepte <a href="charteRGPD.php">la
                                charte de
                                confidentialité</a></i>
                </div>
                <div class="submit__btn">
                    <input type="submit" value="Envoyer le formulaire">
                </div>
            </div>
        </form>

    </div>
</main>

<section>
    <h2>Choisissez une date de rdv dans le calendrier ci-dessous</h2>
    <p>
        Ici on mettra peut-être un calendrier de rdv ou alors après l'envoi du formulaire arriver sur une page de
        prise de RDV.
        <i>On pourra tester <a href="https://simplybook.me/fr/">simplybook.me</a> pour la prise de rdv (free jusqu'à
            50
            consultations
            par mois)</i>
    </p>
</section>
<?php include 'footer.php'; ?>