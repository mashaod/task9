<?php

class Model
{
    private $htmlSrtings = array(
                                    '%SELECT-MULTI%'=>'', 
                                    '%TABLE%'=>'', 
                                    '%LIST%'=>'', 
                                    '%LIST-DEF%'=>'', 
                                    '%CHECKBOX%'=>'',
                                    '%RADIOBUTTONS%'=>''
                                );

    public function __construct()
    {

    }
    
    public function getArray()
    {       
        return $this->htmlSrtings;
    }

    public function createSelect($name, $size, $values)
    {
        $this->htmlSrtings['%SELECT-MULTI%'] = HtmlHelper::getSelect($name, $size, $values);
    }
    
    public function createTable($width, $border, $caption, $name_col, $valuesTab)
    {
        $this->htmlSrtings['%TABLE%'] = HtmlHelper::getTable($width, $border, $caption, $name_col, $valuesTab);
    }

    public function createList($tag, $type, $valuesNum)
    {
        $this->htmlSrtings['%LIST%'] = HtmlHelper::getList($tag, $type, $valuesNum);
    }

    public function createListOfDefinitions($values)
    {
        $this->htmlSrtings['%LIST-DEF%'] = HtmlHelper::getListOfDefinitions($values);
    }

    public function createCheckbox($name, $values)
    {
        $this->htmlSrtings['%CHECKBOX%'] = HtmlHelper::getCheckbox($name, $values);
    }

}


