<?php 


use config\Controller;
use src\model\MembresDao;
use src\model\OrganisationsDao;
use src\model\TypeOrganisationsDao;

class OrganisationsController extends Controller
{

    public function add() {
        
        if (!empty($_POST) && !empty($_POST['btn_submit']=='add')) {
            extract($_POST);
            if (!empty($zone_interventions) && !empty($theme) && !empty($contacts) && !empty($adresse) && !empty($type_organisations)) {
                OrganisationsDao::insert($_POST);
            } else {
                echo "veuillez saisir tous les champs !"; die;
            }
        }

        if (!empty($_POST) && !empty($_POST['btn_submit']=='edit')) {
            extract($_POST);
            if (!empty($zone_interventions) && !empty($theme) && !empty($contacts) && !empty($adresse) && !empty($organisations)) {
                OrganisationsDao::updateOne($_POST);
            } else {
                echo "veuillez saisir tous les champs !"; die;
            }
        }

        $typeOrg = TypeOrganisationsDao::findAll();
        
        $orgs = OrganisationsDao::findAll();
        
        $this->view->data []= [
            'orgs' => $orgs,
            'typeOrgs' => $typeOrg,
        ];
        

        return $this->view->load("organisations/add");
    }

    public function deleteOne($id) {

        $result = OrganisationsDao::deleteOne($id);
        if($result) {
            echo '<script> alert("Membre bien supprimé") </script>';
        }
        if($result) {
            echo 'alert("Membre non supprimé, veuillez réessayé")';
        }
        header('Location: http://'.$_SERVER['SERVER_ADDR'].'/gesassos/organisations/add');
        exit;
        //echo 'deleted '. $id;
    }
}