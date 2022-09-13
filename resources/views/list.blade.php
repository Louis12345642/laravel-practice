<body>
    @foreach ($name as $list)
    <h1>Name:{{$list['name']}}</h1>
    <h5>Age:{{$list['Age']}}</h5>
    <h5>Class:{{$list['class']}}</h5>
        
    @endforeach 
    @if (count($name)>1)
        <p>listing found</p>
    @endif
   
 </body>
 