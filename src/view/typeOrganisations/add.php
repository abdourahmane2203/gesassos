
<!-- Page-header end -->
<div class="pcoded-inner-content">
    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page-body start -->
            <div class="page-body">

                <!-- Project statustic end -->

                <!--  sale analytics start -->

                <div class="col-xl-12 col-md-12">
                    <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
                        + Nouvel type d'organisation
                    </button>

                    <div class="card table-card">
                        <div class="card-header">
                            <h5>Liste des types d'organisations</h5>
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
                                            <th>Type</th>
                                            <th>Description</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($data['typeOrg'] as $typeOrg) : ?>
                                            <tr>
                                                <td>
                                                    <div class="d-inline-block align-middle">
                                                        <!-- <img src="../src/view/assets/images/avatar-.jpg" alt="user image" class="img-radius img-40 align-top m-r-15"> -->
                                                        <div class="d-inline-block">
                                                            <h6><?= $typeOrg['libelle'] ?></h6>
                                                            <p class="text-muted m-b-0"><?= $typeOrg['description'] ?></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <?= $typeOrg['description'] ?>
                                                    <i class="fas fa-level-up-alt text-c-green m-l-10"></i>
                                                </td>
                                                <td class="">
                                                    <h6>
                                                        <a class="btn btn-primary" data-toggle="modal" data-target="#modalEdit<?= $typeOrg['id']; ?>"><i class="text-white fas fa-align-center"></i></a>
                                                        <a class="btn btn-danger" data-toggle="modal" data-target="#modalDelete<?= $typeOrg['id']; ?>"><i class="text-white fa fa-trash"></i></a>
                                                    </h6>

                                                </td>

                                                <div class="modal fade" id="modalDelete<?= $typeOrg['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Suppression type d'organisation</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Voulez vous vraiment supprime ce type d'organisation: <?= $typeOrg['libelle']; ?>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">annuler</button>
                                                                <a type="button" href="/gesassos/typeOrganisations/deleteOne/<?= $typeOrg['id']; ?>" class="btn btn-success">supprimer</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Modal -->
                                                <div class="modal fade" id="modalEdit<?= $typeOrg['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Type d'Organisation</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="col-md-12">
                                                                    <div class="card">
                                                                        <div class="card-header">
                                                                            <h5>Edit type d'Organisation</h5>
                                                                        </div>

                                                                        <div class="card-block">
                                                                            <form class="form-material" action="/gesassos/TypeOrganisations/add" method="post">

                                                                                <div class="form-group form-success">
                                                                                    <label class="float-label">Type</label>
                                                                                    <input type="text" value="<?= $typeOrg['libelle'] ?>" name="libelle" class="form-control">
                                                                                    <span class="form-bar"></span>

                                                                                </div>

                                                                                <div class="form-group form-success">
                                                                                    <label class="float-label">Description</label>
                                                                                    <textarea name="desc" id="" cols="7" rows="5" class="form-control">
                                                                                <?= $typeOrg['description'] ?>
                                                                                </textarea>
                                                                                    <span class="form-bar"></span>

                                                                                </div>

                                                                                <div class="modal-footer">
                                                                                    <input type="hidden" name="id" value="<?= $typeOrg['id']; ?>">
                                                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                                                                                    <button type="submit" name="btn_submit" value="edit" class="btn btn-success">Mettre à jour</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </tr>
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
                <h5 class="modal-title" id="exampleModalLabel">Type d'Organisation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Nouvel type d'Organisation</h5>
                        </div>

                        <div class="card-block">
                            <form class="form-material" action="/gesassos/TypeOrganisations/add" method="post">

                                <div class="form-group form-success">
                                    <input type="text" name="libelle" class="form-control">
                                    <span class="form-bar"></span>
                                    <label class="float-label">Type</label>
                                </div>

                                <div class="form-group form-success">
                                    <textarea name="desc" id="" cols="100" rows="300" class="form-control"></textarea>
                                    <span class="form-bar"></span>
                                    <label class="float-label">Description</label>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                                    <button type="submit" name="btn_submit" value="add" class="btn btn-success">Ajouter</button>
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