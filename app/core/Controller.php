<?php

// Aria Rupawansyah - 193040140

class Controller{
    
    public function view($view, $data = [])
    {
        require_once '../app/views/' . $view . '.php';
    }

}