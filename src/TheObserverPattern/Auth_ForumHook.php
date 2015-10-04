<?php
/**
 * Created by PhpStorm.
 * User: marcinos
 * Date: 02.10.15
 * Time: 13:42
 */

namespace PHPDesignPatterns\src\TheObserverPattern;

use PHPDesignPatterns\src\HasColorBashPrompt;
use PHPDesignPatterns\src\HasColorBashPromptInterface;

class Auth_ForumHook extends Observer implements HasColorBashPromptInterface
{
	use HasColorBashPrompt;

	function login($subject) {
		$text = "Auth_ForumHook login\n";
		echo $this->colorBashPrompt->write($text, \ColorBashPrompt::BLUE);
	}

	function logout($subject) {
		// call the forum's API functions to log the user out
		// ...
	}
}