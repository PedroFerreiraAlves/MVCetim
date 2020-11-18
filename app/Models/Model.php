<?php

namespace MVCETIM\Models;

class Model extends Conexao
{
/**
 * @param $sql
 * @param $param
 * @param $data
 */

 protected function SelectAll($sql, $param = null)
 {
        try
        {
            $query = $this->connect()->prepare($sql);
        
            $query->execute($param);
    
            $data = $query->fetchAll(\PDO::FETCH_OBJ);
            return $data;
            $query=null;
        }
        catch(\Exception $erro){
            echo 'Erro ao executar Query<br>'. $erro->getMessage(); 

        }
 }

}