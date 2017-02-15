@extends ('layouts.master')
	@section ('content')
		<div class="container">
			<h1>{{$ad->title}}</h1>

			@if (count($tags))
				<ul>
					@foreach($tags as $tag)
						<li>
							<a href="/ads/tags/{{$tag}}">{{ $tag }}</a>
						</li>
					@endforeach
				</ul>

			@endif
			<p>{{ $ad->user->name}} - {{ $ad->created_at->toFormattedDateString() }}</p>
			<p>{{ $ad->content }}</p>
			<p>{{ $ad->price }}</p>
			<p>{{ $ad->location }}</p>
		</div>	
	@endsection
