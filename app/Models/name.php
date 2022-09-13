<?php
namespace App\Models;
class Name{
    public static function all(){
 
      return  [
            [
              "name"=>"kual",
            "Age"=>20,
            "class"=>1  
            ],
            [
                "name"=>"arop",
              "Age"=>14,
              "class"=>6 
              ],
              [
                "name"=>"goodwill",
              "Age"=>8,
              "class"=>4  
              ],
              [
                "name"=>"Garang",
              "Age"=>22,
              "class"=>1 
              ]
              ];
    }
public static function find($age){
    $names=self::all();
    foreach($names as $name){
        if($name['Age']==$age){
            return $name;
        }

    }
}

}
?>