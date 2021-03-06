<?php


use config\Controller;
use src\model\MembresDao;
use src\model\OrganisationsDao;
use src\model\TypeOrganisationsDao;

class OrganisationsController extends Controller
{

    public function add()
    {

        if (!empty($_POST) && !empty($_POST['btn_submit'] == 'add')) {
            extract($_POST);
            if (!empty($zone_interventions) && !empty($theme) && !empty($contacts) && !empty($adresse) && !empty($type_organisations)) {
                OrganisationsDao::insert($_POST);
            } else {
                echo "veuillez saisir tous les champs !";
                die;
            }
        }

        elseif (!empty($_POST) && !empty($_POST['btn_submit'] == 'edit')) {
            extract($_POST);
            if (!empty($zone_interventions) && !empty($theme) && !empty($contacts) && !empty($adresse) && !empty($organisations)) {
                OrganisationsDao::updateOne($_POST);
            } else {
                echo "veuillez saisir tous les champs !";
                die;
            }
        }

        elseif (!empty($_POST) && !empty($_POST['btn_submit'] == 'search')) {
            extract($_POST);
            if (!empty($zone_interventions) && !empty($theme) && !empty($contacts) && !empty($adresse) && !empty($type_organisations)) {
                OrganisationsDao::insert($_POST);
            } else {
                echo "veuillez saisir tous les champs !";
                die;
            }
        }
        $countOrg = OrganisationsDao::countOrg();
        $countTypeOrg = TypeOrganisationsDao::countTypeOrg();
        $countMembres = MembresDao::countMembre();
        
        $typeOrg = TypeOrganisationsDao::findAll();

        $orgs = OrganisationsDao::findAll();

        $this->view->data[] = [
            'orgs' => $orgs,
            'typeOrgs' => $typeOrg,
            'countMembres' => $countMembres[0],
            'countOrg' => $countOrg[0],
            'countTypeOrg' => $countTypeOrg[0],
        ];
       

        return $this->view->load("organisations/add");
    }


    public function deleteOne($id)
    {

        $result = OrganisationsDao::deleteOne($id);
        if ($result) {
            echo '<script> alert("Membre bien supprim??") </script>';
        }
        if ($result) {
            echo 'alert("Membre non supprim??, veuillez r??essay??")';
        }
        header('Location: http://' . $_SERVER['SERVER_ADDR'] . '/gesassos/organisations/add');
        exit;
        //echo 'deleted '. $id;
    }

    public function membres()
    {
        $membresByOrg = MembresDao::findMembresByOrg($_GET['id']);
        $this->view->data[] = [
            'membres' => $membresByOrg,
        ];

        return $this->view->load("organisations/membresByOrg"); 
    }
}
