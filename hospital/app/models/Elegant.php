<?php

class Elegant extends Eloquent
{
    protected $rules = array();

    public function validate( $data,$scenario=true) {
       
        $rules = $this->rules;    
        
        if(!$scenario){
            if(isset($rules['name'])){
                $rules['name'] = 'required|between:3,30';
            }
            if(isset($rules['email'])){
                $rules['email'] = 'required|Between:3,64|Email';
            }     
            $rules['image'] = 'mimes:jpg,jpeg,png';
        }        
        // make a new validator object
        $v = Validator::make( $data, $rules );
        return $v;
    }
}
