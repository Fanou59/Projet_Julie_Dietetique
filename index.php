<?php $page = 'accueil';
$titrePage = 'Accueil';
include 'header.php';
include 'nav.php'; ?>

<!--header de l'accueil avec une image BG + 1 titre + le même bouton que nav-->
<header class="header__accueil">
    <div class="header__text">
        <h1 class="header__title">Mange et respire !</h1>
        <a class="navbar-brand" href="priseRDV.php">Prenez un RDV</a>

    </div>
</header>
<main>
    <div class="container mt-2 text-center">
        <p class="intro">Le blog, qui te fait manger et bouger sans culpabiliser. Ici, tu trouveras plein d’astuces pour une vie plus légère et sereine, des bonnes nouvelles, de la joie de vivre et des résultats.

            Alors si comme les cornichons, tu tournes en rond, rejoins la communauté Mange et respire pour te dandiner avec ardeur (comme les chou-fleurs : t’as la réf ? )
        </p>
    </div>
    <h2>Mes prestations</h2>

    <!-- CARD_catalogue de service -->
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">

            <div class="col mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-center align-items-center card-title mx-auto mb-5 price">65€</div>

                        <div class="card-title text-center">Première consultation (1h)</div>
                        <p>C’est le premier rdv : on se rencontre, on échange, on partage et surtout je vous écoute avec grande attention. On définit clairement vos objectifs et on met en place un plan de bataille rien que pour vous, 100% personnalisé, un guide qui vous permettra d’atteindre vos rêves :) <br>Je dis bien “on” car je suis là pour vous accompagner. C’est vous qui faites le job, qui vous prenez en main et qui avancez vers ce qui vous rendra fier.e.</p>
                    </div>

                </div>
            </div>

            <div class="col mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-center align-items-center card-title mx-auto mb-5 price">45€</div>
                        <div class="card-title text-center">RDV de suivi (45 min)</div>
                        <p>C’est le deuxième rdv et les suivants (j’espère ! ). Ils permettent d’assurer un suivi, de garder la motivation, de vous féliciter pour les efforts accomplis, de se rebooster, de continuer. </p>
                    </div>
                </div>
            </div>

            <div class="col mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-center align-items-center card-title mx-auto mb-5 price">35€</div>
                        <div class="card-title text-center">Conseils (30 min)</div>
                        <p>C’est un rdv ponctuel qui fait suite à une question, demande particulière, ou un rdv qui rassure avant de se lancer dans un suivi à plus ou moins long terme. </p>
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
        <!--Slider avec les articles de blog pour la version mobile et en version desktop les 3 dernièrs articles-->
        <h2>Nos derniers articles</h2>
        <?php include 'slider_mobile.php' ?> <!--Slider pour le mobile, n'apparait pas en version desktop -->
        <!-- Container avec les 3 derniers article, disparait en version mobile -->
        <div class="container mt-4 d-none d-md-block">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card pb-2">
                        <img src="./images/img_blog.jpg" alt="des oeufs sur le plat" class="card-img-top">

                        <div class="card-body">
                            <div class="card-title">La ciboulette, c'est super chouette !</div>
                            <h6 class="card-subtitle mb-2 text-body-secondary"><i class="fa-regular fa-clock"></i>Date</h6>
                            <p class="card-text mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur excepturi, nesciunt provident quisquam nihil natus beatae dignissimos necessitatibus vero! Et repellendus magnam voluptatibus dignissimos earum quasi atque optio deleniti? Quod.</p>
                            <a href="/article_exemple.php" class="card-link">Lien vers l'article</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card pb-2">
                        <img src="./images/img_blog.jpg" alt="des oeufs sur le plat" class="card-img-top">

                        <div class="card-body">
                            <div class="card-title">Appelle ton avocat !</div>
                            <h6 class="card-subtitle mb-2 text-body-secondary"><i class="fa-regular fa-clock"></i>Date</h6>
                            <p class="card-text mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur excepturi, nesciunt provident quisquam nihil natus beatae dignissimos necessitatibus vero! Et repellendus magnam voluptatibus dignissimos earum quasi atque optio deleniti? Quod.</p>
                            <a href="/article_exemple.php" class="card-link">Lien vers l'article</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card pb-2">
                        <img src="./images/img_blog.jpg" alt="des oeufs sur le plat" class="card-img-top">

                        <div class="card-body">
                            <div class="card-title">Amène ta fraise !</div>
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