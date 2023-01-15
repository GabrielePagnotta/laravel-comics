{{-- NON UTILIZZARE GOOGLE CHROME PER APRIRE IL PROGETTO --}}

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
    <div class="title-showbook">{{strtoupper($arraysaved["type"])}}</div>
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

    <div class="info-container">
        <div class="talent">
            <div class="elem">
               <h1>Talent</h1> 
            </div>
             <hr>
             <div class="elem">
                <h3>Art by:</h3>
                @foreach($arraysaved["artists"] as $key)
                    
                <span>{{$key}}</span>
                @endforeach
             </div>
             <hr>
             <div class="elem">
                <h3>Written by:</h3>
                @foreach($arraysaved["writers"] as $key)
                    
                <span>{{$key}}</span>
                @endforeach
             </div>
             <hr>
        </div>
        <div class="talent">
            <div class="elem">
                <h1>Specs</h1> 
             </div>
              <hr>
              <div class="elem">
                 <h3>Series:</h3>
                 
                    
                <span>{{$arraysaved["series"]}}</span>
                
              </div>
              <hr>
              <div class="elem">
                 <h3>U.S. Price:</h3>
                 <span>{{$arraysaved["price"]}}</span>
              </div>
              <hr>
              <div class="elem">
                <h3>On Sale Date:</h3>
                <span>{{$arraysaved["sale_date"]}}</span>
             </div>
             <hr>
        </div>
        
    </div>
<div class="full-size">
    <hr>
    <div class="icons2">
        <div>DIGITAL COMICS</div>
        
    </div>
    <div class="icons2">
        <div>SHOP DC</div>
        
    </div>
    <div class="icons2">
        <div>COMIC SHOP LOCATOR</div>
        
    </div>
    <div class="icons2">
        <p>SUBSCRIPTION</p>
        
    </div>
</div>
@endsection