<?php
/**
 * Created by PhpStorm.
 * User: marcinos
 * Date: 04.10.15
 * Time: 19:15
 */

namespace PHPDesignPatterns\tests;

use PHPDesignPatterns\TheObserverPattern\Auth;
use PHPDesignPatterns\TheObserverPattern\Auth_ForumHook;
use PHPUnit_Framework_TestCase;

class TheObserverPattern extends PHPUnit_Framework_TestCase
{
    public function testExample()
    {
        //tworzymy mocka klasy ColorBashPrompt i definiujemy, że wywołana zostanie metoda write dwa razy
        $colorBashPrompt = $this->getMockBuilder('ColorBashPrompt')
            ->setMethods(['write'])
            ->getMock();
        $colorBashPrompt->expects($this->once())->method('write');

        //tworzymy obiekt Auth
        $auth = new Auth();
        /** @var \ColorBashPrompt $colorBashPrompt */
        $auth->setColorBashPrompt($colorBashPrompt);

        //tworzymy mocka klasy AuthForumHook i sprawdzamy czy zostanie wywołana metoda login
        $auth_forum = $this->getMockBuilder('PHPDesignPatterns\TheObserverPattern\Auth_ForumHook')
            ->setMethods(['login'])
            ->getMock();
        $auth_forum->expects($this->once())->method('login');

        //dołączamy obserwatora do podmiotu (subject)
        /** @var Auth_ForumHook $auth_forum */
        $auth->attach($auth_forum);
        $auth->login();
    }
}