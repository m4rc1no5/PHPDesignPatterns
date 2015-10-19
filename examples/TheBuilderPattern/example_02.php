<?php

// autoload from composer
require __DIR__ . '/../../vendor/autoload.php';

use PHPDesignPatterns\TheBuilderPattern\MazeGame2;
use PHPDesignPatterns\TheBuilderPattern\StandardMazeBuilder;

$maze_builder = new StandardMazeBuilder();
$maze_game = new MazeGame2();
$maze = $maze_game->createMaze($maze_builder);

print_r($maze);