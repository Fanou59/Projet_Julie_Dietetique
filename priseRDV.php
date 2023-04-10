<?php
$titrePage = 'Prenons un RDV';
include 'header.php';
include 'nav.php'; ?>

<header class="header__page">
    <h1>Prenez un RDV</h1>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. ?</p>
</header>
<main>
    <!-- Container pour le formulaire -->
    <div class="container">
        <h2 class="form__title">Merci de remplir le formulaire suivant</h2>
        <form action="#" method="post">
            <!-- Partie user-info sur 2 colonnes en desktop et 1 colonnes en mobile -->
            <div class="row row-cols-1 row-cols-md-2">
                <div class="col mb-3">
                    <label for="name">Nom :</label>
                    <input class="form-control" id="name" name="name" type="text" required>
                </div>
                <div class="col mb-3">
                    <label for="prenom">Prénom :</label>
                    <input class="form-control" id="prenom" name="prenom" type="text" required>
                </div>
                <div class="col mb-3">
                    <label for="email">Email :</label>
                    <input class="form-control" id="email" name="email" type="email" required>
                </div>
                <div class="col mb-3">
                    <label for="telephone">Télephone :</label>
                    <input class="form-control" id="telephone" name="telephone" type="tel" required>
                </div>
                <div class="col mb-3">
                    <label for="age">Age :</label>
                    <input class="form-control" id="age" name="age" type="number" required>
                </div>
                <div class="col mb-3">
                    <label for="genre">Genre :</label>
                    <select id="genre" class="form-select">
                        <option selected>Choisissez...</option>
                        <option value="homme">Homme</option>
                        <option value="femme">Femme</option>
                        <option value="ngenre">Non Genré</option>

                    </select>

                </div>
            </div>
            <!-- Partie user-questions sur 1 colonne tt écran -->
            <div class="row row-cols-1">
                <div class="col mb-3">
                    <label for="activite">Quel est votre niveau d'activité ?</label>
                    <select class="form-select" id="activite">
                        <option selected>Choisissez...</option>
                        <option value="sedentaire">Sédentaire</option>
                        <option value="moyenA">Moyennement actif</option>
                        <option value="actif">Actif</option>
                        <option value="tresA">Très actif</option>
                    </select>
                </div>
                <div class="col mb-3">
                    <label for="modeAlimentaire">Quel est votre mode alimentaire ?</label>
                    <select class="form-select" id="modeAlimentaire">
                        <option selected>Choisissez...</option>
                        <option value="equilibre">Equilibré</option>
                        <option value="flexitarien">Fléxitarien</option>
                        <option value="vegetarien">Végétarien</option>
                        <option value="vegetalien">Végétalien</option>
                    </select>
                </div>
                <div class="col mb-3">
                    <label for="intolerence">Renseignez ici vos intolérences alimentaires :</label>
                    <textarea class="form-control" name="intolerence" id="intolerence" rows="3"></textarea>
                </div>
                <div class="col mb-3">
                    <label for="allergie">Renseigner ici vos allergies si vous en avez :</label>
                    <textarea class="form-control" name="allergie" id="allergie" rows="3"></textarea>
                </div>
            </div>

            <!-- Choix du sport pratiqué -->
            <fieldset>
                <legend class="mb-3"> Quel(s) sport(s) pratiquez-vous ?</legend>
                <div class="row row-cols-2 row-cols-md-6 mx-auto">

                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" name="fitness" id="fitness">
                        <label class="form-check-label" for="fitness">Fitness</label>
                    </div>

                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" name="running" id="running">
                        <label class="form-check-label" for="running">Running</label>

                    </div>
                    <div class="col form-check">

                        <input class="form-check-input" type="checkbox" name="marche" id="marche">
                        <label class="form-check-label" for="marche">Marche</label>
                    </div>

                    <div class="col form-check">

                        <input class="form-check-input" type="checkbox" name="cyclisme" id="cyclisme">
                        <label class="form-check-label" for="cyclisme">Cyclisme</label>
                    </div>

                    <div class="col form-check">

                        <input class="form-check-input" type="checkbox" name="artmartiaux" id="artmartiaux">
                        <label class="form-check-label" for="artmartiaux">Art Martiaux</label>
                    </div>

                    <div class="col form-check">

                        <input class="form-check-input" type="checkbox" name="yoga" id="yoga">
                        <label class="form-check-label" for="yoga">Yoga</label>
                    </div>

                    <div class="col form-check">

                        <input class="form-check-input" type="checkbox" name="pilates" id="pilates">
                        <label class="form-check-label" for="pilates">Pilates</label>
                    </div>

                    <div class="col form-check">

                        <input class="form-check-input" type="checkbox" name="autres" id="autres">
                        <label class="form-check-label" for="autres">Autres</label>
                    </div>

                    <div class="col form-check">

                        <input class="form-check-input" type="checkbox" name="nosport" id="nosport">
                        <label for="nosport">Pas de sport</label>
                    </div>
                </div>

            </fieldset>

            <!-- Modifier les class de submit -->
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

<!-- Section qui doit contenir le calendrier de prise de rdv -->
<section>
    <div class="container">
        <h2>Choisissez une date de rdv dans le calendrier ci-dessous</h2>
        <p>
            Ici on mettra peut-être un calendrier de rdv ou alors après l'envoi du formulaire arriver sur une page de
            prise de RDV.
            <i>On pourra tester <a href="https://simplybook.me/fr/">simplybook.me</a> pour la prise de rdv (free jusqu'à
                50
                consultations
                par mois)</i>
        </p>
    </div>
</section>
<?php include 'footer.php'; ?>