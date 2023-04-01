<?php
$page = 'contact';
$titrePage = 'Contactez-moi';
include 'header.php';
include 'nav.php';
?>


<header class="header__page">
    <h1 class="card-title">CONTACTEZ-MOI</h1>
    <p>Petit texte de bienvenue dans le header sous le h1</p>
</header>
<main> <!--Ici on mettra le formulaire de contact-->
    <div class="container">
        <h2 class="form-title">Merci de remplir le formulaire suivant</h2>
        <form action="#" method="post">
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
                    <label for="telephone">Téléphone :</label>
                    <input id="telephone" name="telephone" type="tel" required>
                </div>
            </div>

            <div class="main-user-message">
                <label for="objet">Objet :</label>
                <input id="objet" name="objet" type="text" required>
            </div>
            <div class="usertextarea">
                <div class="usertextarea__message">
                    <label for="message">Quel est votre message ?</label>
                    <textarea name="message" id="message" rows="3"></textarea>
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
    </div>


    </form>

    </div>
</main>
<?php include 'footer.php'; ?>