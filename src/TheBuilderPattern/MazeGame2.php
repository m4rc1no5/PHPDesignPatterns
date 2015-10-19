<?php
/**
 * Created by PhpStorm.
 * User: marcinos
 * Date: 13.10.15
 * Time: 21:02
 */

namespace PHPDesignPatterns\TheBuilderPattern;


class MazeGame2
{
    public function createMaze(MazeBuilder $mazeBuilder)
    {
        $mazeBuilder->buildMaze();
        $mazeBuilder->buildRoom(1);
        $mazeBuilder->buildRoom(2);
        return $mazeBuilder->getMaze();
    }
}