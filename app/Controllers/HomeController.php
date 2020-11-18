<?php

namespace MVCETIM\Controllers;

use MVCETIM\Models\AudioVisual;

class Home extends Controller
{
    public function index()
    {
        $this->view->titulo='HOME | MVCETIM 2020';
        $this->view->filmes=$this->montafilmes();
        $this->view->series=$this->montaSeries();
        $this->view->render('home');


    }

    public function montaFilmes(){
        $obra = new \MVCETIM\Models\AudioVisual;
        $obra->listaTipo(['filme']);

        $filmes=$obra->queryresult();
        return $filmes;


    }
    public function montaSeries(){
        $obra = new \MVCETIM\Models\AudioVisual;
        $obra->listaTipo(['serie']);

        $series=$obra->queryresult();
        return $series;


    }
}