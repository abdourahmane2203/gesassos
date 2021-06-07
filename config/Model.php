<?php
/**
 * Created by PhpStorm.
 * User: Diallo
 * Date: 10/04/2019
 * Time: 11:52
 */
namespace config;

class  Model
{

    private static $_dbb;

    // Instancie la connexion
     private static function setBdd()
      {
        self::$_dbb = new \PDO('mysql:host=localhost;dbname=ges_organisations;charset=utf8', 'root', '');
        self::$_dbb->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_WARNING);
      }

    // Récupere la connexion
    public static function getBdd() : \PDO
     {
     if(self::$_dbb == null){
        self::setBdd();
     }
     return self::$_dbb;
   }

    public static function getConnectionOracle()
    {
        $tns = " 
                (DESCRIPTION = (ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 192.168.180.61)(PORT = 1521)))
                (CONNECT_DATA = (SERVER = DEDICATED)(SID = EADB)))
            ";
            
        $db_username = "odasensource";
        $db_password = "odasensource2018";
        try{
            $conn = new \PDO("oci:dbname=".$tns,$db_username,$db_password);
           
            return $conn;
        }catch(\PDOException $e){
            echo ("Erreur d'accès à la base de données !");
        }
    }

    public static function getConnectionSQLServer()
    {
        //use any of these or check exact MSSQL ODBC drivername in "ODBC Data Source Administrator"
        $mssqldriver = '{SQL Server}';
        //$mssqldriver = '{SQL Server Native Client 11.0}';
        //$mssqldriver = '{ODBC Driver 11 for SQL Server}';

        $hostname='192.168.180.180';
        $dbname='API_WEB2SMS';
        $username='sa';
        $password='Expresso2015';
        try {
            $dbDB = new \PDO("odbc:Driver=$mssqldriver;Server=$hostname;Database=$dbname", $username, $password);
            //var_dump($dbDB); die();
        }
        catch (\Exception $ex) {
            die("Erreur au serveur de la base de données ! ");
        }
        return $dbDB;
    }

   
}
