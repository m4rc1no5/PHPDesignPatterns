<?php

require __DIR__ . '/../../vendor/autoload.php';

use PHPDesignPatterns\src\TheObserverPattern\Auth;
use PHPDesignPatterns\src\TheObserverPattern\Auth_ForumHook;

$auth = new Auth();
// attach an observer
$auth->attach(new Auth_ForumHook());

$auth->login();