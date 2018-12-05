<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 12/5/2018
 * Time: 2:10 PM
 */
function __autoload($className)
{
    if (file_exists($className . '.php')) {
        include_once $className . '.php';
    }
}
$nguoilon=new NguoiLon();
$tre=new TreCon();