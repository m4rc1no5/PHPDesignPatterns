<?php
/**
 * Created by PhpStorm.
 * User: marcinos
 * Date: 13.10.15
 * Time: 19:53
 */

namespace PHPDesignPatterns\TheBuilderPattern;


class StandardMazeBuilder extends MazeBuilder
{
    /** @var Maze */
    private $maze;

    /**
     * Create Maze
     */
    public function buildMaze()
    {
        $this->maze = new Maze();
    }

    /**
     * @return Maze
     */
    public function getMaze()
    {
        return $this->maze;
    }

    /**
     * @param int $room_number
     */
    public function buildRoom($room_number)
    {
        if($this->maze->getRoom($room_number)){
            return;
        }
        $room = new Room($room_number);
        $this->maze->addRoom($room);
    }
}