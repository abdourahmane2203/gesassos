<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 24/12/2019
 * Time: 09:36
 */
namespace src\model;


class OrganisationsDao extends \config\Model
{
    public static function findAll() {
       
       $sql = "SELECT *
        FROM organisations
        ";

        $exe = self::getBdd()->query($sql);

        if ($exe) {
            while ($d = $exe->fetch()) {
                $data []= $d;
            }
            return $data;
        }
        return ['no data found'];
    }

    public static function countOrg() {
       
        $sql = "SELECT count(*)
         FROM organisations
         ";
 
         $exe = self::getBdd()->query($sql);
 
         if ($exe) {
             
             return $exe->fetch();
         }
         return ['no data found'];
     }

    public static function findOne($id) {
       
        $sql = "SELECT *
         FROM organisations where id=$id
         ";
 
         $exe = self::getBdd()->query($sql);
 
         if ($exe) {
             while ($d = $exe->fetch()) {
                 $data []= $d;
             }
             return $data;
         }
         return ['no data found'];
     }

   
    /**
     * UPDATE BALANCE
     */
    public static function insert(array $data) {
        extract($data);
        
        $db = self::getBdd();
        
        $sql = "INSERT INTO `organisations` (`id`, `nom`, `zone_interventions`, `theme`, `contacts`, `adresse`, `type_organisations`) 
                VALUES (NULL, '$nom', '$zone_interventions', '$theme', '$contacts', '$adresse', '$type_organisations');";
        //var_dump($sql); die;
        $stm = $db->prepare($sql);

        $exe = $stm->execute();

        if ($exe) {
            $data = true;
        }
        else {
            $data = false;
        }
        return $data;
    }

    public static function deleteOne($id) {
       
        $sql = "DELETE
         FROM organisations WHERE id=$id;
         ";
 
         $exe = self::getBdd()->query($sql);
 
         if ($exe) {
            
            return true;
         }
         return false;
     }
   

     public static function updateOne($data)
    {
        extract($data);
        $sql = "UPDATE `organisations` SET `nom`='$nom',`zone_interventions`= '$zone_interventions', 
                        `theme`='$theme', `contacts`='$contacts', `adresse`='$adresse',
                        `type_organisations`='$organisations'
                WHERE `organisations`.`id`=$id;";
       
        $stm = self::getBdd()->prepare($sql);

        $exe = $stm->execute(); 

        if ($exe) {
            $data = true;
        }
        else {
            $data = false;
        }
        return $data;
    }
}

