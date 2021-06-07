<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 24/12/2019
 * Time: 09:36
 */
namespace src\model;


class ChannelVasDao extends \config\Model
{
    public static function getBalance() {
       
       $sql = "SELECT *
        FROM simbrella_account WHERE idSimbrella_account=2
        ";

        $exe = self::getBdd()->query($sql);

        if ($exe) {
            $balance = $exe->fetch();
            $balance = floatval($balance["balance"]);
            return $balance;
        }
    }

    public static function getBalanceHistory() {
       
        $sql = "SELECT *
         FROM simbrella_history_account
         ";
 
         $exe = self::getBdd()->query($sql);
 
         if ($exe) {
             $history = $exe->fetch();
            
             return $history;
         }
     }

    //HISTORY SIMBRELLA ACCOUNT simbrella_history_account
    
    public static function historyBalance(float $balance, string $transac_type, float $amount) {
        $timestamp = date('Y-m-d H:i');  
       $sql_ora = "INSERT INTO odasendaily.simbrella_history_account (balance_before,updated_at,transac_type,amount)
                VALUES ($balance,'$timestamp', '$transac_type', $amount)";
        
        $sql = "UPDATE simbrella_history_account 
                    SET balance_before=$balance,updated_at='$timestamp',transac_type='$transac_type',amount=$amount";    
        $stm = self::getBdd()->prepare($sql);
        
        $stm_ora = self::getConnectionOracle()->prepare($sql_ora);
        
        $exe = $stm->execute();
        $exe_ora = $stm_ora->execute();
        
        if ($exe && $exe_ora) {
            $data = true;
        }
        else {
            $data = false;
        }
        return $data;
    }
    /**
     * UPDATE BALANCE
     */
    public static function updateBalance(float $amount, $action) {
        
        $db = self::getBdd();
        $balance = self::getBalance();
        
        // ADD RETURN AMOUNT INTO BALANCE
        if($action) {
            $balance = $balance + $amount; 
           // var_dump($balance); die();
        }
        // SUBSTRAC LOAN AMOUNT INTO BALANCE
        else{
            $balance = $balance - $amount;
        }
       
        $timestamp = date('Y-m-d H:i');  
        
        $sql = "UPDATE simbrella_account set balance=$balance, updated_at='$timestamp' WHERE idSimbrella_account=2";
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

    public static function findReturn()
    {
        $sql = "SELECT * FROM odasendaily.diamp_return
                ";

        $exe = self::getConnectionOracle()->query($sql);
        
        if ($exe) {
           $data = $exe->fetch();
           // while ($donnee = $exe->fetch()) {
               // $data[] = $donnee; 
            //}//
        }
        else
            $data [] = "Return amount not found";
        return $data;
    }

    public static function findLoan()
    {
        $sql = "SELECT * FROM odasendaily.diamp_loan_2
                ";

        $exe = self::getConnectionOracle()->query($sql);

        if ($exe) {
           $data = $exe->fetch();
           // while ($donnee = $exe->fetch()) {
               // $data[] = $donnee; 
           //}//
        }
        else
            $data [] = "Loan amount not found";
        return $data;
    }

    public static function updateState()//string $serialNo)
    {
        $sql = "UPDATE RETURN_CDR_STATUS SET STATUS='DONE' WHERE calldate<trunc(sysdate-1)
        and returnamount>0";
       
        $stm = self::getConnectionOracle()->prepare($sql);

        $exe = $stm->execute();
        

        if ($exe) {
            $data = true;
        }
        else {
            $data = false;
        }
        return $data;
    }

    public static function updateAmount(string $transac_type)
    {
        $sql_loan = "UPDATE odasendaily.diamp_loan_2 SET loanamount=0";
        
        $sql_return = "UPDATE odasendaily.diamp_return SET returnamount=0";

        $stm_loan = self::getConnectionOracle()->prepare($sql_loan);

        if($transac_type==='return') {
            $stm_return = self::getConnectionOracle()->prepare($sql_return);
            $exe = $stm_return->execute();
        } 
        else if ($transac_type==='loan') {
            $stm_loan = self::getConnectionOracle()->prepare($sql_loan);
            $exe = $stm_loan->execute();
        }
        
        if ($exe) {
            $data = true;
        }
        else {
            $data = false;
        }
        return $data;
    }

   

}

