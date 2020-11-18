<?php

namespace MVCETIM\Controllers;

use MVCETIM\Models\AudioVisual;

class Sobre extends Controller
{
    public function index()
    {
        $this->view->titulo='SOBRE | MVCETIM 2020';
        $this->view->render('sobre');


    }

   
}