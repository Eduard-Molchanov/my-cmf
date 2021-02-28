<?php

namespace core;

use PDO;



define('DB', [

    'DBNAME' => "...",

    'USER' => "...",

    'PASS' => "...",

]);

class Db

{


    private static function connect()

    {
        return new PDO("mysql:host=localhost; dbname=" . DB['DBNAME'], DB['USER'], DB['PASS']);
    }



    // получение из таблицы всех строк

    public static function selectAll($sql)

    {
        return self::connect()->query($sql)->fetchAll(PDO::FETCH_OBJ);
    }



    // получение из таблицы одной строки

    public static function selectRow($sql)

    {
        return self::connect()->query($sql)->fetch(PDO::FETCH_OBJ);
    }



    // получение из таблицы одной строки - ассоциативный массив для Ajax

    public static function selectRowAjax($sql)

    {
        return self::connect()->query($sql)->fetch(PDO::FETCH_ASSOC);
    }



    // обновление строки таблицы

    public static function update($sql)

    {
        return self::connect()->exec($sql);
    }



    //  вставка строки таблицы

    public static function insert($sql)

    {
        return self::connect()->exec($sql);
    }



    // удаление строки таблицы

    public static function delete($sql)

    {
        return self::connect()->exec($sql);
    }
}
