<?php

namespace PHPDesignPatterns\src\TheObserverPattern;

/**
 * Class Observer
 * @package PHPDesignPatterns\src\TheObserverPattern
 */
abstract class Observer
{

	/**
	 * @param Subject|null $subject
	 */
	public function __construct(Subject $subject = null)
	{
		if (is_object($subject) && $subject instanceof Subject) {
			$subject->attach($this);
		}
	}

	/**
	 * @param Subject $subject
	 */
	public function update(Subject $subject)
	{
		// looks for an observer method with the state name
		if (method_exists($this, $subject->getState())) {
			call_user_func_array(array($this, $subject->getState()), array($subject));
		}
	}
}