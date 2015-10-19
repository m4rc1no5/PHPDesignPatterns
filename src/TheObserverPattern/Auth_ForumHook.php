<?php

namespace PHPDesignPatterns\TheObserverPattern;

/**
 * Class Auth_ForumHook
 * @package PHPDesignPatterns\src\TheObserverPattern
 */
class Auth_ForumHook extends Observer
{
	function login(Auth $auth) {
		$text = "Auth_ForumHook login\n";
		echo $auth->getColorBashPrompt()->write($text, \ColorBashPrompt::BLUE);
	}

	function logout(Subject $subject) {
		// call the forum's API functions to log the user out
		// ...
	}
}