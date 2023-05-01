<!-- Barre de navigation avec à gauche le menu et à droite le bouton de prise de RDV-->

<nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid px-4">
        <a class="navbar-brand" href="/priseRDV.php">Prenez un RDV</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="<?php if ($page == 'accueil') {
                                    echo 'nav-link active';
                                } else echo 'nav-link'; ?>" aria-current="page" href="index.php">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="<?php if ($page == 'blog') {
                                    echo 'nav-link active';
                                } else echo 'nav-link'; ?>" href="blog.php">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="<?php if ($page == 'qui') {
                                    echo 'nav-link active';
                                } else echo 'nav-link'; ?>" href="aboutMe.php">Qui suis-je ?</a>
                </li>
                <li class="nav-item">
                    <a class="<?php if ($page == 'consultation') {
                                    echo 'nav-link active';
                                } else echo 'nav-link'; ?>" href="consultations.php">Consultations</a>
                </li>
                <li class="nav-item">
                    <a class="<?php if ($page == 'contact') {
                                    echo 'nav-link active';
                                } else echo 'nav-link'; ?>" href="contactez-moi.php">Contactez-moi</a>
                </li>
            </ul>
        </div>
    </div>
</nav>