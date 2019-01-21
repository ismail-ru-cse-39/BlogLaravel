@extends('main')

@section('title', '| All Posts')

@section('content')
	

	<div class="row">
		<div class="col-md-9">
			<h1 style="margin-top:20px;">All Posts</h1>
		</div>

		<div class="col-md-3">
			<a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Create New Post</a>

		</div>

		<div class="col-md-12">
			<hr>

		</div>

	</div><!--end of the row-->

	<div class="row">
		
		<div class="col-md-12">
			
			<table class="table">
				<thead>
					
					<th>#</th>
					<th>Title</th>
					<th>Body</th>
					<th>Created At:</th>
					<th></th>

				</thead>

				<tbody>
					@foreach ($posts as $post)
						<tr>
							<th>{{ $post->id }}</th>
							<td>{{ $post->title }}</td>
							<td>{{ substr($post->body, 0, 50)}}{{ strlen($post->body) > 50 ? "..." : "" }}</td>
							<td>{{date('M j, Y', strtotime($post->created_at)) }}</td>

							<td><a href="#" class="btn btn-default">View</a><a href="#" class="btn btn-default">Edit</a></td>
						</tr>

					@endforeach

				</tbody>

			</table>

		</div>
	</div>




@endsection