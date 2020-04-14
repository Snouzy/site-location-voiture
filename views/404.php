<?php 
ob_start();
?>
    <!--== 404 Page Page Content Start ==-->
    <section id="page-404-wrap" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="page-404-content">
                    	<div class="number">
							<div class="four">4</div>
							<div class="zero">
								<img src="assets/img/404.png" alt="JSOFT">
							</div>
							<div class="four">4</div>
                    	</div>
                    	<h4>PAGE NON TROUVÉE !</h4>
                    	<p>Désole, je n'ai pas trouvé la page <br> que tu recherches.</p>
                    	<a href="index.php" class="btn-404-home"><i class="fa fa-home"></i>Retour à l'accueil</a>
                    </div>
                </div>
        	</div>
        </div>
    </section>
    <!--== 404 Page Page Content End ==-->

    <?php 
$content = ob_get_clean();
    require "template.php"
?>