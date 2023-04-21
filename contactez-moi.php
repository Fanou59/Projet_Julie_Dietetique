<?php
$page = 'contact';
$titrePage = 'Contactez-moi';
include 'header.php';
include 'nav.php';
?>


<header class="header__page">
    <div class="bg">
        <h1>CONTACTEZ-MOI</h1>
    </div>
</header>
<main> <!--Ici on mettra le formulaire de contact-->
    <div class="container">
        <h2 class="form-title">Merci de remplir le formulaire suivant</h2>
        <form action="#" method="post">
            <div class="row row-cols-1 row-cols-md-2">
                <div class="col mb-3">
                    <label for="prenom">Prénom :</label>
                    <input class="form-control mt-3 mb-2" id="prenom" name="prenom" type="text" required>
                </div>
                <div class="col mb-3">
                    <label for="name">Nom :</label>
                    <input class="form-control mt-3 mb-2" id="name" name="name" type="text" required>
                </div>

                <div class="col mb-3">
                    <label for="email">Email :</label>
                    <input class="form-control mt-3 mb-2" id="email" name="email" type="email" required>
                </div>
                <!-- on mettra un format automatique en JS ou PHP par la suite -->
                <div class="col mb-3">
                    <label for="telephone">Téléphone (format 00 00 00 00 00) :</label>
                    <input class="form-control mt-3 mb-2" id="telephone" name="telephone" type="tel" placeholder="00 00 00 00 00" pattern="[0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" required>
                </div>
            </div>

            <div class="row">
                <div class="col mb-3">
                    <label for="objet">Objet :</label>
                    <input class="form-control mt-3 mb-2" id="objet" name="objet" type="text" required>
                </div>
            </div>
            <div class="row">
                <div class="col mb-3">
                    <div class="col mb-3">
                        <label for="message">Quel est votre message ?</label>
                        <textarea class="form-control mt-3 mb-2" name="message" id="message" rows="5"></textarea>
                    </div>
                </div>
            </div>
            <div class="submit">
                <div class="submit__acceptrgpd">
                    <input type="checkbox" name="rgpd" id="rgpd" required>
                    <label for="rgpd"><i>J'ai lu et j'accepte <a href="/mentions-legales.php">la
                                charte de
                                confidentialité</a></i></label>
                </div>
                <div class="submit__btn">
                    <input type="submit" value="Envoyer le formulaire">
                </div>
            </div>
        </form>
    </div>
</main>
<?php include 'footer.php'; ?>