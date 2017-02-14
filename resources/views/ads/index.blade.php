@extends ('layouts.master')

@section('content')
	<div class="container">
     @foreach ($ads as $ad)
           @include('ads.ad')
      @endforeach
      </div>
@endsection
