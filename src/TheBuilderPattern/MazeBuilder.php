<?php

namespace PHPDesignPatterns\src\TheObserverPattern;

abstract class MazeBuilder
{
	public function buildMaze(){}
	public function buildRoom($room){}
	public function buildDoor($roomFrom, $roomTo){}
	public function getMaze()
	{
		return 0;
	}
}