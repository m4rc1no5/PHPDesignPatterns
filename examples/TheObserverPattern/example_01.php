<?php

// autoload from composer
require __DIR__ . '/../../vendor/autoload.php';

use PHPDesignPatterns\src\TheObserverPattern\Auth;
use PHPDesignPatterns\src\TheObserverPattern\Auth_ForumHook;

// create ColorBashPrompt
$colorBashPrompt = new ColorBashPrompt();

// create Auth - Subject
$auth = new Auth();
$auth->setColorBashPrompt($colorBashPrompt);

// create Auth_ForumHook - Observer
$auth_forum = new Auth_ForumHook();
//$auth_forum->setColorBashPrompt($colorBashPrompt);

// attach an observer to subject
$auth->attach($auth_forum);
$auth->login();