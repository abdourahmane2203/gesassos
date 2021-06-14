<?php 


use config\Controller;
use src\model\MembresDao;
use src\model\OrganisationsDao;

class MembresController extends Controller
{

    public function add() {

        if (!empty($_POST) && !empty($_POST['btn_submit']=='add')) {
            extract($_POST);
            if (!empty($nom) && !empty($prenoms) && !empty($telephone) && !empty($email) && !empty($adresse) && !empty($organisations_id)) {
                MembresDao::insert($_POST);
            } else {
                echo '<script>alert("veuillez saisir tous les champs !")</script>'; //die;
            }
        }

        //Update
        if (!empty($_POST) && !empty($_POST['btn_submit']=='edit')) {
            extract($_POST);
            
            if (!empty($nom) && !empty($prenoms) && !empty($telephone) && !empty($email) && !empty($adresse) && !empty($organisations_id)) {
                MembresDao::updateOne($_POST);
            } else {
                echo '<script>alert("veuillez saisir tous les champs !")</script>'; //die;
            }
        }
        $membres = MembresDao::findAll();
        
        $orgs = OrganisationsDao::findAll();
        $this->view->data []= [
            'orgs' => $orgs,
            'membres' => $membres,
        ];

        return $this->view->load("membres/add");
    }

    public function deleteOne($id) {

        $result = MembresDao::deleteOne($id);
        // if($result) {
        //     echo '<script> alert("Membre bien supprimé") </script>';
        // }
        // else{
        //     echo 'alert("Membre non supprimé, veuillez réessayé")';
        // }
        header('Location: http://'.$_SERVER['SERVER_ADDR'].'/gesassos/membres/add');
        exit;
        //echo 'deleted '. $id;
    }
}