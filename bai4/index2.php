<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 12/5/2018
 * Time: 12:51 PM
 */
class Person
{
    public $name;

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
$person->name = 'Nam';
$person->setName('Lương Ngọc Nam');
echo $person->getName();