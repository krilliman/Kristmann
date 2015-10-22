@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Register</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					{!! Form::open(['url' => '/'],['class' =>'form-horizontal']) !!}
						<div Class="form-group">
								{!! Form::label('Firstname', 'Firstname:') !!}
								{!! Form::text('firstname', null, ['class' => 'form-horizontal']) !!}
							</div>

							<div Class="form-group">
								{!! Form::label('Lastname', 'Lastname:') !!}
								{!! Form::text('lastname', null, ['class' => 'form-horizontal']) !!}
							</div>
							<div Class="form-group">
								{!! Form::label('Username', 'Username:') !!}
								{!! Form::text('username', null, ['class' => 'form-horizontal']) !!}
							</div>
							<div Class="form-group">
								{!! Form::label('E-Mail', 'E-Mail:') !!}
								{!! Form::text('email', null, ['class' => 'form-horizontal']) !!}
							</div>
							<div Class="form-group">
								{!! Form::label('Password', 'password:') !!}
								{!! Form::password('password', null, ['class' => 'form-horizontal']) !!}
							</div>
							<div Class="form-group">
								{!! Form::label('Confirm Password', 'Confirm Password:') !!}
								{!! Form::password('conf_pass', null, ['class' => 'form-horizontal']) !!}
							</div>
							<div Class="form-group">
								{!! Form::label('Description', 'Description:') !!}
								{!! Form::textarea('description', null, ['class' => 'form-horizontal']) !!}
							</div>

							<div Class="form-group">
								{!! Form::submit('Sign Up', ['class' => 'btn btn-primary']) !!}
							</div>
						{!! Form::close() !!}
						@stop
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
