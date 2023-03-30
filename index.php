<?php $page = 'accueil';
$titrePage = 'Accueil';
include 'header.php';
include 'nav.php'; ?>

<!--header de l'accueil avec une image BG + 1 titre + le même bouton que nav-->
<header class="header__accueil"> 
    <div class="header__text">
        <h1>T'es serré comme une sardine ? <br> Vient on ouvre une boîte ensemble !</h1>
        <a class="nav__button" href="priseRDV.php">Prendre un RDV</a>
    </div>
</header>
<main>
    <h2>Mes prestations</h2>

    <!-- CARD_catalogue de service -->
    <section class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">

            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div id="price" class="d-flex justify-content-center align-items-center card-title mx-auto">35€</div>
                    </div>
                    <div class="card-body">
                        <div class="card-title text-center">Pack conseils efficaces</div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Liste 1</li>
                            <li class="list-group-item">Liste 2</li>
                            <li class="list-group-item">Liste 3</li>
                            <li class="list-group-item">Liste 4</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div id="price" class="d-flex justify-content-center align-items-center card-title mx-auto">35€</div>
                    </div>
                    <div class="card-body">
                        <div class="card-title text-center">Pack conseils efficaces</div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Liste 1</li>
                            <li class="list-group-item">Liste 2</li>
                            <li class="list-group-item">Liste 3</li>
                            <li class="list-group-item">Liste 4</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div id="price" class="d-flex justify-content-center align-items-center card-title mx-auto">35€</div>
                    </div>
                    <div class="card-body">
                        <div class="card-title text-center">Pack conseils efficaces</div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Liste 1</li>
                            <li class="list-group-item">Liste 2</li>
                            <li class="list-group-item">Liste 3</li>
                            <li class="list-group-item">Liste 4</li>
                        </ul>
                    </div>
                </div>
            </div>
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