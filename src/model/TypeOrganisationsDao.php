<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 24/12/2019
 * Time: 09:36
 */
namespace src\model;


class TypeOrganisationsDao extends \config\Model
{
    public static function findAll() {
       
       $sql = "SELECT *
        FROM type_organisations
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

    public static function findOne($id) {
       
        $sql = "SELECT *
         FROM type_organisations WHERE id=$id;
         ";
 
         $exe = self::getBdd()->query($sql);
 
         if ($exe) {
            
             return $exe->fetch();
         }
         return ['no data found'];
     }

     public static function deleteOne($id) {
       
        $sql = "DELETE
         FROM type_organisations WHERE id=$id;
         ";
 
         $exe = self::getBdd()->query($sql);
 
         if ($exe) {
            
            return true;
         }
         return false;
     }

   
    /**
     * INSERT 
     */
    public static function insert(array $data) {
        extract($data);
        
        $db = self::getBdd();
        
        $sql = "INSERT INTO `type_organisations` (`id`, `libelle`, `description`) VALUES (NULL, '$libelle', '$desc');";
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


    public static function updateOne($data)
    {
        extract($data);
        $sql = "UPDATE `type_organisations` SET `description`='$desc', `libelle`='$libelle'
                 WHERE `id`=$id;";
       
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

