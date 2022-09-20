<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>blog posts</title>
    <link rel="stylesheet" href="/app.css">
</head>
<body>
    <article>
    
 
   <article>
    
    {{-- <h1>{{$post->title}}</h1> --}}
    <h1 align="center">{{$post->title}}</h1>
 <ul>
    <li>Author:{{$post->Author->name}}</li>
    <li><h5> By:<a href="#">{{$post->Author->name}}</a> in {{$post->category->name}}</h5></li>
 </ul>
   
{{-- <a href="/categories/{{$post->categories->slug}}"><h1>cateqory:{{$post->category->name}}</h1></a> --}}


    <p>
       {{ $post->body}}  
    </p>

   </article>
       
 
<a href="/blog"> <h1>go back</h1></a>
     </article>
    
</body>
</html>