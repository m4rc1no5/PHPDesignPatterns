<?php
/**
 * Created by PhpStorm.
 * User: marcinos
 * Date: 04.10.15
 * Time: 16:50
 */

namespace PHPDesignPatterns\src;

use ColorBashPrompt;

trait HasColorBashPrompt
{
    /** @var ColorBashPrompt */
    protected $colorBashPrompt;

    public function setColorBashPrompt(ColorBashPrompt $colorBashPrompt)
    {
        $this->colorBashPrompt = $colorBashPrompt;
    }
}