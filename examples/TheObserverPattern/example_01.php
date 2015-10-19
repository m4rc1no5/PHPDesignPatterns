<?php

// autoload from composer
require __DIR__ . '/../../vendor/autoload.php';

use PHPDesignPatterns\TheObserverPattern\Auth;
use PHPDesignPatterns\TheObserverPattern\Auth_ForumHook;

// create ColorBashPrompt
$colorBashPrompt = new ColorBashPrompt();

// create Auth - Subject
$auth = new Auth();
$auth->setColorBashPrompt($colorBashPrompt);

// attach an observer to subject
$auth->attach(new Auth_ForumHook());

//login
$auth->login();