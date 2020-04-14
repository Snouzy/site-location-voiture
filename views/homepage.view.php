<?php 
ob_start();
require "model/Voiture.model.php";
require "controllers/Voiture.controller.php";

// A l'ouverture, on charge toutes les voitures depuis la DB
// Puis on en fait des instances de Voiture
// Enfin, on stock toutes les voitures dans : Voiture::$allVoitures

?>
<!--== Slider Area Start ==-->
<section id="slider-area">
    <!--== slide Item One ==-->
    <div class="single-slide-item overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="book-a-car">
                        <form action="index.php">
                            <!--== Pick Up Location ==-->
                            <div class="pickup-location book-item">
                                <h4>Choisissez une ville:</h4>
                                <select class="custom-select">
                                    <option selected>Sélectionnez</option>
                                    <option value="strasbourg">Strasbourg</option>
                                    <option value="colmar">Colmar</option>
                                    <option value="mulhouse">Mulhouse</option>
                                </select>
                            </div>
                            <!--== Pick Up Location ==-->

                            <!--== Pick Up Date ==-->
                            <div class="pick-up-date book-item">
                                <h4>Choisissez une date :</h4>
                                <input id="startDate" placeholder="Choisissez une date" />

                                <div class="return-car">
                                    <h4>Date de retour :</h4>
                                    <input id="endDate" placeholder="Date de retour" />
                                </div>
                            </div>
                            <!--== Pick Up Location ==-->

                            <!--== Car Choose ==-->
                            <div class="choose-car-type book-item">
                                <h4>Type de véhicule :</h4>
                                <select class="custom-select">
                                    <option selected>Choisir</option>
                                    <option value="bmw">BMW</option>
                                    <option value="audi">Audi</option>
                                    <option value="mercedes">Mercedes</option>
                                </select>
                            </div>
                            <!--== Car Choose ==-->

                            <div class="book-button text-center">
                                <button class="book-now-btn">LOUER</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-7 text-right">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <div class="slider-right-text">
                                <h1>ALSACIENS ! <br /> LOUEZ UNE VOITURE LUXUEUSE AUJOURD'HUI!</h1>
                                <p>MOINS DE 100€ / JOUR ET 15% de REDUCTION <br>(pour les clients réguliers)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== slide Item One ==-->
</section>
<!--== Slider Area End ==-->

<!--== About Us Area Start ==-->
<section id="about-area" class="section-padding">
    <div class="container">
        <div class="row">
            <!-- Section Title Start -->
            <div class="col-lg-12">
                <div class="section-title  text-center">
                    <h2>Qui sommes-nous</h2>
                    <span class="title-line"><i class="fa fa-car"></i></span>
                    <p>Une entreprise familiale de luxe, du bas-rhin.</p>
                </div>
            </div>
            <!-- Section Title End -->
        </div>

        <div class="row">
            <!-- About Content Start -->
            <div class="col-lg-6">
                <div class="display-table">
                    <div class="display-table-cell">
                        <div class="about-content">
                            <p>Lorem simply dummy is a texted of the printing costed and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi aliquid debitis optio praesentium, voluptate repellat accusantium deserunt eius.</p>
                            <div class="about-btn">
                                <a href="#">LOUEZ MAINTENANT</a>
                                <a href="contact.php">NOUS CONTACTER</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Content End -->

            <!-- About Video Start -->
            <div class="col-lg-6">
                <div class="about-video">
                    <iframe src="https://player.vimeo.com/video/121982328?title=0&byline=0&portrait=0"></iframe>
                </div>
            </div>
            <!-- About Video End -->
        </div>
    </div>
</section>
<!--== About Us Area End ==-->

