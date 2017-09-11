<?php

class HtmlHelper
{
    
  public static function getSelect($name, $size, $values)
  {  
      if(!empty($values))
      {
          if(!empty($name) && !empty($size) && is_int($size))
          {
              $str="<select size='$size' name='$name' multiple>";

              foreach ($values as $key => $value) 
              {
                $str = $str . "<option value='$key'>$value</option>\n";
              } 

              $str = $str . "</select>";
              return $str;
          } 
          else
          {
              return "Some is wrong";
          }
      }
      else
      {
          return "Values empty";
      }
  }
  
  
  public static function getTable($width, $border, $caption, $name_col, $valuesTab)
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
  
  public static function getList($tag, $type, $valuesNum)
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

  public static function getListOfDefinitions($values)
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

  public static function getCheckbox($name, $values)
  {  
      if(!empty($values))
      {

          foreach ($values as $value)
          {
              $str .= "<input type=\"checkbox\" name=\"" . $name . "\" value=\"" . $value['value'] . "\">" . $value['description'] . "<Br />";
          }

          return $str;
      }
      else
      {
          return "Values empty";
      }
   }
}


