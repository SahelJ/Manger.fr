<?php

namespace App\Controller;

use App\Model\MealModel;
use Vendor\Controller\Controller;

class HomeController extends Controller{

    public function __construct()
    {
        $this->mealModel = new MealModel();
    }

    public function home(){
    

        $meals =  $this->mealModel->findAll();
        foreach ($meals as $meal) {
            $meal->Name = strtoupper($meal->Name);
            
            }
            
            $this->render("home", ["meals" => $meals]);



    }



}