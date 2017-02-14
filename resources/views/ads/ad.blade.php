<div clas="container">
	<h2><a href="/ads/{{$ad->id}}"> {{ $ad->title }} </a></h2>
	<p>{{ $ad->created_at->toFormattedDateString() }}</p>
	<p>{{ $ad->content }}</p>
	<p>{{ $ad->price }}</p>
	<p>{{ $ad->location }}</p>
</div>
