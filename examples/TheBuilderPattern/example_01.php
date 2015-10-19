<?php

// autoload from composer
require __DIR__ . '/../../vendor/autoload.php';

use PHPDesignPatterns\TheBuilderPattern\MazeGame;

$maze_game_1 = new MazeGame();
$maze = $maze_game_1->createMaze();

print_r($maze);