
<body>
   @foreach ($names as $name)
 <a href="/posts/{{$name['Age']}}">  <h1>Name:{{$name['name']}}</h1> </a>
   <h5>Age:{{$name['Age']}}</h5>
   <h5>Class:{{$name['class']}}</h5>
       
   @endforeach 
   @if (count($name)>1)
       <p>listing found</p>
   @endif
  
</body>
