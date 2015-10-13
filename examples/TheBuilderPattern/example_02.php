<?php

// autoload from composer
require __DIR__ . '/../../vendor/autoload.php';

use PHPDesignPatterns\src\TheObserverPattern\MazeGame2;
use PHPDesignPatterns\src\TheObserverPattern\StandardMazeBuilder;

$maze_builder = new StandardMazeBuilder();
$maze_game = new MazeGame2();
$maze = $maze_game->createMaze($maze_builder);

print_r($maze);