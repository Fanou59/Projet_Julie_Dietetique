<?php
$page = 'accueil';
include 'header.php'; ?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid px-4">
        <a class="navbar-brand" href="#">Prenez un RDV</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="<?php if ($page == 'accueil') {
                                    echo 'nav-link active';
                                } ?>" aria-current="page" href="#">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Qui suis-je ?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Consultations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Contactez-moi</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<?php include 'footer.php'; ?>