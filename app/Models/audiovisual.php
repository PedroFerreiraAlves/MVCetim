<?php

namespace MVCETIM\Models;

class AudioVisual extends Model
{

    private $queryresult;
    private $msg;

    public function queryresult(){
        return $this->queryresult;
    }
    public function getMsg(){
        return $this->msg;
    }


    public function listaTipo($parametro){

            $sql="SELECT * FROM audiovisual WHERE tipo = ?";
            $this->queryresult = $this->SelectAll($sql,$parametro);
            $this->msg=$parametro;



    }

}