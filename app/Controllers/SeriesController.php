<?php

namespace MVCETIM\Controllers;

use MVCETIM\Models\AudioVisual;

class Series extends Controller
{
    public function index()
    {
        $this->view->titulo='SERIES | MVCETIM 2020';
        $this->view->series=$this->montafilmes();
        $this->view->render('series');


    }

    public function montaFilmes(){
        $obra = new \MVCETIM\Models\AudioVisual;
        $obra->listaTipo(['serie']);

        $series=$obra->queryresult();
        return $series;


    }
}