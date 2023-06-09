<?php
$page = 'consultation';
$titrePage = 'Votre consultation';
include 'header.php';
include 'nav.php';
?>
<header class="header__page">
    <div class="bg">
        <h1>CONSULTATIONS</h1>
    </div>
</header>
<?php include 'connexion.php'; ?>
<div class="container">

    <div id="personalise"></div>
    <h3 class="text-center">Je vous souhaite la bienvenue à votre consultation.</h3>

    <!-- Illustration temporaire en attendant l'intégration du module -->
    <div class="row  justify-content-center">
        <div class="col-10 col-md-6 text-center module">
            <i id="video" class="fa-solid fa-video"></i>
        </div>
    </div>
</div>
<script src="./scripts/script.js"></script>

<?php include 'footer.php'; ?>