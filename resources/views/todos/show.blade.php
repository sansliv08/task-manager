@extends('layouts.app')

@section('title')
Todo: {{ $todo->name }}
@endsection


@section('content')
	<h1 class="text-center mb-5">
		
	</h1>
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card card-default">
				<div class="card-header">
					<h2>Title</h2>
					<h5 class="font-weight-bold">{{ $todo-> name }}</h5>
				</div>
				<div class="card-body">
					<h4> Description </h4>
					{{ $todo-> description }}
				</div>
			</div>
			<a href="/todos/{{ $todo->id }}/delete" class="btn btn-danger btn-sm float-right mt-3 px-3">Delete</a>
			<a href="/todos/{{ $todo->id }}/edit" class="btn btn-info btn-sm float-right mt-3 px-3 mr-3">Edit</a>


		</div>
	</div>
@endsection
