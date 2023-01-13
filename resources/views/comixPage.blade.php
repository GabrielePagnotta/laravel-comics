@extends("layout.structureHTML2")
@section('link')
<link rel="stylesheet" href="{{asset("css/page2/main.css")}}">
@endsection


@section("title","DC comix-fumetti")
@section("main-content")
    <div class="blue-container"></div>
    <div class="content">
        <div>
            <h1>{{$arraysaved["title"]}}</h1>
            <div class="greenline-price">
                <div class="price">
                    <p>U.S. PRICE <span class="number-price">{{$arraysaved["price"]}}</span></p>
                    <p>AVALABLE</p> 
                </div>
                <div class="availability">
                    <p>Check availability</p>
                </div>
            </div>
            
            <article>{{$arraysaved["description"]}}</article>
        </div>
            <div>
                <label for="adv">advertisement</label>
                <div class="adv">
                    <img src="https://static.miraheze.org/nonciclopediawiki/4/45/Monstero_art_attack.jpg" alt="advertising-image">
                </div>
            </div>
    </div>
@endsection