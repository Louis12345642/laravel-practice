
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>

        @foreach ($students as $student)
        <ul>
            <li><h1>Full Name:{{$student->First_name}}  {{$student->Second_name}}</h1></li>
            <li><h4>Index Number:{{$student->index_number}} </h4></li>
            <li><h4>Section:{{$student->section}}  </h4></li>
        </ul>
       @endforeach 
        
    </body>
    </html>