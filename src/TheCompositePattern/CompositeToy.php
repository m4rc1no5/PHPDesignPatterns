<?php
/**
 * Created by PhpStorm.
 * User: marcinos
 * Date: 08.10.15
 * Time: 22:16
 */

namespace PHPDesignPatterns\src\TheCompositePattern;


class CompositeToy extends Toy
{
    /** @var array */
    protected $ar_toys = [];

    public function getName()
    {
        $name = "";
        /** @var Toy $toy */
        foreach($this->ar_toys as $toy){
            $name .= $toy->getName();
        }

        return $name;
    }

    public function add(Toy $toy)
    {
        array_push($this->ar_toys, $toy);
    }

    public function remove(Toy $toy_to_remove)
    {
        for($i=0; $i<count($this->ar_toys); $i++){
            if($this->ar_toys[$i] == $toy_to_remove){
                unset($this->ar_toys[$i]);
                break;
            }
        }
        return;
    }

}