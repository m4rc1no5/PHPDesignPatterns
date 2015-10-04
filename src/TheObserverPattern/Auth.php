<?php
/**
 * Created by PhpStorm.
 * User: marcinos
 * Date: 02.10.15
 * Time: 13:41
 */

namespace PHPDesignPatterns\src\TheObserverPattern;

use PHPDesignPatterns\src\HasColorBashPrompt;
use ColorBashPrompt;
use PHPDesignPatterns\src\HasColorBashPromptInterface;

/**
 * Class Auth
 * @package PHPDesignPatterns\src\TheObserverPattern
 */
class Auth extends Subject implements HasColorBashPromptInterface
{
	use HasColorBashPrompt;

	function login()
	{
		// login to system, etc...

		//debug info
		echo $this->colorBashPrompt->write("Auth login\n", ColorBashPrompt::RED);

		// signal any observers that the user has logged in
		$this->setState("login");
	}

	function logout()
	{
		// existing code to perform some operation when user logs out
		// e.g. destroy session, etc...

		// signal any observers that the user has logged out
		$this->setState("logout");
	}
}