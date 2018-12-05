<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 12/5/2018
 * Time: 12:33 PM
 */
class ConNguoi
{
    public $name;
    public $mat;
    public $mui;
    const sochan =2;

    public function an()
    {
    }

    public function noi($caunoi)
    {
        return $caunoi;
    }

    public function di()
    {
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSoChan()
    {
        return self::sochan;
    }
}

$connguoi = new ConNguoi();
$connguoi->name = 'Nam';
echo $connguoi->name;
echo $connguoi->noi('Xin chao');
echo $connguoi::sochan;