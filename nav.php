<!-- Barre de navigation avec à gauche le menu et à droite le bouton de prise de RDV-->
<nav>
    <div class="nav__menu">
        <a href="index.php" class="<?php if ($page == 'accueil') {echo 'active';}?>">Accueil</a>
        <a href="blog.php" class="<?php if ($page == 'blog') {echo 'active';}?>">Blog</a>
        <a href="aboutMe.php" class="<?php if ($page == 'qui') {echo 'active';}?>">Qui suis-je ?</a>
        <a href="consultations.php" class="<?php if ($page == 'consultation') {echo 'active';}?>">Consultations</a>
        <a href="contactez-moi.php" class="<?php if ($page == 'contact') {echo 'active';}?>">Contactez-moi</a>

    </div>
    <div class="nav__button">
        <a href="priseRDV.php">Prendre un rdv</a>
    </div>
 </nav>