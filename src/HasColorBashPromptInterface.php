<?php

namespace PHPDesignPatterns;

use ColorBashPrompt;

/**
 * Interface HasColorBashPromptInterface
 * @package PHPDesignPatterns\src
 */
interface HasColorBashPromptInterface
{
    /**
     * @param ColorBashPrompt $colorBashPrompt
     */
    public function setColorBashPrompt(ColorBashPrompt $colorBashPrompt);
}