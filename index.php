<?php $page = 'accueil';
$titrePage = 'Accueil';
include 'header.php';
include 'nav.php'; ?>


<header class="header__accueil"> <!--header de l'accueil avec une image BG + 1 titre + le même bouton que nav-->
    <div class="header__text">
        <h1>T'es serré comme une sardine ? <br> Vient on ouvre une boîte ensemble !</h1>
        <a class="nav__button" href="priseRDV.php">Prendre un RDV</a>
    </div>
</header>
<main>
    <h2>Mes prestations</h2>
    <section class="catalogue"> <!-- Section offre de service avec 3 cartes-->
        <div class="catalogue__cardServices">
            <div class="catalogue__price">
                35€
            </div>
            <h3>Pack conseils efficaces</h3>
            <ul>
                <li>liste</li>
                <li>liste</li>
                <li>liste</li>
                <li>liste</li>
            </ul>
        </div>
        <div class="catalogue__cardServices">
            <div class="catalogue__price">
                45€
            </div>
            <h3>Pack suivi</h3>
            <ul>
                <li>liste</li>
                <li>liste</li>
                <li>liste</li>
                <li>liste</li>
            </ul>
        </div>
        <div class="catalogue__cardServices">
            <div class="catalogue__price">
                65€
            </div>
            <h3>Pack 1ère consultation</h3>
            <ul>
                <li>liste</li>
                <li>liste</li>
                <li>liste</li>
                <li>liste</li>
            </ul>
        </div>
    </section>
    <!--section pour insérer le testimonial, expérience et/ou avis client-->
    <section class="testimonial">
        <blockquote>Très bon coach et diététicienne ! Bienveillante et avec pleins de bons conseils pour
            retrouver une
            alimentation saine, gourmande et adaptée à mon sport 🙂. Je recommande !</blockquote>
        <!--La photo sera placée dans un petit cercle-->
        <img src="images/Photo_cliente.jpg" alt="photo d'alice patiente du cabinet">
        <p>Judith Gardner</p>
    </section>
    <section class="sliderBlog">
        <!--Ici je mettrais le slider avec les articles de blog pour la version mobile et en version desktop les 3 dernièrs articles-->
        <h2>Nos derniers articles</h2>
    </section>
</main>
<?php include 'footer.php'; ?>