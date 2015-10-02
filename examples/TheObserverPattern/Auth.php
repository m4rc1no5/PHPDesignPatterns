<?php
/**
 * Created by PhpStorm.
 * User: marcinos
 * Date: 02.10.15
 * Time: 13:41
 */

namespace PHPDesignPatterns\examples\TheObserverPattern;

use PHPDesignPatterns\src\TheObserverPattern\Subject;

class Auth extends Subject
{
	function login()
	{
		echo "Auth login";

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