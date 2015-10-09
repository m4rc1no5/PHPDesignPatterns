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
    abstract public function getName();
    abstract public function add(Toy $toy);
    abstract public function remove(Toy $toy);
}