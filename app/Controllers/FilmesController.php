<?php

namespace MVCETIM\Controllers;

use MVCETIM\Models\AudioVisual;

class Filmes extends Controller
{
    public function index()
    {
        $this->view->titulo='FILMES | MVCETIM 2020';
        $this->view->filmes=$this->montafilmes();
        $this->view->render('filmes');


    }

    public function montaFilmes(){
        $obra = new \MVCETIM\Models\AudioVisual;
        $obra->listaTipo(['filme']);

        $filmes=$obra->queryresult();
        return $filmes;


    }
}