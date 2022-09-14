<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Name;
use App\Models\post;
use League\CommonMark\Extension\FrontMatter\Data\LibYamlFrontMatterParser;
use Spatie\YamlFrontMatter\YamlFrontMatter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello',function(){
    return response("<h1>hello kual</h1>");
});
route::get('/api',function(){
    return response("hello",404);
});
route::get('/posts/{age}',function($age){
    // return response("<h1>this post is</h1>".$id);
    return view('list',[
        "name"=>Name::find($age)
      ]);


});
route::get('/search',function(Request $request){
 return $request->name ."<br>".$request->city;

});
route::match(['get','post'],'/req',function(){
      return response("hello from match request");
});
// route::post("/kual",function(){
//     return "i gat a request";
// }); 
route::redirect('/name','req');
route::view('/louis','louis');
route::get('/see',function(){
    return view("kual",[
        "names"=>Name::all()
        
    ]);
});
// route::get('/find{age}',function($age){
  

// });
route::get('/blog',function(){
    $path=resource_path("posts/first-post.html");
    // LibYamlFrontMatterParser::parseFile($path);
   $object=YamlFrontMatter::parseFile($path);
   ddd($object->matter());

// return view('blog',[
//     'blog'=>post::all()
// ]);
});
route::get('/post/{post}',function($slug){
    //find a post by it slug and pass it to view post
    return view('post',[
     'post'=>post::find($slug)
    ]);
});