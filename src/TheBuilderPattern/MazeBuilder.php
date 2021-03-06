<?php

namespace PHPDesignPatterns\TheBuilderPattern;

abstract class MazeBuilder
{
	abstract function buildMaze();
	abstract function buildRoom($room_number);
	abstract function getMaze();
}