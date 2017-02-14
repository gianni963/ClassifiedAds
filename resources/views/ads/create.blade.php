@extends ('layouts.master')

@section ('content')

    <h1> Publish new ad </h1>

    <hr>

	<form method="POST" action="/ads">

	{{csrf_field()}}
	  <div class="form-group">
	    <label for="title">Title</label>
	    <input type="text" class="form-control" id="test" name="title" >
	  </div>

	  <div class="form-group">
	    <label for="content">Content</label>
	    <textarea id="content" name="content" class="form-control" ></textarea>
	  </div>

	  <div class="form-group">
	    <label for="price">Price</label>
	    <input type="text" class="form-control" id="price" name="price" >
	  </div>

	  <div class="form-group">
	    <label for="location">Location</label>
	    <input type="text" class="form-control" id="location" name="location" >
	  </div>

	  <div class="form-group">
	      <button type="submit" class="btn btn-primary">Publish</button>
      </div>
      
	    @if(count($errors))     
		   	<div class="alert alert-danger">
			    <ul>

			       @foreach ($errors->all() as $error)
			       
			           <li>{{$error}}</li>
			  
			       @endforeach
			   
			    </ul>

		    </div> 
	    @endif
	</form>


@endsection