<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 12/5/2018
 * Time: 12:43 PM
 */
/*
 * phương thức private
 */
class Person
{
    private $name;
    private function run()
    {
        return 'Đây là hàm run';
    }

    function setName($name)
    {
        $this->name = $name;
    }

    function getName()
    {
        return $this->name;
    }

    function getRunMethod()
    {
        return $this->run();
    }
}
$person = new Person();
$person->setName('Nam');
echo $person->getName();
echo $person->getRunMethod();