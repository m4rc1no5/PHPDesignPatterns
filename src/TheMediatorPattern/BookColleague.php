<?php
/**
 * Created by PhpStorm.
 * User: marcinos
 * Date: 06.10.15
 * Time: 21:52
 */

namespace PHPDesignPatterns\TheMediatorPattern;


abstract class BookColleague
{
    /** @var BookMediator */
    private $mediator;

    /**
     * @param BookMediator $mediator_in
     */
    function __construct(BookMediator $mediator_in)
    {
        $this->mediator = $mediator_in;
    }

    /**
     * @return BookMediator
     */
    function getMediator()
    {
        return $this->mediator;
    }

}