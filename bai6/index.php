<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 12/5/2018
 * Time: 12:57 PM
 */
class Bar
{
    public function __construct()
    {
        echo 'Class Bar được khởi tạo';
    }
    public function __destruct()
    {
        echo 'Class Bar được hủy';
    }
}
class Foo extends Bar
{
    public function __construct()
    {
        parent::__construct();
        echo 'Class Foo được khởi tạo';
    }
    public function __destruct()
    {
        parent::__destruct();
        echo 'Class Foo được hủy';
    }
}
$foo = new Foo();