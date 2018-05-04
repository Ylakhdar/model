<?php
require '../vendor/autoload.php';

$loader = new Nette\Loaders\RobotLoader;

// Add directories for RobotLoader to index
$loader->addDirectory('../controleur');
$loader->addDirectory('../modele');
$loader->addDirectory('../vue');

// And set caching to the 'temp' directory
$loader->setTempDirectory('public/temp');
$loader->register(); // Run the RobotLoader



$routeur = new Routeur();
$routeur->routerRequete();

