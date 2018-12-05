<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 12/5/2018
 * Time: 12:55 PM
 */
class Hinh
{
    protected function tinhDienTich()
    {
    }
}

class HinhVuong extends Hinh
{
    private $canh;

    public function setCanh($canh)
    {
        $this->canh = $canh;
    }

    public function getCanh()
    {
        return $this->canh;
    }

    public function tinhDienTich()
    {
        return pow($this->canh, 4);
    }
}
class HinhTron extends Hinh
{
    private $bankinh;

    public function setBanKinh($bankinh)
    {
        $this->bankinh = $bankinh;
    }

    public function getBanKinh()
    {
        return $this->bankinh;
    }
    public function tinhDienTich()
    {
        return (pow($this->bankinh, 2) * pi());
    }
}
$hinhvuong = new HinhVuong();
$hinhvuong->setCanh(4);
echo $hinhvuong->tinhDienTich();
echo '<br/> ___________________________________________________ <br/>';
$hinhtron = new HinhTron();
$hinhtron->setBanKinh(4);
echo $hinhtron->tinhDienTich();