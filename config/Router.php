<?php

//1 URL === 1 ROUTE === UNE MÉTHODE DE CONTROLLER

class Router
{
    //indique à ta class comment être instancie, obligatoire
    public function __construct()
    {
        
    }
    //reçoit la route et se chargera de faire correspondre la route à une méthode de controller
    public function handleRequest(string $route): void
    {
        
        if($route !== null && $route === 'home')
        {
            
        }
        else if($route !== null && $route === 'add-category')
        {
            
        }
        else if($route !== null && $route === 'add-room')
        {
            
        }
        else if($route !== null && $route === 'add-message')
        {
            
        }
        else if($route !== null && $route === 'show-room')
        {
            
        }
        else if($route !== null )
        {
            
        }
        else
        {
            
        }
    }
}