<?php


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App;


use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

/**
 * Description of QueryFilter
 *
 * @author Admin
 */
abstract class QueryFilter {
    //put your code here
    protected $request;
    protected $builder;
    
    function __construct(Request $request) {
        $this->request = $request;
    }
    
    public function apply(Builder $builder){
        $this->builder = $builder;
        foreach ($this->filters() as $name=>$value) {
            if(method_exists($this, $name)){
                if(trim($value)){
                    $this->$name($value);
                }else{
                    $this->$name();
                }
            }
        }
        
        return $this->builder;
    }
    
    public function filters(){
        return $this->request->all();
    }

    
}
