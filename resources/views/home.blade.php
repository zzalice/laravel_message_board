@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Post Message</div>

				<div class="panel-body">
					{!! Form::open(array('url'=>'new', 'method'=>'post'))!!}
						<div class='form-group'>
							{!! Form::label('name', 'Name')!!}
						<br>
						{{ Auth::user()->name }}
						{!! Form::hidden('name', Auth::user()->name) !!}
						</div>

    					<div class='form-group'>
        					{!! Form::label('title', 'Title')!!}
				        <br/>
				        {!! Form::text('title')!!}
					    </div>
					    
					    <div class='form-group'>
					        {!! Form::label('content', 'Content')!!}
					        <br/>
					        {!! Form::textarea('content')!!}
					    </div>
					    
					    {!! Form::submit('Send', array('class'=>'btn btn-primary'))!!}
					 {!! Form::close()!!}
				</div>

				@foreach($messages as $message)
				    <div class="panel panel-default">
				        <div class="panel-heading">
				        <h4>{{ $message->name }} : {{ $message->title }}</h4></div>
				        <div class="panel-body">{{ $message->content }}</div>
				    </div>
				@endforeach
			</div>
		</div>
	</div>
</div>
@endsection