<!--== Partner Area Start ==-->
<div id="partner-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="partner-content-wrap">
                    <!-- Single Partner Start -->
                    <div class="single-partner">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <img src="assets/img/partner/partner-logo-1.png" alt="JSOFT">
                            </div>
                        </div>
                    </div>
                    <!-- Single Partner End -->

                    <!-- Single Partner Start -->
                    <div class="single-partner">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <img src="assets/img/partner/partner-logo-2.png" alt="JSOFT">
                            </div>
                        </div>
                    </div>
                    <!-- Single Partner End -->

                    <!-- Single Partner Start -->
                    <div class="single-partner">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <img src="assets/img/partner/partner-logo-3.png" alt="JSOFT">
                            </div>
                        </div>
                    </div>
                    <!-- Single Partner End -->

                    <!-- Single Partner Start -->
                    <div class="single-partner">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <img src="assets/img/partner/partner-logo-4.png" alt="JSOFT">
                            </div>
                        </div>
                    </div>
                    <!-- Single Partner End -->

                    <!-- Single Partner Start -->
                    <div class="single-partner">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <img src="assets/img/partner/partner-logo-5.png" alt="JSOFT">
                            </div>
                        </div>
                    </div>
                    <!-- Single Partner End -->

                    <!-- Single Partner Start -->
                    <div class="single-partner">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <img src="assets/img/partner/partner-logo-1.png" alt="JSOFT">
                            </div>
                        </div>
                    </div>
                    <!-- Single Partner End -->

                    <!-- Single Partner Start -->
                    <div class="single-partner">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <img src="assets/img/partner/partner-logo-4.png" alt="JSOFT">
                            </div>
                        </div>
                    </div>
                    <!-- Single Partner End -->
                </div>
            </div>
        </div>
    </div>
</div>
<!--== Partner Area End ==-->


<!--== Fun Fact Area Start ==-->
<section id="funfact-area" class="overlay section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-11 col-md-12 m-auto">
                <div class="funfact-content-wrap">
                    <div class="row">
                        <!-- Single FunFact Start -->
                        <div class="col-lg-4 col-md-6">
                            <div class="single-funfact">
                                <div class="funfact-icon">
                                    <i class="fa fa-smile-o"></i>
                                </div>
                                <div class="funfact-content">
                                    <p><span class="counter">550</span>+</p>
                                    <h4>CLIENTS SATISFAITS</h4>
                                </div>
                            </div>
                        </div>
                        <!-- Single FunFact End -->

                        <!-- Single FunFact Start -->
                        <div class="col-lg-4 col-md-6">
                            <div class="single-funfact">
                                <div class="funfact-icon">
                                    <i class="fa fa-car"></i>
                                </div>
                                <div class="funfact-content">
                                    <p>+<span class="counter">250</span></p>
                                    <h4>VOITURES EN STOCK</h4>
                                </div>
                            </div>
                        </div>
                        <!-- Single FunFact End -->

                        <!-- Single FunFact Start -->
                        <div class="col-lg-4 col-md-6">
                            <div class="single-funfact">
                                <div class="funfact-icon">
                                    <i class="fa fa-bank"></i>
                                </div>
                                <div class="funfact-content">
                                    <p>+<span class="counter">50</span></p>
                                    <h4>AGENCES</h4>
                                </div>
                            </div>
                        </div>
                        <!-- Single FunFact End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Fun Fact Area End ==-->

