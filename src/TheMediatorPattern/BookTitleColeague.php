<?php
/**
 * Created by PhpStorm.
 * User: marcinos
 * Date: 06.10.15
 * Time: 21:54
 */

namespace PHPDesignPatterns\src\TheMediatorPattern;


class BookTitleColleague extends BookColleague
{
    /** @var string */
    private $title;
    /** @var string */
    private $state;

    /**
     * @param string $title_in
     * @param BookMediator $mediator_in
     */
    function __construct($title_in, $mediator_in)
    {
        $this->title = $title_in;
        parent::__construct($mediator_in);
    }

    /**
     * @return string
     */
    function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title_in
     */
    function setTitle($title_in)
    {
        $this->title = $title_in;
    }

    /**
     * @return string
     */
    function getState()
    {
        return $this->state;
    }

    /**
     * @param $state_in
     */
    function setState($state_in)
    {
        $this->state = $state_in;
    }

    function setTitleUpperCase()
    {
        $this->setTitle(strtoupper($this->getTitle()));
        $this->setState('upper');
        $this->getMediator()->change($this);
    }

    function setTitleLowerCase()
    {
        $this->setTitle(strtolower($this->getTitle()));
        $this->setState('lower');
        $this->getMediator()->change($this);
    }
}