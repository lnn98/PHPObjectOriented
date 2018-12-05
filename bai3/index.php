<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 12/5/2018
 * Time: 12:42 PM
 */
class ParentClass
{
    function getClass()
    {
        return 'ParentClass';
    }
}

class ChildClass extends ParentClass
{
    var $name = 'ChildClass';

    function getclass()
    {
        return 'ChildClass';
    }

    function getMethod()
    {
        echo 'Đây là phương thức ăn của lớp'. $this->getclass();
    }

    function getMethodParent()
    {
        echo 'Đây là phương thức ăn của lớp'. parent::getclass();
    }
}

$class = new ChildClass();
$class->getMethod();
$class->getMethodParent();