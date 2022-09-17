<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/app.css">
    <title>blog</title>
</head>
<body>
   
     <article>
     @foreach ($blog as $post)
     <a href="/post/{{$post->slug}}"> <h1><?php echo($post->title); ?></h1></a>
     <ul>
      <li>Author:{{$post->author}}</li>
      <li>Date:{{$post->created_at}}</li>
     </ul>
    <p>
      <?php echo($post->excert); ?>
    </p>
 
    @endforeach 
       
     </article>

</body>
</html>