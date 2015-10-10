# PHPDesignPatterns
Design Patterns in PHP

[![Build Status](https://travis-ci.org/m4rc1no5/PHPDesignPatterns.svg?branch=master)](https://travis-ci.org/m4rc1no5/PHPDesignPatterns)

Documentation
=============

Table of contents
-----------------

1. [Installation](#Installation)
2. [Run examples](#run)
3. [The Observer Pattern](#the_observer_pattern)
4. [The Mediator Pattern](#the_mediator_pattern)
5. [The Composite Pattern](#the_composite_pattern)

<a name="installation"></a>
Installation
------------

After download PHPDesignPatterns You must use composer to load all dependecies.

```
    composer install -o
```

Update dependecies: 

```
    composer update -o
```

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
--------------------

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