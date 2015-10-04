<?php

require __DIR__ . '/../../vendor/autoload.php';

use PHPDesignPatterns\src\TheObserverPattern\Auth;
use PHPDesignPatterns\src\TheObserverPattern\Auth_ForumHook;

$colorBashPrompt = new ColorBashPrompt();
$auth = new Auth();
$auth->setColorBashPrompt($colorBashPrompt);
$auth_forum = new Auth_ForumHook();
$auth_forum->setColorBashPrompt($colorBashPrompt);

// attach an observer to subject
$auth->attach($auth_forum);
$auth->login();