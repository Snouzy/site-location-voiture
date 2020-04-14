<?php
    ob_start();
?>
<!-- https://bootstrapious.com/p/bootstrap-sidebar -->

    <!-- Page Content  -->
    <h2>Bienvenue sur l'interface d'administration d'Alsacar</h2>
    <p>Ici, vous pouvez gérer l'intégralité du site web :
        <br/>- Ajouter une voiture
        <br/>- Modifier une voiture
        <br/>- Supprimer une voitures
        <br/>- Gérer les utilisateurs, etc...
    </p>
    <p>Si vous voulez disposer d'un compte administrateur merci de s'adresser au gérant du site : Mathias Bradiceanu.</p>

    <div class="line"></div>

    <h2>A propos du site</h2>
    <p>Ce site web est un site fictif réalié par moi même (Mathias Bradiceanu) dans le but de pratiquer et d'établir un projet "réel" qui pourrait être vendu à une entreprise de location en HTML/CSS JS et surtout en PHP MVC et MySQL. </p>

    <div class="line"></div>

    <h2>Retrouvez-moi ou me contacter :</h2>
    <div style="display: block; position: static; visibility: visible;">
        <p>Vous pouvez me contacter via téléphone au <a>06 26 66 08 42</a>, par mail à <a href="mailto:mathiasnouzy@gmail.com">mathiasnouzy@gmail.com</a>, par le <a href="#contact">formulaire de contact</a> du site ou encore sur mes réseaux :</p>
        <ul class="circled">
        <li><a href="https://www.linkedin.com/in/mathias-bradiceanu-3410b1ab/"> - Linkedin</a></li>
        <li><a href="https://twitter.com/BradiceanuM"> - Twitter</a></li>
        <li><a href="https://github.com/Snouzy"> - Github</a></li>
        </ul>
        <p>Vous pouvez aussi jeter un coup d'oeil à mon <a href="https://www.instagram.com/snouz.code/">Instagram</a> dédié au Javascript où je poste des astuces <sub>presque</sub> quotidiennement !</p>
    </div>

<?php
    $content = ob_get_clean();
    require_once('views/back/template.back.php');
?>