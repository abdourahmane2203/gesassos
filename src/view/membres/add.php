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

                    <!-- Project statustic end -->

                    <!--  sale analytics start -->
                    <div class="col-xl-12 col-md-12">
                        <div class="mb-3"><button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModal">
                                + Nouvel membre
                            </button></div>
                        <div class="card table-card">
                            <div class="card-header">
                                <h5>Liste des membres</h5>
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
                                                <th>Nom et Prénom</th>
                                                <th>Telephone</th>
                                                <th>Email</th>
                                                <th>adresse</th>
                                                <th>Organisation</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($data[0]['membres'] as $membre) : ?>
                                                <tr>
                                                    <td>
                                                        <div class="d-inline-block align-middle">
                                                            <!-- <img src="../src/view/assets/images/avatar-4.jpg" alt="user image" class="img-radius img-40 align-top "> -->
                                                            <div class="d-inline-block">
                                                                <h6><?= $membre['prenoms'] . ' ' . $membre['nom'] ?></h6>
                                                                <p class="text- m-b-0"><?= $membre['organisations_name'] ?></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <h6 class="f-w-700"><?= $membre['telephone'] ?><i class="fas fa-level-up-alt text-c-green m-l-10"></i></h6>
                                                    </td>

                                                    <td class="">
                                                        <h6 class="f-w-700"><?= $membre['email'] ?><i class="fas fa-level-up-alt text-c-green m-l-10"></i></h6>
                                                    </td>
                                                    <td class="">
                                                        <h6 class="f-w-700"><?= $membre['adresse'] ?><i class="fas fa-level-up-alt text-c-green m-l-10"></i></h6>
                                                    </td>
                                                    <td class="">
                                                        <h6 class="f-w-700"><?= $membre['organisations_name'] ?><i class="fas fa-level-up-alt text-c-green m-l-10"></i></h6>
                                                    </td>
                                                    <td class="">
                                                        <h6>
                                                            <!-- <a class="btn btn-success" href=""><i class="fas fa-eye"></i></a> -->
                                                            <a class="btn btn-primary" data-toggle="modal" data-target="#modalEdit<?= $membre['id']; ?>"><i class="text-white fas fa-align-center"></i></a>
                                                            <a class="btn btn-danger" data-toggle="modal" data-target="#modalDelete<?= $membre['id']; ?>"><i class="text-white fa fa-trash"></i></a>
                                                        </h6>
                                                    </td>

                                                    <div class="modal fade" id="modalDelete<?= $membre['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">suppression membre</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Voulez vous vraiment supprimer ce membre : <?= $membre['prenoms'] . ' ' . $membre['nom'] ?>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">annuler</button>
                                                                    <a type="button" href="/gesassos/membres/deleteOne/<?= $membre['id']; ?>" class="btn btn-success">supprimer</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="modal fade" id="modalEdit<?= $membre['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Membre</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="col-md-12">
                                                                        <div class="card">
                                                                            <div class="card-header">
                                                                                <h5>Edit membre</h5>
                                                                            </div>

                                                                            <div class="card-block">
                                                                                <form class="form-material" action="" method="post">

                                                                                    <div class="form-group form-success">
                                                                                        <label class="">Nom</label>
                                                                                        <input type="text" value="<?= $membre['nom']; ?>" name="nom" class="form-control">
                                                                                        <span class="form-bar"></span>

                                                                                    </div>

                                                                                    <div class="form-group form-success">
                                                                                        <label class="">Prenom</label>
                                                                                        <input type="text" value="<?= $membre['prenoms']; ?>" name="prenoms" class="form-control">
                                                                                        <span class="form-bar"></span>

                                                                                    </div>

                                                                                    <div class="form-group form-success">
                                                                                        <label class="">Telephone</label>
                                                                                        <input type="text" value="<?= $membre['telephone']; ?>" name="telephone" class="form-control">
                                                                                        <span class="form-bar"></span>

                                                                                    </div>

                                                                                    <div class="form-group form-success">
                                                                                        <input type="text" value="<?= $membre['adresse']; ?>" name="adresse" class="form-control">
                                                                                        <span class="form-bar"></span>
                                                                                        <label class="">Adresse</label>
                                                                                    </div>

                                                                                    <div class="form-group form-success">
                                                                                        <label class="">Email</label>
                                                                                        <input type="text" value="<?= $membre['email']; ?>" name="email" class="form-control">
                                                                                        <span class="form-bar"></span>

                                                                                    </div>

                                                                                    <div class="form-group form-success">
                                                                                        <label class="">Organisation</label>
                                                                                        <select name="organisations_id" id="" class="form-control">
                                                                                            <option value="<?= $membre['organisations_id'] ?>"><?= $membre['organisations_name'] ?></option>
                                                                                            <?php foreach ($data[0]['orgs'] as $org) : ?>
                                                                                                <option value="<?= $org['id'] ?>"><?= $org['nom'] ?></option>
                                                                                                <!-- <input type="hidden" name="organisations_id" value="" /> -->
                                                                                            <?php endforeach; ?>
                                                                                        </select>
                                                                                        <span class="form-bar"></span>
                                                                                    </div>

                                                                                    <div class="modal-footer">
                                                                                        <input type="hidden" name="id" value="<?= $membre['id']; ?>">
                                                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Annuller</button>
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


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Membre</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Nouvel membre</h5>
                        </div>

                        <div class="card-block">
                            <form class="form-material" action="" method="post">

                                <div class="form-group form-success">
                                    <label class="">Nom</label>
                                    <input type="text" name="nom" class="form-control">
                                    <span class="form-bar"></span>

                                </div>

                                <div class="form-group form-success">
                                    <label class="">Prenom</label>
                                    <input type="text" name="prenoms" class="form-control">
                                    <span class="form-bar"></span>

                                </div>

                                <div class="form-group form-success">
                                    <label class="">Telephone</label>
                                    <input type="text" name="telephone" class="form-control">
                                    <span class="form-bar"></span>

                                </div>

                                <div class="form-group form-success">
                                    <label class="">Adresse</label>
                                    <input type="text" name="adresse" class="form-control">
                                    <span class="form-bar"></span>

                                </div>

                                <div class="form-group form-success">
                                    <label class="">Email</label>
                                    <input type="text" name="email" class="form-control">
                                    <span class="form-bar"></span>

                                </div>

                                <div class="form-group form-success">
                                    <label class="">Organisation</label>
                                    <select name="organisations_id" id="" class="form-control">
                                        <option value=""></option>
                                        <?php foreach ($data[0]['orgs'] as $org) : ?>
                                            <option value="<?= $org['id'] ?>"><?= $org['nom'] ?></option>
                                            <!-- <input type="hidden" name="organisations_id" value=">" /> -->
                                        <?php endforeach; ?>
                                    </select>
                                    <span class="form-bar"></span>
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