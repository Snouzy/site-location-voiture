<?php 
    session_start();
require_once "controllers/frontend.controller.php";
require_once "controllers/backend.controller.php";

if(isset($_GET['page']) && !empty($_GET['page'])) {
    if($_GET['page'] === 'accueil') getHomepage();
    if($_GET['page'] === 'voitures') getCars();
    if($_GET['page'] === 'about') getAbout();
    if($_GET['page'] === 'contact') getContact();
    if($_GET['page'] === 'blog') getBlog();
    if($_GET['page'] === 'prix') getPagePrix();
    if($_GET['page'] === '404') getError();
    if($_GET['page'] === 'details-voiture') getDetails();
    if($_GET['page'] === 'article-details') getArticleDetails();
    if($_GET['page'] === 'chauffeurs') getDrivers();
    if($_GET['page'] === 'FAQ') getFAQ();
    if($_GET['page'] === 'equipe') getTeam();
    if($_GET['page'] === 'login') getLogin();
    if($_GET['page'] === 'admin') getAdmin();
    if($_GET['page'] === 'voitures-admin') getVoituresAdmin();
    if($_GET['page'] === 'edit') getEditPage();
} else {
    getHomepage();
}