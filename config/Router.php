<?php

//1. URL === 1 ROUTE === UNE MÉTHODE DE CONTROLLER

class Router
{
    //attribut de la class
    private DefaultController $dc;
    //indique à ta class comment être instancie, obligatoire
    public function __construct()
    {
        //Instancie le DefaultController et l'affecte à l'attribut $dc
        $this->dc = new DefaultController();
        $this->cc = new CateroryController();
        
    }
    
    //reçoit la route et se chargera de faire correspondre la route à une méthode de controller
    // ? peut etre aussi null // le paramatre $route est de type string 
    public function handleRequest(? string $route): void // Indique que la méthode ne renvoie aucune valeur.
    {
        
        //conditions
        if($route !== null && $route === 'home')
        {
            //appel de la méthode home()
            $this->dc->home();
           //teste des routes : echo "Je veux appeler la route home<br>";
        }
        else if($route !== null && $route === 'add-category')
        {
            echo "Je veux appeler la route pour ajouter une catégorie<br>";
        }
        else if($route !== null && $route === 'get-category')
        {
            echo "Je veux appeler la route pour aafficher une catégorie<br>";
        }
        else if($route !== null && $route === 'get-categories')
        {
            $this->cc->getCategories();
            //test: echo "Je veux appeler la route pour afficher des catégories<br>";
        }
        else if($route !== null && $route === 'add-room')
        {
            echo "Je veux appeler la route pour ajouter une room<br>";
        }
        else if($route !== null && $route === 'get-rooms')
        {
            echo "Je veux appeler la route pour afficher des rooms<br>";
        }
        else if($route !== null && $route === 'add-message')
        {
            echo "Je veux appeler la route pour ajouter un message<br>";
        }
        else if($route !== null && $route === 'show-room')
        {
            echo "Je veux appeler la route show-room<br>";
        }
        else if($route === null )
        {
             $this->dc->home();
             //test: echo "pas de route<br>";
        }
        else
        {
            $this->dc->notFound();
            //test : echo "La route n'existe pas<br>";
        }
    }
}