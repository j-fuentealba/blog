@extends('layouts.app')

@section('content')

	<div class="container">

		<div class="col-md-12 col-md-offset-2">
			
			<h1>Listado de Noticias</h1>

			@foreach($posts as $post)

				<div class="card">
					
					<div class="card-header">
						
						<h4>{{ $post->name }}</h4>

					</div>

					<div class="card-body">
						
						@if($post->file)

							<img src="{{ $post->file }}" class="card-img-top mb-2">

						@endif

						<p class="card-text">{{ $post->excerpt }}</p>	

						<a href="{{ route('blog.show', $post->slug) }}" class="float-right">Leer más</a>

					</div>

				</div>

			@endforeach

			{{ $posts->render() }}

		</div>		

	</div>

@endsection