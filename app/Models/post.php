<?php
namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class post{
    public $title;
    public $author;
    public $date;
    public $excert;
    

public function  __contructor($title,$author,$date,$excert){
    $this->$title=$title;
    $this->$author=$author;
    $this->$date =$date;
    $this->$excert =$excert;


}
    


    public static function all(){
        $files=File::files(resource_path("posts/"));
       return  array_map(function($file){
            return $file->getContents();
         },$files);
    
    }
    public static function find($slug){
       
        $path=resource_path("posts/{$slug}.html");
        if(! file_exists($path)){
         throw new ModelNotFoundException();
        }
           return cache()->remember("post.{$slug}",1200,fn()=>file_get_contents($path));
       
       
    }
}
?>