<!--== Choose Car Area Start ==-->
<section id="choose-car" class="section-padding">
    <div class="container">
        <div class="row">
            <!-- Section Title Start -->
            <div class="col-lg-12">
                <div class="section-title  text-center">
                    <h2>CHOISISSEZ VOTRE VOITURE</h2>
                    <span class="title-line"><i class="fa fa-car"></i></span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>
            <!-- Section Title End -->
        </div>

        <div class="row">
            <!-- Choose Area Content Start -->
            <div class="col-lg-12">
                <div class="choose-content-wrap">
                    <!-- Choose Area Tab Menu -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#popular_cars" role="tab" aria-selected="true">Voiture populaires</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#newest_cars" role="tab" aria-selected="false">Nouveautés</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#office_map" role="tab" aria-selected="false">L'agence</a>
                        </li>
                    </ul>
                    <!-- Choose Area Tab Menu -->

                    <!-- Choose Area Tab content -->
                    <div class="tab-content" id="myTabContent">
                        <!-- Popular Cars Tab Start -->
                        <div class="tab-pane fade show active" id="popular_cars" role="tabpanel" aria-labelledby="home-tab">
                            <!-- Popular Cars Content Wrapper Start -->
                            <div class="popular-cars-wrap">
                                <!-- Filtering Menu -->
                                <div class="popucar-menu text-center">
                                    <a href="#" data-filter="*" class="active">Tout</a>
                                    <a href="#" data-filter=".sport">Sport</a>
                                    <a href="#" data-filter=".4x4">4x4</a>
                                    <a href="#" data-filter=".citadines">Citadines</a>
                                    <a href="#" data-filter=".suv">SUV</a>
                                </div>
                                <!-- End Filtering Menu -->

                                <!-- PopularCars Tab Content Start -->
                                <div class="row popular-car-gird">
                                    <!-- Single Popular Car Start -->
                                    <?php foreach(Voiture::getAllCarsWithLabels() as $car) {
                                        echo '<div class="col-lg-4 col-md-4 '. $car->getType() .'">';
                                            echo '<div class="single-popular-car">';
                                                echo '<div class="p-car-thumbnails">';
                                                    echo '<a class="car-hover" href="assets/img/car/' . $car->getImages()[0]['url_image'] . '.jpg">';
                                                        echo '<img src="assets/img/car/' . $car->getImages()[0]['url_image'] . '.jpg" alt="JSOFT">';
                                                    echo '</a>';
                                                echo '</div>';

                                                echo '<div class="p-car-content">';
                                                    echo '<h3>';
                                                        echo '<a href="#">' . $car->getModele() . '</a>';
                                                        echo '<span class="price"><i class="fa fa-tag"></i>' . $car->getPrixJournalier() . '€</span>';
                                                    echo '</h3>';

                                                    echo '<h5>' . $car->getChevaux()  .' CH </h5>';

                                                    echo '<div class="p-car-feature">';
                                                        echo '<a href="#">' . $car->getAnnee() . '</a>';
                                                        echo '<a href="#">' . $car->getMotorisation() . '</a>';
                                                        echo '<a href="#">' . $car->getBoite() . '</a>';
                                                        echo '<a href="#">' . $car->getStatut() .'</a>';
                                                    echo '</div>';
                                                    
                                                echo '</div>';
                                            echo '</div>';
                                        echo '</div>';
                                    }
                                    ?>
                                    <div class="col-lg-4 col-md-6 sport">
                                        <div class="single-popular-car">
                                            <div class="p-car-thumbnails">
                                                <a class="car-hover" href="assets/img/car/car-1.jpg">
                                                    <img src="assets/img/car/car-1.jpg" alt="JSOFT">
                                                </a>
                                            </div>

                                            <div class="p-car-content">
                                                <h3>
                                                    <a href="#">Dodge Rasm 1500</a>
                                                    <span class="price"><i class="fa fa-tag"></i> $55/day</span>
                                                </h3>

                                                <h5>HATCHBACK</h5>

                                                <div class="p-car-feature">
                                                    <a href="#">2017</a>
                                                    <a href="#">manual</a>
                                                    <a href="#">AIR CONDITION</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Popular Car End -->
                                </div>
                                <!-- PopularCars Tab Content End -->
                            </div>
                            <!-- Popular Cars Content Wrapper End -->
                        </div>
                        <!-- Popular Cars Tab End -->

                        <!-- Newest Cars Tab Start -->
                        <div class="tab-pane fade" id="newest_cars" role="tabpanel" aria-labelledby="profile-tab">
                            <!-- Newest Cars Content Wrapper Start -->
                            <div class="popular-cars-wrap">
                                <!-- Filtering Menu -->
                                <div class="newcar-menu text-center">
                                    <a href="#" data-filter="*" class="active">Toutes</a>
                                    <a href="#" data-filter=".toyota">toyota</a>
                                    <a href="#" data-filter=".bmw">bmw</a>
                                    <a href="#" data-filter=".audi">audi</a>
                                    <a href="#" data-filter=".tata">Tata</a>
                                </div>

                                <!-- Filtering Menu -->

                                <!-- NewestCars Tab Content Start -->
                                <div class="row newest-car-gird">
                                    <!-- Single Newest Car Start -->
                                    <div class="col-lg-4 col-md-6 tata audi">
                                        <div class="single-new-car">
                                            <div class="p-car-thumbnails">
                                                <a class="car-hover" href="assets/img/car/car-6.jpg">
                                                    <img src="assets/img/car/car-6.jpg" alt="JSOFT">
                                                </a>
                                            </div>

                                            <div class="p-car-content">
                                                <h3>
                                                    <a href="#">Toyota RAV4 EV</a>
                                                    <span class="price"><i class="fa fa-tag"></i> $35/day</span>
                                                </h3>

                                                <h5>Toyota</h5>

                                                <div class="p-car-feature">
                                                    <a href="#">2018</a>
                                                    <a href="#">Auto</a>
                                                    <a href="#">Non AIR CONDITION</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Newest Car End -->

                                    <!-- Single Newest Car Start -->
                                    <div class="col-lg-4 col-md-6 bmw tata toyota">
                                        <div class="single-new-car">
                                            <div class="p-car-thumbnails">
                                                <a class="car-hover" href="assets/img/car/car-5.jpg">
                                                    <img src="assets/img/car/car-5.jpg" alt="JSOFT">
                                                </a>
                                            </div>

                                            <div class="p-car-content">
                                                <h3>
                                                    <a href="#">Toyota RAV4 EV</a>
                                                    <span class="price"><i class="fa fa-tag"></i> $35/day</span>
                                                </h3>

                                                <h5>Toyota</h5>

                                                <div class="p-car-feature">
                                                    <a href="#">2018</a>
                                                    <a href="#">Auto</a>
                                                    <a href="#">Non AIR CONDITION</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Newest Car End -->

                                    <!-- Single Newest Car Start -->
                                    <div class="col-lg-4 col-md-6 bmw">
                                        <div class="single-new-car">
                                            <div class="p-car-thumbnails">
                                                <a class="car-hover" href="assets/img/car/car-4.jpg">
                                                    <img src="assets/img/car/car-4.jpg" alt="JSOFT">
                                                </a>
                                            </div>

                                            <div class="p-car-content">
                                                <h3>
                                                    <a href="#">Toyota RAV4 EV</a>
                                                    <span class="price"><i class="fa fa-tag"></i> $35/day</span>
                                                </h3>

                                                <h5>Toyota</h5>

                                                <div class="p-car-feature">
                                                    <a href="#">2018</a>
                                                    <a href="#">Auto</a>
                                                    <a href="#">Non AIR CONDITION</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Newest Car End -->
                                </div>
                                <!-- NewestCars Tab Content End -->
                            </div>
                            <!-- Newest Cars Content Wrapper End -->
                        </div>
                        <!-- Newest Cars Tab End -->

                        <!-- Office Map Tab -->
                        <div class="tab-pane fade" id="office_map" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="map-area">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2639.5881110314767!2d7.747193215664541!3d48.57943717926112!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4796c85329f6d1a9%3A0x89e3c17c79060df7!2sRue%20de%20la%20Douane%2C%2067000%20Strasbourg!5e0!3m2!1sfr!2sfr!4v1586537341887!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                        </div>
                        <!-- Office Map Tab -->
                    </div>
                    <!-- Choose Area Tab content -->
                </div>
            </div>
            <!-- Choose Area Content End -->
        </div>
    </div>
