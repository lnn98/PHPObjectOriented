<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 12/5/2018
 * Time: 2:09 PM
 */
class ConNguoi
{
    private $name;
    public function setName($name = 'Con Nguoi')
    {
        $this->name = $name;
        return $this;
    }
    public function getName()
    {
        return $this->name;
    }
}
$connguoi = new ConNguoi();
var_dump($connguoi);
var_dump($connguoi->setName('Vũ Thanh Tài'));
