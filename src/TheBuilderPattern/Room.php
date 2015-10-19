<?php
/**
 * Created by PhpStorm.
 * User: marcinos
 * Date: 13.10.15
 * Time: 14:08
 */

namespace PHPDesignPatterns\TheBuilderPattern;


class Room implements MapSite
{
	/** @var int */
	private $room_number;

	/**
	 * @param int $room_number
	 */
	public function __construct($room_number)
	{
		$this->room_number = $room_number;
	}

	/**
	 * @return int
	 */
	public function getRoomNumber()
	{
		return $this->room_number;
	}

	public function enter()
	{
		// TODO: Implement enter() method.
	}

}