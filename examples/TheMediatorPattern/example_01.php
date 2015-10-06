<?php

// autoload from composer
require __DIR__ . '/../../vendor/autoload.php';

use PHPDesignPatterns\src\TheMediatorPattern\BookMediator;

// create ColorBashPrompt
$cbp = new ColorBashPrompt();

echo $cbp->writeln('BEGIN TESTING MEDIATOR PATTERN', ColorBashPrompt::YELLOW);
echo $cbp->writeln('');

$mediator = new BookMediator('Gamma, Helm, Johnson, and Vlissides', 'Design Patterns');

$author = $mediator->getAuthor();
$title = $mediator->getTitle();

echo $cbp->writeln('Original Author and Title: ', ColorBashPrompt::BLUE);
echo $cbp->writeln('author: ' . $author->getAuthor());
echo $cbp->writeln('title: ' . $title->getTitle());
echo $cbp->writeln('');

$author->setAuthorLowerCase();

echo $cbp->writeln('After Author set to Lower Case: ', ColorBashPrompt::BLUE);
echo $cbp->writeln('author: ' . $author->getAuthor());
echo $cbp->writeln('title: ' . $title->getTitle());
echo $cbp->writeln('');

$title->setTitleUpperCase();

echo $cbp->writeln('After Title set to Upper Case: ', ColorBashPrompt::BLUE);
echo $cbp->writeln('author: ' . $author->getAuthor());
echo $cbp->writeln('title: ' . $title->getTitle());
echo $cbp->writeln('');

echo $cbp->writeln('END TESTING MEDIATOR PATTERN', ColorBashPrompt::YELLOW);
