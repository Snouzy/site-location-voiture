<?php
    ob_start();
    require "model/Voiture.model.php";
    require "controllers/Voiture.controller.php";

?>
    <!--== Login Page Content Start ==-->
<div id="content" class="col-lg-10 col-sm-10">
                

    <div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-user"></i> Gestion des voitures</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <div class="alert alert-warning">Attention toute manipulation entraîne une modification dans la base de donnée, <a href="http://snouzy.com" target="_blank">http://snouzy.com/</a> pour plus d'infos. 
                </div>
                <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                    <thead>
                        <tr style="text-align: center;">
                            <th>Modele</th>
                            <th>Statut</th>
                            <th>Prix</th>
                            <th>Images</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach (Voiture::getAllCarsWithLabels() as $car) { ?>
                        <tr>
                            <td><?= $car->getModele() ?> </td>
                            <td class="center"><?= $car->getStatut() ?></td>
                            <td class="center"><?= $car->getPrixJournalier() ?></td>
                            <td class="center" style="width: 20%">
                                    <?php foreach($car->getImages() as $image) {
                                        echo "<img class='thumbnail-voiture-admin' src='assets/img/car/" . $image['url_image'] .".jpg'/>";
                                    } 
                                    ?>
                            </td>
                            <td class="center">
                                <a class="btn btn-action btn-action-afficher" href="#">
                                    <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                                    Afficher
                                </a>
                                <a class="btn btn-action btn-action-modifier" href="#">
                                    <i class="glyphicon glyphicon-edit icon-white"></i>
                                    Modifier
                                </a>
                                <a class="btn btn-action btn-action-supprimer btn-danger" href="#">
                                    <i class="glyphicon glyphicon-trash icon-white"></i>
                                    Supprimer
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <!--/box-content-->
        </div>
        <!--/box-inner-->
    </div>
    <!--/row-->
</div>
<!--/content-->

    
<?php
    $content = ob_get_clean();
    require_once('views/back/template.back.php');
?>