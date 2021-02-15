@extends('simpleWork.layout')

@section('content')
<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
			<div class="title">
				<h2>{{$articles->title}}</h2>
            </div>
			<p>
                <img 
                    src="/images/banner.jpg" 
                    alt="" 
                    class="image image-full" 
                /> 
            </p>
          {!! $articles->body !!}
          <p style="margin-top: 1em">
            @foreach ($articles->tags as $item)
                <a href="{{route('articles.index',['tag'=>$item->name])}}">{{$item->name}}</a>
            @endforeach
          </p>
		</div>
	</div>
</div>
@endsection