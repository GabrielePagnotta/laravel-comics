<link rel="stylesheet" href="{{asset("css./main.css")}}">
<div class="background-comix">


    @foreach($comix as $element )
        
    <div class="card">
        <div class="card-image">
            <img class="img-size" src="{{asset("$element[thumb]")}}" alt="">
        </div>
        <div class="card-title">
            <p>{{$element["title"]}}</p>
        </div>
    </div>
    

 @endforeach
    <div>
        <a class="see-more" href="http://127.0.0.1:8000/comix">LOAD MORE</a>
    </div>
    
</div>