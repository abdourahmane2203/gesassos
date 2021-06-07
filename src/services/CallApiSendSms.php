<?php

namespace src\services;

class CallApiSendSms
{

    public static function sendSms($sms_from , $sms_to, $sms_text, $signature)
    {
        $url = 'http://192.168.132.26/api-sms-smpp/sms/send';

        $data = [
            'sms_from'=> $sms_from,
            'sms_to'=> $sms_to,
            'sms_text' => $sms_text,
            'signature' => $signature,
        ];
        $postfields = '';

        foreach ($data as $key=>$value)
            $postfields .= $key.'='.$value.'&';

        $postfields = rtrim($postfields, '&');


        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_COOKIESESSION, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $postfields);

        $return = curl_exec($curl);

        // print_r(json_decode($return)); die();
        curl_close($curl);
        return $return;
    }
}