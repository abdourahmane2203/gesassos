<?php


use src\model\ChannelVasDao;
class ChannelVasController extends \config\Controller
{
    public function get() {
        
        $return = ChannelVasDao::findReturn();
        
        $returnAmount = floatval($return[0]);
   
        //GET THE BALANCE 
        $balance = ChannelVasDao::getBalance();
        
        // log
        ChannelVasDao::historyBalance($balance, 'return', $returnAmount); 

        $updated = ChannelVasDao::updateBalance($returnAmount, true);
       
        if ($updated) {
            ChannelVasDao::updateAmount('return'); 
        }

        // $loan = ChannelVasDao::findLoan();
        // $loanAmount = floatval($loan[0]);
        
        // //Log
        // $balance = ChannelVasDao::getBalance();
        // ChannelVasDao::historyBalance($balance, 'loan', $loanAmount);
        
        // if ($loanAmount > 0) {
        //     ChannelVasDao::updateBalance($loanAmount, false);
        //     $updated = ChannelVasDao::updateBalance($returnAmount, true);
        //     if ($updated) {
        //         ChannelVasDao::updateAmount('loan'); 
        //     }
        // }
       
        $balance = ChannelVasDao::getBalance();
        echo('New balance : '.$balance);
    }
    
}

