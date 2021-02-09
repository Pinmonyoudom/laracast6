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
          {{$articles->body}}
		</div>
	</div>
</div>
@endsection