</section>
<!--== Choose Car Area End ==-->

<!--== Articles Area Start ==-->
<section id="tips-article-area" class="section-padding">
    <div class="container">
        <div class="row">
            <!-- Section Title Start -->
            <div class="col-lg-12">
                <div class="section-title  text-center">
                    <h2>Blog</h2>
                    <span class="title-line"><i class="fa fa-car"></i></span>
                    <p>Toutes les nouveautés et les conseils.</p>
                </div>
            </div>
            <!-- Section Title End -->
        </div>

        <!-- Articles Content Wrap Start -->
        <div class="row">
            <!-- Single Articles Start -->
            <div class="col-lg-12">
                <article class="single-article">
                    <div class="row">
                        <!-- Articles Thumbnail Start -->
                        <div class="col-lg-5">
                            <div class="article-thumb">
                                <img src="assets/img/article/arti-thumb-1.jpg" alt="JSOFT">
                            </div>
                        </div>
                        <!-- Articles Thumbnail End -->

                        <!-- Articles Content Start -->
                        <div class="col-lg-7">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <div class="article-body">
                                        <h3><a href="article-details.html">Wliquam sit amet urna eullam</a></h3>
                                        <div class="article-meta">
                                            <a href="#" class="author">By :: <span>Admin</span></a>
                                            <a href="#" class="comment">Comments :: <span>10</span></a>
                                        </div>

                                        <div class="article-date">25 <span class="month">jan</span></div>

                                        <p>Wlam aiber vestibulum fringilla oremedad ipsum dolor sit amet consectetur adipisicing elit sed doned eiusmod tempored incididunt ut labore et dolore magna aliquaa enimd ad minim veniad.</p>

                                        <a href="article-details.html" class="readmore-btn">LIRE PLUS... <i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Articles Content End -->
                    </div>
                </article>
            </div>
            <!-- Single Articles End -->

            <!-- Single Articles Start -->
            <div class="col-lg-12">
                <article class="single-article middle">
                    <div class="row">

                        <!-- Articles Thumbnail Start -->
                        <div class="col-lg-5 d-xl-none">
                            <div class="article-thumb">
                                <img src="assets/img/article/arti-thumb-2.jpg" alt="JSOFT">
                            </div>
                        </div>
                        <!-- Articles Thumbnail End -->

                        <!-- Articles Content Start -->
                        <div class="col-lg-7">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <div class="article-body">
                                        <h3><a href="article-details.html">fringilla oremedad ipsum dolor sit</a></h3>
                                        <div class="article-meta">
                                            <a href="#" class="author">By :: <span>Admin</span></a>
                                            <a href="#" class="comment">Comments :: <span>10</span></a>
                                        </div>

                                        <div class="article-date">14<span class="month">feb</span></div>

                                        <p>Wlam aiber vestibulum fringilla oremedad ipsum dolor sit amet consectetur adipisicing elit sed doned eiusmod tempored incididunt ut labore et dolore magna aliquaa enimd ad minim veniad.</p>

                                        <a href="article-details.html" class="readmore-btn">Read More <i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Articles Content End -->

                        <!-- Articles Thumbnail Start -->
                        <div class="col-lg-5 d-none d-xl-block">
                            <div class="article-thumb">
                                <img src="assets/img/article/arti-thumb-2.jpg" alt="JSOFT">
                            </div>
                        </div>
                        <!-- Articles Thumbnail End -->
                    </div>
                </article>
            </div>
            <!-- Single Articles End -->

            <!-- Single Articles Start -->
            <div class="col-lg-12">
                <article class="single-article">
                    <div class="row">
                        <!-- Articles Thumbnail Start -->
                        <div class="col-lg-5">
                            <div class="article-thumb">
                                <img src="assets/img/article/arti-thumb-3.jpg" alt="JSOFT">
                            </div>
                        </div>
                        <!-- Articles Thumbnail End -->

                        <!-- Articles Content Start -->
                        <div class="col-lg-7">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <div class="article-body">
                                        <h3><a href="article-details.html">Tempored incididunt ut labore</a></h3>
                                        <div class="article-meta">
                                            <a href="#" class="author">By :: <span>Admin</span></a>
                                            <a href="#" class="comment">Comments :: <span>10</span></a>
                                        </div>

                                        <div class="article-date">17 <span class="month">feb</span></div>

                                        <p>Wlam aiber vestibulum fringilla oremedad ipsum dolor sit amet consectetur adipisicing elit sed doned eiusmod tempored incididunt ut labore et dolore magna aliquaa enimd ad minim veniad.</p>

                                        <a href="article-details.html" class="readmore-btn">Read More <i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Articles Content End -->
                    </div>
                </article>
            </div>
            <!-- Single Articles End -->
        </div>
        <!-- Articles Content Wrap End -->
    </div>
</section>
<!--== Articles Area End ==-->
<?php 
$content = ob_get_clean();
    require "template.php"
?>