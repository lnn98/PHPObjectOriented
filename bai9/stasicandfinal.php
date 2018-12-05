<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 12/5/2018
 * Time: 1:56 PM
 */
class ConNguoi
{
    public static $name = 'Nam';
    public static function getName()
    {
        //gọi thuộc tính tĩnh
        return self::$name;
        //hoặc
        return ConNguoi::$name;
    }
    public static function showAll()
    {
        //gọi phương thức tĩnh
        return self::getName();
        //hoặc
        return ConNguoi::getName();
    }
}
//gọi thuộc tính tĩnh
ConNguoi::$name;
//gọi phương thức tĩnh
ConNguoi::showAll();
//hoặc
$connguoi = new ConNguoi();
$connguoi->showAll();