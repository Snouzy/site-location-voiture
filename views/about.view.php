<?php 
ob_start();
?>

<!--== Page Title Area Start ==-->
<section id="page-title-area" class="section-padding overlay">
<div class="container">
<div class="row">
<!-- Page Title Start -->
<div class="col-lg-12">
<div class="section-title  text-center">
    <h2>Qui sommes nous</h2>
    <span class="title-line"><i class="fa fa-car"></i></span>
    <p>Une entreprise familiale depuis plus de 50ans.</p>
</div>
</div>
<!-- Page Title End -->
</div>
</div>
</section>
<!--== Page Title Area End ==-->

<!--== About Page Content Start ==-->
<section id="about-area" class="section-padding">
<div class="container">
<div class="row">
<!-- Section Title Start -->
<div class="col-lg-12">
<div class="section-title  text-center">
    <h2>A PROPOS DE NOUS</h2>
    <span class="title-line"><i class="fa fa-car"></i></span>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
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
        </div>
    </div>
</div>
</div>
<!-- About Content End -->

<!-- About Video Start -->
<div class="col-lg-6">
<div class="about-image">
    <img src="assets/img/home-2-about.png" alt="JSOFT">
</div>
</div>
<!-- About Video End -->
</div>

<!-- About Fretutes Start -->
<div class="about-feature-area">
<div class="row">
<!-- Single Fretutes Start -->
<div class="col-lg-4">
    <div class="about-feature-item active">
        <i class="fa fa-car"></i>
        <h3>TOUT TYPE</h3>
        <p>Loremed ipsumed is a compnayes odsoyel dolor sit amet, consectetur adipisicing elit. Nesciunted all of.</p>
    </div>
</div>
<!-- Single Fretutes End -->

<!-- Single Fretutes Start -->
<div class="col-lg-4">
    <div class="about-feature-item">
        <i class="fa fa-car"></i>
        <h3>TOUTES MARQUES</h3>
        <p>Loremed ipsumed is a compnayes odsoyel dolor sit amet, consectetur adipisicing elit. Nesciunted all of.</p>
    </div>
</div>
<!-- Single Fretutes End -->

<!-- Single Fretutes Start -->
<div class="col-lg-4">
    <div class="about-feature-item">
        <i class="fa fa-car"></i>
        <h3>COMME NEUVES</h3>
        <p>Loremed ipsumed is a compnayes odsoyel dolor sit amet, consectetur adipisicing elit. Nesciunted all of.</p>
    </div>
</div>
<!-- Single Fretutes End -->
</div>
</div>
<!-- About Fretutes End -->
</div>
</section>
<!--== About Page Content End ==-->

<!--== Our Facility Content Start ==-->
<section id="our-facility" class="section-padding overlay">
<div class="container">
<div class="row">
<!-- Single Facility Start -->
<div class="col-lg-3 col-md-6">
<div class="single-our-facility">
    <h3>TRAJET <br />D'APRES SOIREE</h3>
    <ul>
        <li>Parallax Everywhere</li>
        <li>Interactive and Fun</li>
        <li>Responsive and Refined</li>
        <li>Color it All</li>
        <li>Customize and Create</li>
    </ul>
</div>
</div>
<!-- Single Facility Start -->

<!-- Single Facility Start -->
<div class="col-lg-3 col-md-6">
<div class="single-our-facility">
    <h3>TRAJET <br />BUSINESS</h3>
    <ul>
        <li>Parallax Everywhere</li>
        <li>Interactive and Fun</li>
        <li>Responsive and Refined</li>
        <li>Color it All</li>
        <li>Customize and Create</li>
    </ul>
</div>
</div>
<!-- Single Facility Start -->

<!-- Single Facility Start -->
<div class="col-lg-3 col-md-6">
<div class="single-our-facility">
    <h3>HOTEL/CASINO/<br/>RESTAURANT</h3>
    <ul>
        <li>Parallax Everywhere</li>
        <li>Interactive and Fun</li>
        <li>Responsive and Refined</li>
        <li>Color it All</li>
        <li>Customize and Create</li>
    </ul>
</div>
</div>
<!-- Single Facility Start -->

<!-- Single Facility Start -->
<div class="col-lg-3 col-md-6">
<div class="single-our-facility">
    <h3>TRANSPORT AEROPORTUAIRE</h3>
    <ul>
        <li>Parallax Everywhere</li>
        <li>Interactive and Fun</li>
        <li>Responsive and Refined</li>
        <li>Color it All</li>
        <li>Customize and Create</li>
    </ul>
</div>
</div>
<!-- Single Facility Start -->  
</div>
</div>
</section>
<!--== Our Facility Content End ==-->

<?php 
$content = ob_get_clean();
    require "template.php"
?>