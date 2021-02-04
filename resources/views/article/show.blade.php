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
           <h1>{{$articles->body}}</h1>
		</div>
	</div>
</div>
@endsection