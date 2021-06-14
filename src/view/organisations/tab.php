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
                                                                                            <button type="submit" class="btn btn-success" value="edit" name="btn_submit">Mettre à jour</button>
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