<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 12/5/2018
 * Time: 12:58 PM
 */
abstract class Dongvat
{
    protected $name;

    abstract protected function getName();
}
class ConTrau extends Dongvat
{
    protected function getName()
    {
        // TODO: Implement getName() method.
    }
}
class ConBo extends Dongvat
{
    public function getName()
    {
        return $this->name;
    }
}