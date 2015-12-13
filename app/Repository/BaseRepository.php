<?php
namespace App\Repository;
use Illuminate\Support\Facades\DB;

abstract class BaseRepository
{

    abstract public function  getModel();


    public function newQuery(){
        return  $this->getModel()->newQuery();
    }
    public function find($id){

        return $this->newQuery()->find($id);

    }
    public function getAllModel(){
        return $this->getModel()->all();

    }
    public function DatosRelacion($tabla){
        return $this->getModel()->with([$tabla]);
    }

    public function  newConexionDBA($dba){
         $dbConexion=  DB::connection($dba);

        return $dbConexion;
    }
}