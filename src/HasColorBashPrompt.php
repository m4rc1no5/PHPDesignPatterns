<?php

namespace PHPDesignPatterns\src;

use ColorBashPrompt;

/**
 * Class HasColorBashPrompt
 * @package PHPDesignPatterns\src
 */
trait HasColorBashPrompt
{
    /** @var ColorBashPrompt */
    protected $colorBashPrompt;

    /**
     * @param ColorBashPrompt $colorBashPrompt
     */
    public function setColorBashPrompt(ColorBashPrompt $colorBashPrompt)
    {
        $this->colorBashPrompt = $colorBashPrompt;
    }

    /**
     * @return ColorBashPrompt
     */
    public function getColorBashPrompt()
    {
        return $this->colorBashPrompt;
    }

}