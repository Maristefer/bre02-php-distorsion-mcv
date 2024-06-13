<?php

class CateroryController
{
    private CategoryManager $cm;
    
    public function __construct()
    {
        $this.cm = new CategoryManager();
    }
    
    public function addCategory(): void
    {
        echo "Je veux appeler la route pour ajouter une catégorie<br>";
    }
    
    public function get_Caterory(): void
    {
        echo "Je veux appeler la route pour aafficher une catégorie<br>";
    }
    
     public function getCaterories(): void
    {
        $categories = findAllCategories();
        echo "Je veux appeler la route pour afficher des catégories<br>";
    }
}