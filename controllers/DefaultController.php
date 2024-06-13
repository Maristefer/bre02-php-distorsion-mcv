<?php

class DefaultController
{
    public function __construct()
    {
        
    }
    
    //2 méthodes
    public function home(): void
    {
        //créer une variable $template qui contiendra le chemin(depuis l'index) du template permettant d'afficher la home
        $template = "templates/home.phtml"; // ou $template ="home";
        
        require "templates/layout.phtml";
      //test: echo "Je veux appeler la route home<br>"; 
    }
    
    public function notFound(): void
    {
         $template = "templates/404.pthml";
        
        require "templates/layout.phtml";
       //test: echo "La route n'existe pas<br>";
    }
}