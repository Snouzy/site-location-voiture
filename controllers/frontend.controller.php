<?php 

function getHomepage() {
    $title = "Accueil";
    require_once "views/homepage.view.php";
}

function getContact() {
    $title = "contact";
    require_once "views/contact.view.php";
}
function getAbout() {
    $title = "About";
    require_once "views/about.view.php";
}
function getCars() {
    $title = "Voitures à louer";
    require_once "views/voitures-list.view.php";
}
function getBlog() {
    $title = "Blog";
    require_once "views/blog.view.php";
}
function getError() {
    $title = "Erreur";
    require_once "views/404.php";
}

function getDetails() {
    $title = "Details";
    require_once "views/details-voiture.view.php";
}

function getArticleDetails() {
    $title = "Article";
    require_once "views/article-details.view.php";
}

function getDrivers() {
    $title = "Chaffeurs";
    require_once "views/drivers.view.php";
}
function getFAQ() {
    $title = "Foire aux questions";
    require_once "views/faq.view.php";
}
function getTeam() {
    $title = "L'équipe";
    require_once "views/team.view.php";
}
function getPagePrix() {
    $title = "Détails des prix";
    require_once "views/prix.view.php";
}