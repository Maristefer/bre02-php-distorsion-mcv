<?php

class RoomController
{
    public function __construct()
    {
        
    }
    
    public function addRoom(): void
    {
        echo "Je veux appeler la route pour ajouter une room<br>";
    }
    
    public function get_Rooms(): void
    {
       echo "Je veux appeler la route pour afficher des rooms<br>";
    }
    
     public function showRoom(): void
    {
        echo "Je veux appeler la route show-room<br>";
    }
}