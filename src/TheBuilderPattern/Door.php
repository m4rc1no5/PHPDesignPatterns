<?php
/**
 * Created by PhpStorm.
 * User: marcinos
 * Date: 13.10.15
 * Time: 14:43
 */

namespace PHPDesignPatterns\TheBuilderPattern;


class Door implements MapSite
{
	/** @var Room */
	private $room1;
	/** @var Room */
	private $room2;
	/** @var boolean */
	private $open;

	public function __construct(Room $room1, Room $room2)
	{
		$this->room1 = $room1;
		$this->room2 = $room2;
	}

    /**
     * @return boolean
     */
    public function isOpen()
    {
        return $this->open;
    }

    /**
     * @param boolean $open
     */
    public function setOpen($open)
    {
        $this->open = $open;
    }

	public function enter()
	{
		// TODO: Implement enter() method.
	}

}