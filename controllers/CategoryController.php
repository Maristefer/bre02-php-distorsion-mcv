<?php

class CateroryController
{
    //attirbut
    private CategoryManager $cm;
    
    public function __construct()
    {
        //instancier le manager dans le constructeur du Controller
        $this->cm = new CategoryManager();
    }
    
    public function addCategory(): void
    {
        echo "Je veux appeler la route pour ajouter une catégorie<br>";
    }
    
    public function getCategory(): void
    {
        //chemin de la page que l'on souhaite visualiser
        $template = "templates/get_category.phtml";
        
        //fait le lien avec la page principale
        require "templates/layout.phtml";
        //echo "Je veux appeler la route pour afficher une catégorie<br>";
    }
    
     public function getCategories(): void
    {
        //créer une variable $categories que l'on remplie avec le résultat de la 
        //méthode findAllCategories du CategoryManager.
        
       $categories = $this->cm->findAllCategories();
        
        $template = "templates/get_categories.phtml"; 
        
        require "templates/layout.phtml";
        
        //test route : echo "Je veux appeler la route pour afficher des catégories<br>";
    }
}