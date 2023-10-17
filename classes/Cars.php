<?php 

class Cars {
    protected  $model;
    protected $year;

    public function getModel(){
        return $this->model;
    }

    public function setModel($value){
        $this->model = $value;
    }

    public function setYear($value){
        $this->year = $value;
    }

    public function getYear(){
        return $this->year;
    }
}