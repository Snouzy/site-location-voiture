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
                        <h2>Administration</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Le login permet aux administrateurs du site de gérer les annonces et le blog.</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Login Page Content Start ==-->
    <section id="login-page-wrap" class="section-padding">
        <div class="container">
        <?php
            if($alert !== "") { ?> 
                <div class="alert alert-warning" role="alert">
                    <?= trim($alert) ?>
                </div>
        <?php } ?>
            <div class="row">
                <div class="col-lg-4 col-md-8 m-auto">
                	<div class="login-page-content">
                		<div class="login-form">
                			<h3>Welcome Back :) !</h3>
							<form action="" method="POST">
								<div class="username">
									<input type="text" id="login" name="login" placeholder="Email ou identifiant" required>
								</div>
								<div class="password">
									<input type="password" id="password" name="password" placeholder="Mot de passe" required>
								</div>
								<div class="log-btn">
									<input type="submit"><i class="fa fa-sign-in"></i> Se connecter</input>
								</div>
							</form>
                		</div>
                		
                		<div class="login-other">
                			<span class="or">ou</span>
                			<a href="#" class="login-with-btn facebook"><i class="fa fa-facebook"></i> Se connecter avec Facebook</a>
                			<a href="#" class="login-with-btn google"><i class="fa fa-google"></i> Se connecter avec Google</a>
                		</div>
                		<div class="create-ac">
                			<p>Vous n'avez pas de compte ? <a href="register.html">Créer un compte</a></p>
                		</div>
                		<div class="login-menu">
                			<a href="about.html">A propos</a>
                			<span>|</span>
                			<a href="contact.html">Contact</a>
                		</div>
                	</div>
                </div>
        	</div>
        </div>
    </section>
    <!--== Login Page Content End ==-->


<?php
    $content = ob_get_clean();
    require_once('views/template.php');
?>