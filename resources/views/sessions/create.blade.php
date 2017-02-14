@extends ('layouts.master')

@section('content')
	<div class="container">
		<h1>Sign in</h1>
		<form method="POST" action="/login">
			{{csrf_field()}}
			<div class="form-group">
				<label for='email'>Email:</label>
				<input type="email" class="form-control" id="email" name="email" required>
			</div>

			<div class="form-group">
				<label for='password'>Password:</label>
				<input type="password" class="form-control" id="password" name="password" required>
			</div>
			<div class="form-group">
			    @if(count($errors))     
				   	<div class="alert alert-danger">
					    <ul>

					       @foreach ($errors->all() as $error)
					       
					           <li>{{$error}}</li>
					  
					       @endforeach
					   
					    </ul>

		    </div> 
				@endif
			</div>	
			<button type="submit" class="btn btn-primary">Sign in</button>
		</form>
	</div>

@endsection