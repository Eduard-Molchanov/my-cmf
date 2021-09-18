<?php

class SendingSms
{
    private const API_ID = "тут нужно указать Ваш api_id полученный после регистрации на https://sms.ru/";

    public static function sendSms($phone, $textSms): bool
    {
        $textSms = str_replace(" ", "+", preg_replace('!\s++!u', ' ', $textSms));
        $urlApi = "https://sms.ru/sms/send?api_id=" . self::API_ID . "&to=" . $phone . "&msg=" . $textSms . "&json=1";
        $data = self::getData($urlApi);
        return $data["status_code"] == 100;

    }

    public static function sendSmsCode($phone): bool
    {
        $code = mt_rand(10000, 99000);
        $urlApi = "https://sms.ru/sms/send?api_id=" . self::API_ID . "&to=" . $phone . "&msg=" . $code . "&json=1";
        $data = self::getData($urlApi);
        return $data["status_code"] == 100;
    }

    private static function getData($url)
    {

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $url);
        $response = curl_exec($ch);
        $data = json_decode($response, true);
        curl_close($ch);
        return $data;
    }


}