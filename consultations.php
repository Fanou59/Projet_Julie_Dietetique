<?php
$page = 'consultation';
$titrePage = 'Votre consultation';
include 'header.php';
include 'nav.php';
?>
<header class="header__page">
    <h1 class="card-title">CONSULTATIONS</h1>
</header>
<div class="container">
    <?php include 'connexion.php'; ?>

    <h2>Bienvenue à votre consultation</h2>

    <!-- Illustration temporaire en attendant l'intégration du module -->
    <div class="row justify-content-center">
        <div class="col-6 text-center module">
            <i class="fa-solid fa-video"></i>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>