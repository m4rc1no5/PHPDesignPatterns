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

```
    php examples/TheObserverPattern/example_01.php
```

<a name="the_mediator_pattern"></a>
The Mediator Pattern
--------------------

This example is base on https://sourcemaking.com/design_patterns/mediator/php

```
    php examples/TheMediatorPattern/example_01.php
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