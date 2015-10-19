<?php
/**
 * Created by PhpStorm.
 * User: marcinos
 * Date: 13.10.15
 * Time: 14:05
 */

namespace PHPDesignPatterns\TheBuilderPattern;


class Maze
{
	private $ar_rooms = [];

	public function addRoom(Room $room)
	{
		array_push($this->ar_rooms, $room);
	}

	public function getRoom($room_number)
	{
		/** @var Room $room */
		foreach ($this->ar_rooms as $room) {
			if($room->getRoomNumber() == $room_number){
				return $room;
			}
		}
		return false;
	}

}