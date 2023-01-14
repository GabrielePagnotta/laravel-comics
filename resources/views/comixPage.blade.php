@extends("layout.structureHTML2")
@section('link')
<link rel="stylesheet" href="{{asset("css/page2/main.css")}}">
@endsection


@section("title","DC comix-fumetti")
@section("main-content")
    
    <link rel="stylesheet" href="{{asset("css./page1/main.css")}}">

    <section class="jumbo">
    <div class="current-series-2">
            <img class="showcomix" src="{{$arraysaved["thumb"]}}" alt="">
    </div>
    <div class="title-showbook">COMIC BOOK</div>
    <div class="gallery-showbook">VIEW GALLERY</div>
    </section>
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
                    <img src="../images/advertise.png" alt="advertising-image">
                </div>
            </div>
    </div>
    
@endsection