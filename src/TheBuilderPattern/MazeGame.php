<?php
/**
 * Created by PhpStorm.
 * User: marcinos
 * Date: 13.10.15
 * Time: 14:47
 */

namespace PHPDesignPatterns\TheBuilderPattern;


class MazeGame
{
	public function createMaze()
	{
		$maze = new Maze();

		$r1 = $maze->getRoom(1);
		if($r1 == null){
			$r1 = new Room(1);
		}
		$r2 = $maze->getRoom(2);

		if($r2 == null){
			$r2 = new Room(2);
		}
		$maze->addRoom($r1);
		$maze->addRoom($r2);

		return $maze;
	}
}