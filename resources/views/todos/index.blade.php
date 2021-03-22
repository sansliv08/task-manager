@extends('layouts.app')

@section('title')
Task-manager
@endsection

@section('content')
	<h1 class="text-center my-5">Task-manager Page</h1>
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card card-default">
				<div class="card-header">
					Todos
				</div>
				<div class="card-body">
					<ul class="list-group">
						@foreach($todos as $todo)
						<li class="list-group-item text-muted">
							{{ $todo->name }}
							<p>Category: {{ $todo->category->name }}</p>


							<a href="/todos/{{ $todo->id }}" class="btn btn-light btn-sm float-right">View</a>

							@if(!$todo->completed)
								<a href="/todos/{{ $todo->id }}/complete" class="btn btn-success btn-sm mr-3 float-right">Complete</a>
							@endif

						</li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
	</div>
@endsection
