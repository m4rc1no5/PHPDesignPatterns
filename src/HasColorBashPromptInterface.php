<?php

namespace PHPDesignPatterns\src;

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