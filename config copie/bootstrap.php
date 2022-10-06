<?php 

use Dotenv\Dotenv;

//Chargement de l'autoloader de composer
require_once __DIR__."/../vendor/autoload.php";


//chargement des variables d'environnement
//nous allons chercher sur internet pour chercher une library https://github.com/vlucas/phpdotenv
$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();