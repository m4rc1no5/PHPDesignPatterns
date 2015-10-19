<?php
/**
 * Created by PhpStorm.
 * User: marcinos
 * Date: 06.10.15
 * Time: 21:53
 */

namespace PHPDesignPatterns\TheMediatorPattern;


class BookAuthorColleague extends BookColleague
{
    /** @var string */
    private $author;
    /** @var string */
    private $state;

    /**
     * @param string $author_in
     * @param BookMediator $mediator_in
     */
    function __construct($author_in, BookMediator $mediator_in)
    {
        $this->author = $author_in;
        parent::__construct($mediator_in);
    }

    /**
     * @return string
     */
    function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param string $author_in
     */
    function setAuthor($author_in)
    {
        $this->author = $author_in;
    }

    /**
     * @return string
     */
    function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state_in
     */
    function setState($state_in)
    {
        $this->state = $state_in;
    }

    function setAuthorUpperCase()
    {
        $this->setAuthor(strtoupper($this->getAuthor()));
        $this->setState('upper');
        $this->getMediator()->change($this);
    }

    function setAuthorLowerCase()
    {
        $this->setAuthor(strtolower($this->getAuthor()));
        $this->setState('lower');
        $this->getMediator()->change($this);
    }
}