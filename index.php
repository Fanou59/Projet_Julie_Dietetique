<?php $page = 'accueil';
$titrePage = 'Accueil';
include 'header.php';
include 'nav.php'; ?>

<!--header de l'accueil avec une image BG + 1 titre + le même bouton que nav-->
<header class="header__accueil">
    <div class="header__text">
        <h1 class="header__title">T'es serré <br>comme <br>une sardine ?</h1>
        <a class="navbar-brand" href="/priseRDV.php">Prenez un RDV</a>

    </div>
</header>
<main>
    <h2>Mes prestations</h2>

    <!-- CARD_catalogue de service -->
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">

            <div class="col mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-center align-items-center card-title mx-auto price">35€</div>
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

            <div class="col mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-center align-items-center card-title mx-auto price">35€</div>
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

            <div class="col mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-center align-items-center card-title mx-auto price">35€</div>
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

    </div>

    <!--section pour insérer le testimonial, expérience et/ou avis client-->
    <div class="testimonial">

        <blockquote>Très bon coach et diététicienne ! Bienveillante et avec pleins de bons conseils pour
            retrouver une
            alimentation saine, gourmande et adaptée à mon sport 🙂. Je recommande !</blockquote>
        <!--La photo sera placée dans un petit cercle-->
        <img id="img-testi" src="images/Photo_cliente.jpg" alt="photo d'alice patiente du cabinet">
        <p>Judith Gardner</p>

    </div>

    <section>
        <!--Ici je mettrais le slider avec les articles de blog pour la version mobile et en version desktop les 3 dernièrs articles-->
        <h2>Nos derniers articles</h2>
        <?php include 'slider_mobile.php' ?> <!--Slider pour le mobile, n'apparait pas en version desktop -->
        <!-- Container avec les 3 derniers article, disparait en version mobile -->
        <div class="container mt-4 d-none d-md-block">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card pb-2">
                        <img src="/images/img_blog.jpg" alt="des oeufs sur le plat" class="card-img-top">

                        <div class="card-body">
                            <div class="card-title">Test titre card blog</div>
                            <h6 class="card-subtitle mb-2 text-body-secondary"><i class="fa-regular fa-clock"></i>Date</h6>
                            <p class="card-text mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur excepturi, nesciunt provident quisquam nihil natus beatae dignissimos necessitatibus vero! Et repellendus magnam voluptatibus dignissimos earum quasi atque optio deleniti? Quod.</p>
                            <a href="/article_exemple.php" class="card-link">Lien vers l'article</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card pb-2">
                        <img src="/images/img_blog.jpg" alt="des oeufs sur le plat" class="card-img-top">

                        <div class="card-body">
                            <div class="card-title">Test titre card blog</div>
                            <h6 class="card-subtitle mb-2 text-body-secondary"><i class="fa-regular fa-clock"></i>Date</h6>
                            <p class="card-text mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur excepturi, nesciunt provident quisquam nihil natus beatae dignissimos necessitatibus vero! Et repellendus magnam voluptatibus dignissimos earum quasi atque optio deleniti? Quod.</p>
                            <a href="/article_exemple.php" class="card-link">Lien vers l'article</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card pb-2">
                        <img src="/images/img_blog.jpg" alt="des oeufs sur le plat" class="card-img-top">

                        <div class="card-body">
                            <div class="card-title">Test titre card blog</div>
                            <h6 class="card-subtitle mb-2 text-body-secondary"><i class="fa-regular fa-clock"></i>Date</h6>
                            <p class="card-text mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur excepturi, nesciunt provident quisquam nihil natus beatae dignissimos necessitatibus vero! Et repellendus magnam voluptatibus dignissimos earum quasi atque optio deleniti? Quod.</p>
                            <a href="/article_exemple.php" class="card-link">Lien vers l'article</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




</main>
<?php include 'footer.php'; ?>