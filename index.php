<?php

//tous les liens ce font à partir de la racine du projet donc:

require_once "config/autoload.php";

    //on va recupéré la valeur du paramètre $_GET['route'] si il existe,
    if(isset($_GET['route']) && $_GET['route'] !== "")
    {
        //si existe on la recupère dans la variable $route
        $route = $_GET['route'];
    }
    else
    {
        //si'il n'existe pas la variable vaut null
        $route = null;
    }
    
    
    //instancier un Router
    $router = new Router();
    
    //appeler sa méthode handleRequest à qui nous allons envoyer la variable $route.
    $router->handleRequest($route);