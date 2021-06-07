<?php

/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 24/12/2019
 * Time: 09:36
 */

namespace src\model;


class MembresDao extends \config\Model
{
    public static function findAll()
    {

        $sql = "SELECT *
        FROM membres
        ";

        $exe = self::getBdd()->query($sql);

        if ($exe) {
            while ($d = $exe->fetch()) {
                $data[] = $d;
            }
            return $data;
        }
        return ['no data found'];
    }

    public static function findMembresByOrg($organisations_id)
    {

        $sql = "SELECT *
        FROM membres WHERE organisations_id=$organisations_id
        ";

        $exe = self::getBdd()->query($sql);

        if ($exe) {
            while ($d = $exe->fetch()) {
                $data[] = $d;
            }
            return $data;
        }
        return ['no data found'];
    }


    /**
     * UPDATE BALANCE
     */
    public static function insert(array $data)
    {
        extract($data);
        $db = self::getBdd();

        $sql = "INSERT INTO `membres` (`id`, `nom`, `prenoms`, `telephone`, `email`, `adresse`, `organisations_name`, `organisations_id`) 
                VALUES (NULL, '$nom', '$prenoms', '$telephone', '$email', '$adresse', '$organisation', $organisations_id);";
        //var_dump($sql); die;
        $stm = $db->prepare($sql);

        $exe = $stm->execute();

        if ($exe) {
            $data = true;
        } else {
            $data = false;
        }
        return $data;
    }

    public static function deleteOne($id)
    {

        $sql = "DELETE
         FROM membres WHERE id=$id;
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
        $sql = "UPDATE `membres` SET `nom`='$nom', `prenoms`='$prenoms', `telephone`='$telephone', 
                       `adresse`='',`email`='$email', `organisations_name`='$organisation', `organisations_id`='$organisations_id'
                 WHERE `membres`.`id` = $id;";

        $stm = self::getBdd()->prepare($sql);

        $exe = $stm->execute();

        if ($exe) {
            $data = true;
        } else {
            $data = false;
        }
        return $data;
    }

    public static function countMembre() {
       
        $sql = "SELECT count(*)
         FROM membres
         ";
 
         $exe = self::getBdd()->query($sql);
 
         if ($exe) {
             
             return $exe->fetch();
         }
         return ['no data found'];
     }
}
