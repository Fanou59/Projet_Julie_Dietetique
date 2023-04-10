<?php
$page = 'connexion';
$titrePage = 'connexion';
include 'nav.php';
include 'header.php'; ?>

<div class="container">

    <h1 class="card-title">LOGIN</h2>
        <div class="row row-cols-md-3 text-center justify-content-center">
            <form>
                <div class="mb-5">
                    <label for="login" class="form-label">Identifiant</label>
                    <input type="text" class="form-control text-center" id="login" aria-describedby="identifiant" placeholder="Entrez votre identifiant">

                </div>
                <div class="mb-2">
                    <label for="password" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control text-center" id="password" placeholder="Entrez votre mot de passe">
                </div>
                <div class="mb-5">
                    <a href="#"> J'ai perdu mon mot de passe</a>
                </div>
                <div class="submit cnx">
                    <div class="submit__btn">
                        <input type="submit" value="Envoyer"></input>
                    </div>
                </div>
            </form>
        </div>
</div>
<?php
include 'footer.php';
?>