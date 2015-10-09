<?php
/**
 * Created by PhpStorm.
 * User: marcinos
 * Date: 09.10.15
 * Time: 23:02
 */

namespace PHPDesignPatterns\src\TheCompositePattern;


class SingleToy extends Toy
{

    /** @var string */
    protected $name;

    /**
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    public function add(Toy $toy)
    {
        return;
    }

    public function remove(Toy $toy)
    {
        return;
    }

}