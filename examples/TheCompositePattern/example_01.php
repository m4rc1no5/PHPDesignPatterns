<?php

// autoload from composer
require __DIR__ . '/../../vendor/autoload.php';

use PHPDesignPatterns\src\TheCompositePattern\SingleToy;
use PHPDesignPatterns\src\TheCompositePattern\CompositeToy;

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
