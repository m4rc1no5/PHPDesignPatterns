# PHPDesignPatterns
Design Patterns in PHP

[![Build Status](https://travis-ci.org/m4rc1no5/PHPDesignPatterns.svg?branch=master)](https://travis-ci.org/m4rc1no5/PHPDesignPatterns)

Documentation
=============

Table of contents
-----------------

1. [Introduction](#intro)
2. [Installation project](#install)
3. [Update project](#update)
4. [Run examples](#run)
5. [The Observer Pattern](#the_observer_pattern)
6. [The Mediator Pattern](#the_mediator_pattern)
7. [The Composite Pattern](#the_composite_pattern)
8. [The Builder Pattern](#the_builder_pattern)

<a name="intro"></a>
Introduction
------------

Inspiration to this project was fantastic polish book about design patterns: **WZORCE PROJEKTOWE Elementy oprogramowania obiektowego wielokrotnego użytku** - Erich Gamma, Richard Helm, Ralph Johnson, John Vlissides. I wanted to translate examples from this book to PHP language.
 
<a name="install"></a>
Installation
------------

First of all you must download project PHPDesignPatterns. After this You must download the composer.phar

```
curl -sS https://getcomposer.org/installer | php
```

and use composer to load all dependecies

```
php composer.phar install -o
```

Update dependecies: 

```
php composer.phar update -o
```

<a name="update"></a>
Update Project
--------------

When You want to update this Project via Git You must write

```
git pull origin master
```

and then write

```
php composer.phar update -o
```

Update Composer is important to refresh autoload map.

<a name="run"></a>
Run examples
------------

You can run examples using commands like this:

```
php examples/TheObserverPattern/example_01.php
```

<a name="the_observer_pattern"></a>
The Observer Pattern
--------------------

This example is base on http://www.sitepoint.com/understanding-the-observer-pattern/

definition (in Polish):
*Obserwator określa zależność "jeden do wielu" między obiektami. Kiedy zmieni się stan jednego z obiektów, wszystkie obiekty zależne od niego są o tym automatycznie powiadamiane i aktualizowane.*

command:
```
php examples/TheObserverPattern/example_01.php
```

example:
```php
// create ColorBashPrompt
$colorBashPrompt = new ColorBashPrompt();

// create Auth - Subject
$auth = new Auth();
$auth->setColorBashPrompt($colorBashPrompt);

// attach an observer to subject
$auth->attach(new Auth_ForumHook());

//login
$auth->login();
```

output:
```text
Auth login
Auth_ForumHook login
```

<a name="the_mediator_pattern"></a>
The Mediator Pattern
--------------------

This example is base on https://sourcemaking.com/design_patterns/mediator/php

definition (in Polish):
*Mediator określa obiekt kapsułkujący informacje o interakcji między obiektami z danego zbioru. Wzorzec ten pomaga zapewnić luźne powiązanie, ponieważ zapobiega bezpośredniemu odwoływaniu się obiektów do siebie i umożliwia niezależne modyfikowanie interakcji między nimi.*

command:
```
php examples/TheMediatorPattern/example_01.php
```

example:
```php
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
```

output:
```text
BEGIN TESTING MEDIATOR PATTERN

Original Author and Title: 
author: Gamma, Helm, Johnson, and Vlissides
title: Design Patterns

After Author set to Lower Case: 
author: gamma, helm, johnson, and vlissides
title: design patterns

After Title set to Upper Case: 
author: GAMMA, HELM, JOHNSON, AND VLISSIDES
title: DESIGN PATTERNS

END TESTING MEDIATOR PATTERN
```
<a name="the_composite_pattern"></a>
The Composite Pattern
---------------------

definition (in Polish):
*Kompozyt składa obiekty w struktury drzewiaste odzwierciedlające hierarchię typu część-całość. Wzorzec ten umożliwia klientom traktowanie poszczególnych obiektów i ich złożeń w taki sam sposób.*

command:

```
    php examples/TheCompositePattern/example_01.php
```

example:

```php
// create ColorBashPrompt
$cbp = new ColorBashPrompt();

//single toy
echo $cbp->writeln("Single toy:", ColorBashPrompt::YELLOW);
$doll = new SingleToy("Laleczka Chucky");
echo $cbp->write($doll->getName(), ColorBashPrompt::BLUE);

//composite toy
echo $cbp->writeln("Composite toy:", ColorBashPrompt::YELLOW);
$ball = new SingleToy("Football ball");
$footballer = new SingleToy("Robert Lewandowski");
$pitch = new CompositeToy();
$pitch->add($ball);
$pitch->add($footballer);
echo $cbp->write($pitch->getName(), ColorBashPrompt::BLUE);

//add new toy to composite toy
echo $cbp->writeln("Add new toy to composite toy:", ColorBashPrompt::GREEN);
$arbiter = new SingleToy("Pierluigi Collina");
$pitch->add($arbiter);
echo $cbp->write($pitch->getName(), ColorBashPrompt::BLUE);

//remove toy from composite toy
echo $cbp->writeln("Remove toy from composite toy:", ColorBashPrompt::GREEN);
$pitch->remove($footballer);
echo $cbp->write($pitch->getName(), ColorBashPrompt::BLUE);

//create new composite toy and add it to other composite toy
echo $cbp->writeln("Create new composite toy and add it to other composite toy:", ColorBashPrompt::GREEN);
$post = new SingleToy("Slupek");
$crossbar = new SingleToy("Poprzeczka");
$net = new SingleToy("Siatka");
$bramka = new CompositeToy();
$bramka->add($post);
$bramka->add($crossbar);
$bramka->add($net);
$pitch->add($bramka);
echo $cbp->write($pitch->getName(), ColorBashPrompt::BLUE);
```

output:

```text
Single toy:
Laleczka Chucky
Composite toy:
Football ball
Robert Lewandowski
Add new toy to composite toy:
Football ball
Robert Lewandowski
Pierluigi Collina
Remove toy from composite toy:
Football ball
Pierluigi Collina
Create new composite toy and add it to other composite toy:
Football ball
Pierluigi Collina
Slupek
Poprzeczka
Siatka
```

<a name="the_builder_pattern"></a>
The Builder Pattern
---------------------

This example is based on book "Wzorce Projektowe, Elementy oprogramowania obiektowego wielokrotnego użytku" - Erich Gamma, Richard Helm, Ralph Johnson, John Vlissides.

definition (in Polish):
*Budowniczy (Builder) oddziela tworzenie złożonego obiektu od jego reprezentacji, dzięki czemu ten sam proces konstrukcji może prowadzić do powstawania różnych reprezentacji.*

Without builder:

```php
class MazeGame
{
	public function createMaze()
	{
		$maze = new Maze();

		$r1 = $maze->getRoom(1);
		if($r1 == null){
			$r1 = new Room(1);
		}
		$r2 = $maze->getRoom(2);

		if($r2 == null){
			$r2 = new Room(2);
		}
		$maze->addRoom($r1);
		$maze->addRoom($r2);

		return $maze;
	}
}
```

With builder pattern:

```php
class MazeGame2
{
    public function createMaze(MazeBuilder $mazeBuilder)
    {
        $mazeBuilder->buildMaze();
        $mazeBuilder->buildRoom(1);
        $mazeBuilder->buildRoom(2);
        return $mazeBuilder->getMaze();
    }
}
```

Look at example 01 and 02 to see the difference.