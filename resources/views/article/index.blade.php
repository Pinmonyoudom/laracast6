@extends('simpleWork.layout')

@section('content')
<div id="wrapper">
	<div id="page" class="container">
        @foreach ($articles as $article)

        <div class="content">
			<div class="title">
				<h2><a href="{{route('articles.show',$article)}}">{{$article->title}}</a></h2>
                {{-- <h2><a href="{{$article->path()}}"></a></h2> --}}
            </div>
			<p>
                <img 
                    src="/images/banner.jpg" 
                    alt="" 
                    class="image image-full" 
                /> 
            </p>
           {!! $article->except !!}
        </div>
        @endforeach
		
	</div>
</div>
@endsection