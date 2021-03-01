<?php

namespace App\Controller;

use Vendor\Controller\Controller;

class HomeController extends Controller{

    public function home(){
        $this->render("home");
    }


}