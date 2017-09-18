<?php

class Model
{
    private $htmlHolder = array(
        '%SELECT%'=>'',
        '%SELECT-MULTI%'=>'', 
        '%TABLE%'=>'', 
        '%LIST%'=>'', 
        '%LIST-DEF%'=>'', 
        '%CHECKBOX%'=>'',
        '%RADIO%'=>''
    );

    public function __construct()
    {

    }

    public function getArray()
    {       
        return $this->htmlHolder;
    }

    public function addHolder($name, $value)
    {
        if(!empty($name) && !empty($value))
        {
            $this->htmlHolder[$name] = $value;
        }   
    }
}

