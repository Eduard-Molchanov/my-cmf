<?php

namespace core;

class DataUrl
{

    public static function getData()
    {

        $data = explode("/", trim(strip_tags($_GET["route"])));
        return $data;
    }
}
