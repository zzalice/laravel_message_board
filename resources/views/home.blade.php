@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					{!! Form::open(array('url'=>'new', 'method'=>'post'))!!}                                
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
			</div>
		</div>
	</div>
</div>
@foreach($messages as $message)	  <!--"$messages" is from HomeController.php: return view('home')->with(   'messages'     ,$messages);-->
    <div class="panel panel-default">                                                                                                
        <div class="panel-heading"><h4> {{ $message->title }}</h4></div>
        <div class="panel-body">{{ $message->content }}</div>                                        
    </div>                                                                                                                           
@endforeach
@endsection
