<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 12/5/2018
 * Time: 2:02 PM
 */
include 'namespace.php';
$connguoi = new Classs\ConNguoi\ConNguoi();
echo $connguoi->getName();
$nguoilon = new Classs\NguoiLon\NguoiLon();
echo $nguoilon->getName();