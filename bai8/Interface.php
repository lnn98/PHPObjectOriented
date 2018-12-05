<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 12/5/2018
 * Time: 1:51 PM
 */
interface DongVat
{
    public function getName();
}

//Class này đúng vì đã khai báo và định nghĩa lại phương thức getName
//trong interface
class ConTrau implements DongVat
{
    private $name;

    public function getName()
    {
        return $this->name;
    }
}