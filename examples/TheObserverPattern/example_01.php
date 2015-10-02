<?php
include 'autoload.php';

use PHPDesignPatterns\examples\TheObserverPattern\Auth;
use PHPDesignPatterns\examples\TheObserverPattern\Auth_ForumHook;

$auth = new Auth();
// attach an observer
$auth->attach(new Auth_ForumHook());

$auth->login();