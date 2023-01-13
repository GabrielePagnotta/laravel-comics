<link rel="stylesheet" href="{{asset("css./page1/main.css")}}">
<div class="background-comix">


    @foreach($comix as $id=>$value)
    <div class="card">
        <a href="{{route('show.fumetti',compact('id'))}}">
        <div class="card-image">
            <img class="img-size" src="{{asset("$value[thumb]")}}" alt="">
        </div>
        <div class="card-title">
            <p>{{$value["title"]}}</p>
        </div>
    </a>
    </div>

 @endforeach
    <div>
        <a class="see-more" href="http://127.0.0.1:8000/comix">LOAD MORE</a>
    </div>
    
</div>