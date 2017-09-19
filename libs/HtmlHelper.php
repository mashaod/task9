<?php

class HtmlHelper
{

    public static function createSelect($name, $values, $size=1, $multi=false)
    {  
        if(!empty($values) && !empty($name))
        {
            if(is_array($values )&& is_int($size))
            {
                $multi == '1'?$multi = 'multiple':$multi=false;
                $str="<select size='$size' name='$name' $multi>";

                foreach ($values as $key => $value) 
                {
                    $str = $str . "<option value='$key'>$value</option>\n";
                } 

                $str = $str . "</select>";
                return $str;
            } 
            else
            {
                return "Invalid values";
            }
        }
        else
        {
            return "Values empty";
        }
    }


    public static function createTable($caption, $name_col, $valuesTab, $width=500, $border=1)
    {    
        if(!empty($caption) && !empty($name_col) && !empty($valuesTab))
        {
            $str = "<table width='$width' border='$border'>\n<caption>$caption</caption><tr>";

            foreach ($name_col as $name) 
            {
                $str = $str . "<th>$name</th>\n";
            }

            $str = $str . "</tr>";

            foreach ($valuesTab as $row => $values) 
            {
                $str = $str . "<tr>";

                foreach($values as $value)
                {
                    $str = $str . "<td>$value</td>";
                }

                $str = $str . "</tr>\n";
            }

            $str = $str . "</table>";
            return $str;
        }
        else
        {
            return "Values empty";
        }  
    }  

    public static function createList($tag, $type, $valuesNum)
    {  
        if ($tag == "ol")
        {
            $str="<$tag type='$type' start='3'>";
        }
        elseif ($tag == "ul")
        {
            $str="<$tag type='$type'>";
        }
        else
        {
            return "incorrect tag";          
        }

        foreach ($valuesNum as $value) 
        {
            $str = $str . "<li>$value</li>\n";
        } 

        $str = $str . "</$tag>";
        return $str;
    }

    public static function createListOfDefinitions($values)
    {  
        if(!empty($values))
        {
            $str="<dl>";

            foreach ($values as $definition => $value)
            {
                $str .= "<dt>" . $definition . "</dt>";
                $str .= "<dd>" . $value . "</dd>";
            }

            return $str;
        }
        else
        {
            return "Values empty";
        }
    }

    public static function createCheckbox($name, $values, $checkVal='null')
    {  
        if(!empty($values))
        {
            foreach ($values as $value => $description)
            {
                if ($checkVal != 'null' && in_array($value, $checkVal))
                {
                    $str .= "<input type=\"checkbox\" name=\"" . $name . "\" value=\"" . $value . "\" checked>" . $description . "<Br />";
                }
                else
                {
                    $str .= "<input type=\"checkbox\" name=\"" . $name . "\" value=\"" . $value . "\">" . $description . "<Br />";
                }
            }

            return $str;
        }
        else
        {
            return "Values empty";
        }
    }
    public static function createRadioButtons($name, $values, $checkVal='null')
    {  
        if(!empty($values))
        {
            foreach ($values as $value => $description)
            {
                if ($checkVal != 'null' && $checkVal==$value)
                {
                    $str .= "<input type=\"radio\" name=\"" . $name . "\" value=\"" . $value . "\" checked>" . $description . "<Br />";
                }
                else
                {
                    $str .= "<input type=\"radio\" name=\"" . $name . "\" value=\"" . $value . "\">" . $description . "<Br />";
                }
            }

            return $str;
        }
        else
        {
            return "Values empty";
        }
    }
}


