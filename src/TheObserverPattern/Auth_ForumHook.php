<?php
/**
 * Created by PhpStorm.
 * User: marcinos
 * Date: 02.10.15
 * Time: 13:42
 */

namespace PHPDesignPatterns\src\TheObserverPattern;

class Auth_ForumHook extends Observer
{
	function login($subject) {
		echo "Auth_ForumHook login";
	}

	function logout($subject) {
		// call the forum's API functions to log the user out
		// ...
	}
}