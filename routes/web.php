<?php

use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Name;
use App\Models\post;
use App\Models\Students;
use App\Models\Post as ModelsPost;
use App\Models\User;
use Illuminate\Support\Facades\File;
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
   
    // $posts=[];
    // $files=File::files(resource_path("posts/"));
  
    // foreach($files as $file){
    //     $document=YamlFrontMatter::parseFile($file);
    //     // $posts[]=$document->body();
       
    // //   $posts[]=new post(
    // //     $document->matter('title'),
    // //     $document->matter('author'),
    // //     $document->matter('date'),
    // //     $document->matter('execert'),
    // //     $document->body()
    // //   );
    //   $posts[]=[
    //     "title" => $document->matter('title'),
    //     "author" => $document->matter('author'),
    //     "excerpt" => $document->matter('excert'),
    //     "data" => $document->matter('date'),
    //     "body" => $document->body()
    // ];
    // //   dd($posts);
    // }
return view('blog',[
    'blog'=>Post::latest()->with('category')->get()
]);
});
route::get('/post/{post:slug}',function(post $post){
    //find a post by it slug and pass it to view post
    return view('post',[
     'post'=>$post
    ]);
});
route::get('categories/{category:slug}',function(category $category){

 return view('post',[
     'post'=>$category->Posts
    ]);
});

route::get('authors/{author}',function(User $Author){
    //find a post by it slug and pass it to view post
    return view('post',[
     'post'=>$Author->posts
    ]);
});




// this is a tempory project that would be transferes

route::get('/results',function(){
    
    return view('results',[
        'students'=>Students::all()
        
    ]);

});