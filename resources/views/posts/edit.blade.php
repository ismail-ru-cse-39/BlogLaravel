@extends('main')

@section('title', '| Edit Blog Post')

@section('content')
	
	<div class="row">
		
		
		<div class="col-md-8">

			{!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}

			{{ Form::label('title', "Title:") }}
			
			{{ Form::text('title', null, ["class" => 'form-control form-control-lg']) }}

			{{ Form::label('body', "Body:", ['class' => 'form-spacing-top']) }}

			{{ Form::textarea('body', null, ["class" => 'form-control']) }}
			
			
		</div>

		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<dt>Create At:</dt>
					<dd>{{ date('M j, Y H:i', strtotime($post->created_at))}}</dd>
				</dl>

				<dl class="dl-horizontal">
					<dt>Last Updated:</dt>
					<dd>{{ date('M j, Y H:i',strtotime($post->updated_at))}}</dd>
				</dl>

				<hr>

				<div class="row">
					<div class="col-sm-6">
						{!!Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' =>'btn btn-danger btn-block' )) !!}
						
						
					</div>
					<div class="col-sm-6">
						{{ form::submit('Save Changes', ['class' => 'btn btn-success btn-block'] ) }}
						

					</div>
				</div>

				
			</div>
		</div>
		{!! Form::close() !!}
	</div><!--end of the form-->

@endsection