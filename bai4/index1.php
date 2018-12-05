<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 12/5/2018
 * Time: 12:46 PM
 */
/*
 * hàm protected
 */
class Person
{
    protected $name;
}

class Male extends Person
{
    function setName($name)
    {
        $this->name = $name;
    }

    function getName()
    {
        return $this->name;
    }
}
$person = new Person();
$person ->name;
$male = new Male();
$male->setName('Nam');
echo $male->getName();