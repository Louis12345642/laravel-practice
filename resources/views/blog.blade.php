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
       <a href="/post/first-post"> <h1>post title</h1></a>
     @foreach ($blog as $post)
    <article>
<?php echo($post['body']); ?>
    </article>
        
    @endforeach 
       
     </article>

</body>
</html>