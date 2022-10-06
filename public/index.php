<?php

/**
 * 
 * Bienvenue dans notre framework fait maison
 * 
 * L'index.php représente le "FrontController"
 * Ses rôles :
 * -charger le fichier de configuration
 * -creer une nouvelle instance du noyau
 * -récuper la réponse qui sera ensuie envoyée au navigateur
 *
 */

 //chargement du fichier de configuration
//Charger les varibles d'environnement
require_once dirname(__DIR__). "/config/bootstrap.php";



dd("Hello"); // dump and die
//Création d'une nouvelle instance du noyau de l'application

//Soumission de la requête au noyau
//Récupération de la réponse

//Envoi de la réponse au navigateur