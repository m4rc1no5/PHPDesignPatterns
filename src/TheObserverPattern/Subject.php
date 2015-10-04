<?php

namespace PHPDesignPatterns\src\TheObserverPattern;

/**
 * Class Subject
 * @package PHPDesignPatterns\src\TheObserverPattern
 */
abstract class Subject
{
	protected $observers;
	protected $state;

	/**
	 * Constructor - sets our variables
	 */
	public function __construct()
	{
		$this->observers = array();
		$this->state = null;
	}

	/**
	 * @param Observer $observer
	 */
	public function attach(Observer $observer)
	{
		$i = array_search($observer, $this->observers);
		if ($i === false) {
			$this->observers[] = $observer;
		}
	}

	/**
	 * @param Observer $observer
	 */
	public function detach(Observer $observer)
	{
		if (!empty($this->observers)) {
			$i = array_search($observer, $this->observers);
			if ($i !== false) {
				unset($this->observers[$i]);
			}
		}
	}

	/**
	 * @return string
	 */
	public function getState()
	{
		return $this->state;
	}

	/**
	 * @param string $state
	 */
	public function setState($state)
	{
		$this->state = $state;
		$this->notify();
	}

	/**
	 *
	 */
	public function notify()
	{
		if (!empty($this->observers)) {
			/** @var Observer $observer */
			foreach ($this->observers as $observer) {
				$observer->update($this);
			}
		}
	}

	/**
	 * @return array
	 */
	public function getObservers()
	{
		return $this->observers;
	}
}