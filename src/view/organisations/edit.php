<!-- Page-header end -->
<div class="pcoded-inner-content">
    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page-body start -->
            <div class="page-body">
                <div class="row">

                    <div class="col-xl-12 col-md-12">

                        <div class="card table-card">
                            <div class="card-header">
                                <h5>Liste des organisations</h5>
                                <div class="card-header-right">
                                    <ul class="list-unstyled card-option">
                                        <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                        <li><i class="fa fa-window-maximize full-card"></i></li>
                                        <li><i class="fa fa-minus minimize-card"></i></li>
                                        <li><i class="fa fa-refresh reload-card"></i></li>
                                        <li><i class="fa fa-trash close-card"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-block">
                                <div class="card-block">
                                    <div class="container">
                                        <form class="form-material" action="/gesassos/Organisations/add" method="post">

                                            <div class="form-group form-success">
                                                <label class="">Nom de l'organisation</label>
                                                <input type="text" value="<?= $org['nom'] ?>" name="nom" class="form-control">
                                                <span class="form-bar"></span>

                                            </div>

                                            <div class="form-group form-success">
                                                <label class="">Zone d'intervention</label>
                                                <input type="text" value="<?= $org['zone_interventions'] ?>" name="zone_interventions" class="form-control">
                                                <span class="form-bar"></span>

                                            </div>

                                            <div class="form-group form-success">
                                                <label class="">Themes</label>
                                                <input type="text" value="<?= $org['theme'] ?>" name="theme" class="form-control">
                                                <span class="form-bar"></span>

                                            </div>

                                            <div class="form-group form-success">
                                                <label class="">Contacts</label>
                                                <input type="text" value="<?= $org['contacts'] ?>" name="contacts" class="form-control">
                                                <span class="form-bar"></span>

                                            </div>

                                            <div class="form-group form-success">
                                                <label class="">Adresse</label>
                                                <input type="text" name="adresse" value="<?= $org['adresse'] ?>" class="form-control">
                                                <span class="form-bar"></span>

                                            </div>



                                            <div class="form-group form-success">
                                                <label class="">Type d'organisation</label>
                                                <select name="organisations" id="" class="form-control">
                                                    <option value="<?= $org['type_organisations'] ?>"><?= $org['type_organisations'] ?></option>

                                                    <?php foreach ($data[0]['typeOrgs'] as $typeOrg) : ?>
                                                        <option value="<?= $typeOrg['libelle'] ?>"><?= $typeOrg['libelle'] ?></option>

                                                    <?php endforeach; ?>

                                                </select>
                                                <span class="form-bar"></span>

                                            </div>

                                            <div class="modal-footer">
                                                <input type="hidden" value="<?= $org['id'] ?>" name="id">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">annuler</button>
                                                <button type="submit" class="btn btn-success" value="edit" name="btn_submit">Mettre à jour</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--  sale analytics end -->
                    </div>
                </div>
                <!-- Page-body end -->
            </div>
            <div id="styleSelector"> </div>
        </div>
    </div>