<?php
/**
 * Created by PhpStorm.
 * User: marcinos
 * Date: 13.10.15
 * Time: 14:47
 */

namespace PHPDesignPatterns\src\TheObserverPattern;


class MazeGame
{
	public function createMaze()
	{
		$maze = new Maze();
		$r1 = new Room(1);
		$r2 = new Room(2);
		$the_door = new Door($r1, $r2);
	}
}