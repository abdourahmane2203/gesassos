<?php 


use config\Controller;
use src\model\TypeOrganisationsDao;

class TypeOrganisationsController extends Controller
{

    public function add() {

        if (!empty($_POST) && !empty($_POST['btn_submit']=='add')) {
            if (!empty($_POST['libelle'])) {
                $addTypeOrg = TypeOrganisationsDao::insert($_POST); 
            } else {
                echo "veuillez saisir tous les champs !"; die;
            }
        }

        elseif (!empty($_POST) && !empty($_POST['btn_submit']=='edit')) {
            if (!empty($_POST['libelle']) && !empty($_POST['desc'])) {
                $addTypeOrg = TypeOrganisationsDao::updateOne($_POST); 
            } else {
                echo "veuillez saisir tous les champs !"; die;
            }
        }

        elseif (!empty($_POST) && !empty($_POST['btn_submit'] == 'search')) {
            extract($_POST);
            
            if (!empty($typeOrg)) {
                
                $typeOrg_r = TypeOrganisationsDao::findByTypeOrg($typeOrg);
                
                $this->view->data = [
                    'typeOrg_r'=>$typeOrg_r,
                ];
                //var_dump($this->view->data); die;
                
            } else {
                echo '<script>alert("Veuillez saisir type d\'organisation !")</script>';
                //die;
            }
        }

        $typeOrg = TypeOrganisationsDao::findAll();
        
        $this->view->data = [
            'typeOrg'=>$typeOrg,
        ];
        
        return $this->view->load("typeOrganisations/add");
    }

    public function deleteOne($id) {

        $result = TypeOrganisationsDao::deleteOne($id);
        // if($result) {
        //     echo '<script> alert("Membre bien supprimé") </script>';
        // }
        // if($result) {
        //     echo 'alert("Membre non supprimé, veuillez réessayé")';
        // }
        header('Location: http://'.$_SERVER['SERVER_ADDR'].'/gesassos/TypeOrganisations/add');
        exit;
        //echo 'deleted '. $id;
    }
    
}