@extends('front.layout')

@section('main')

  <div id="content">
    <div>
      <div>
        <div class="news"><span>Yangilliklar</span></div>
          @foreach($news as $news)
            <section>
              <h1>{{$news->title}}</h1>
              <p>{{$news->information}}</p>
            </section>
          @endforeach
      </div>
    </div>
  </div>
  
@endsection