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
                                    <table class="table table-hover m-b-0 without-header">
                                        <thead>
                                            <th>
                                            <td>Telephone</td>
                                            <td>Email</td>
                                            <td>adresse</td>
                                            <td>Organisation</td>
                                            <td>Actions</td>
                                            </th>
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
                                                            <a class="btn btn-primary" data-toggle="modal" data-target="#modalEdit"><i class="text-white fas fa-align-center"></i></a>
                                                            <a class="btn btn-danger" data-toggle="modal" data-target="#modalDelete"><i class="text-white fa fa-trash"></i></a>
                                                        </h6>
                                                    </td>

                                                </tr>

                                                <div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">suppression membre</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Voulez vous vraiment supprimer ce membre
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">annuler</button>
                                                                <a type="button" href="/gesassos/membres/deleteOne/<?= $membre['id']; ?>" class="btn btn-success">supprimer</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                                    <label class="float-label">Nom</label>
                                                                                    <input type="text" value="<?= $membre['nom']; ?>" name="nom" class="form-control">
                                                                                    <span class="form-bar"></span>

                                                                                </div>

                                                                                <div class="form-group form-success">
                                                                                    <label class="float-label">Prenom</label>
                                                                                    <input type="text" value="<?= $membre['prenoms']; ?>" name="prenoms" class="form-control">
                                                                                    <span class="form-bar"></span>

                                                                                </div>

                                                                                <div class="form-group form-success">
                                                                                    <label class="float-label">Telephone</label>
                                                                                    <input type="text" value="<?= $membre['telephone']; ?>" name="telephone" class="form-control">
                                                                                    <span class="form-bar"></span>

                                                                                </div>

                                                                                <div class="form-group form-success">
                                                                                    <input type="text" value="<?= $membre['adresse']; ?>" name="adresse" class="form-control">
                                                                                    <span class="form-bar"></span>
                                                                                    <label class="float-label">Adresse</label>
                                                                                </div>

                                                                                <div class="form-group form-success">
                                                                                    <label class="float-label">Email</label>
                                                                                    <input type="text" value="<?= $membre['email']; ?>" name="email" class="form-control">
                                                                                    <span class="form-bar"></span>

                                                                                </div>

                                                                                <div class="form-group form-success">
                                                                                    <label class="float-label">Organisation</label>
                                                                                    <select name="organisation" id="" class="form-control">
                                                                                        <option value="<?= $membre['organisations_name'] ?>"><?= $membre['organisations_name'] ?></option>
                                                                                        <?php foreach ($data[0]['orgs'] as $org) : ?>
                                                                                            <option value="<?= $org['nom'] ?>"><?= $org['nom'] ?></option>
                                                                                            <input type="hidden" name="organisations_id" value="<?= $org['id'] ?>"/>
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
                                    <input type="text" name="nom" class="form-control">
                                    <span class="form-bar"></span>
                                    <label class="float-label">Nom</label>
                                </div>

                                <div class="form-group form-success">
                                    <input type="text" name="prenoms" class="form-control">
                                    <span class="form-bar"></span>
                                    <label class="float-label">Prenom</label>
                                </div>

                                <div class="form-group form-success">
                                    <input type="text" name="telephone" class="form-control">
                                    <span class="form-bar"></span>
                                    <label class="float-label">Telephone</label>
                                </div>

                                <div class="form-group form-success">
                                    <input type="text" name="adresse" class="form-control">
                                    <span class="form-bar"></span>
                                    <label class="float-label">Adresse</label>
                                </div>

                                <div class="form-group form-success">
                                    <input type="text" name="email" class="form-control">
                                    <span class="form-bar"></span>
                                    <label class="float-label">Email</label>
                                </div>

                                <div class="form-group form-success">
                                    <select name="organisation" id="" class="form-control">
                                        <option value=""></option>
                                        <?php foreach ($data[0]['orgs'] as $org) : ?>
                                            <option value="<?= $org['nom'] ?>"><?= $org['nom'] ?></option>
                                            <input type="hidden" name="organisations_id" value="<?= $org['id'] ?>"/>
                                        <?php endforeach; ?>
                                    </select>
                                    <span class="form-bar"></span>
                                    <label class="float-label">Organisation</label>
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