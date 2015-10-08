<?php
/**
 * Created by PhpStorm.
 * User: marcinos
 * Date: 07.10.15
 * Time: 09:29
 */

namespace PHPDesignPatterns\src\TheCompositePattern;


abstract class Toy
{
    private $name;
    private $price;

    public function __constructor($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }



    abstract function getName();

    abstract function getPrice();
}