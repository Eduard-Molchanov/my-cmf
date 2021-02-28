<?php

namespace core;

class DataApi
{

    public static function getData($url)
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
