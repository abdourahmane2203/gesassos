<!-- Page-header end -->
<div class="pcoded-inner-content">
    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page-body start -->
            <div class="page-body">
                <div class="row">
                    <!-- Material statustic card start -->

                    <!-- Material statustic card end -->
                    <!-- order-visitor start -->


                    <!-- order-visitor end -->



                    <!-- Project statustic start -->
                    <div class="col-xl-12">
                        <div class="card proj-progress-card">
                            <div class="card-block">
                                <div class="row">

                                    <div class="col-xl-4 col-md-6">
                                        <h6>Types d'organisations</h6>
                                        <h5 class="m-b-30 f-w-700"><span class="text-c-green m-l-10"><?= $data[0]['countTypeOrg']; ?></span></h5>
                                        <div class="progress">
                                            <div class="progress-bar bg-c-blue" style="width:65%"></div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6">
                                        <h6>Nombre d'organisations</h6>
                                        <h5 class="m-b-30 f-w-700"><span class="text-c-green m-l-10"><?= $data[0]['countOrg']; ?></span></h5>
                                        <div class="progress">
                                            <div class="progress-bar bg-c-green" style="width:85%"></div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6">
                                        <h6>Membres</h6>
                                        <h5 class="m-b-30 f-w-700"><span class="text-c-green m-l-10"><?= $data[0]['countMembres']; ?></span></h5>
                                        <div class="progress">
                                            <div class="progress-bar bg-c-yellow" style="width:45%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Project statustic end -->

                    <!--  sale analytics start -->
                    <div class="col-xl-12 col-md-12">
                        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
                            + Nouvelle organisation
                        </button>
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
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Nom d'organisation</th>
                                                <th>zone interventions</th>
                                                <th>Theme</th>
                                                <th>Contacts</th>
                                                <th>Adresse</th>
                                                <th>Type organisations</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                <?php foreach ($data[0]['orgs'] as $org) : ?>

                                                    <tr>
                                                        <td>
                                                            <div class="">
                                                                <div class="">
                                                                    <p><?= $org['nom'] ?></p>
                                                                    <p class="text-muted m-b-0"><?= $org['type_organisations'] ?></p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="">
                                                            <h6 class="f-w-700"><?= $org['zone_interventions'] ?><i class="fas fa-level-up-alt text-c-green m-l-10"></i></h6>
                                                        </td>

                                                        <td class="">
                                                            <h6 class="f-w-700"><?= $org['theme'] ?><i class="fas fa-level-up-alt text-c-green m-l-10"></i></h6>
                                                        </td>
                                                        <td class="">
                                                            <h6 class="f-w-700"><?= $org['contacts'] ?><i class="fas fa-level-up-alt text-c-green m-l-10"></i></h6>
                                                        </td>
                                                        <td class="">
                                                            <h6 class="f-w-700"><?= $org['adresse'] ?><i class="fas fa-level-up-alt text-c-green m-l-10"></i></h6>
                                                        </td>

                                                        <td class="">
                                                            <h6 class="f-w-700"><?= $org['type_organisations'] ?><i class="fas fa-level-up-alt text-c-green m-l-10"></i></h6>
                                                        </td>

                                                        <td class="">
                                                            <h6>
                                                                <a class="btn btn-success" href="/gesassos/organisations/membres?id=<?=$org['id'];?>"><i class="text-white fas fa-eye"></i></a>
                                                                <a class="btn btn-primary" data-toggle="modal" data-target="#modalEdit<?= $org['id']; ?>"><i class="text-white fas fa-align-center"></i></a>
                                                                <a class="btn btn-danger" data-toggle="modal" data-target="#modalDelete<?=$org['id'];?>"><i class="text-white fa fa-trash"></i></a>
                                                            </h6>
                                                        </td>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="modalEdit<?= $org['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Organisation</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="col-md-12">
                                                                            <div class="card">
                                                                                <div class="card-header">
                                                                                    <h5>Edit Organisation</h5>
                                                                                </div>
                                                                                <div class="card-block">
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
                                                                                            <button type="submit" class="btn btn-success" value="edit" name="btn_submit">Mettre ?? jour</button>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal fade" id="modalDelete<?=$org['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">suppression d'organisation</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Voulez vous vraiment l'organisation: <?=$org['nom'];?>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">annuler</button>
                                                                    <a type="button" href="/gesassos/organisations/deleteOne/<?= $org['id']; ?>" class="btn btn-success">supprimer</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </tr>
                                                    

                                                    <!-- Modal redirect to members of the organisation selected -->
                                                    <div class="modal fade" id="modalRedirect" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        




                                                <?php endforeach; ?>
                                            </tbody>
                                        
                                    </table>

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



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Organisation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Nouvelle Organisation</h5>
                        </div>
                        <div class="card-block">
                            <form class="form-material" action="/gesassos/Organisations/add" method="post">

                                <div class="form-group form-success">
                                    <label class="">Nom de l'organisation</label>
                                    <input type="text" name="nom" class="form-control">
                                    <span class="form-bar"></span>

                                </div>

                                <div class="form-group form-success">
                                    <label class="">Zone d'intervention</label>
                                    <input type="text" name="zone_interventions" class="form-control">
                                    <span class="form-bar"></span>

                                </div>

                                <div class="form-group form-success">
                                    <label class="">Themes</label>
                                    <input type="text" name="theme" class="form-control">
                                    <span class="form-bar"></span>

                                </div>

                                <div class="form-group form-success">
                                    <label class="">Contacts</label>
                                    <input type="text" name="contacts" class="form-control">
                                    <span class="form-bar"></span>

                                </div>

                                <div class="form-group form-success">
                                    <label class="">Adresse</label>
                                    <input type="text" name="adresse" class="form-control">
                                    <span class="form-bar"></span>

                                </div>

                                <!-- <div class="form-group form-success">
                                    <input type="text" name="footer-email" class="form-control">
                                    <span class="form-bar"></span>
                                    <label class="float-label">Themes</label>
                                </div> -->

                                <div class="form-group form-success">
                                    <label class="">Type d'organisation</label>
                                    <select name="type_organisations" id="" class="form-control">
                                        <option value=""></option>
                                        <?php foreach ($data[0]['typeOrgs'] as $typeOrg) : ?>
                                            <option value="<?= $typeOrg['libelle'] ?>"><?= $typeOrg['libelle'] ?></option>

                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                                    <button type="submit" class="btn btn-success" value="add" name="btn_submit">Ajouter</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready(function() {
        $('#example').DataTable({
            "bInfo": false, //Dont display info e.g. "Showing 1 to 4 of 4 entries"
            "paging": true, //Dont want paging                
            "bPaginate": false, //Dont want paging  
            //"dom": "lfrti",
        });
    });
</script>