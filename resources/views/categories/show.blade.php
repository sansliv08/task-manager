@extends('layouts.app')

@section('title')
Category: {{ $category->name }}
@endsection


@section('content')
	<h1 class="text-center mb-5">
		
	</h1>
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card card-default">
				<div class="card-header">
					<h2 class="font-weight-bold">Title</h2>
					
				</div>
				<div class="card-body">
					<p>{{ $category-> name }}</p>
				</div>
			</div>
			<a href="/categories/{{ $category->id }}/delete" class="btn btn-danger btn-sm float-right mt-3 px-3">Delete</a>
			<a href="/categories/{{ $category->id }}/edit" class="btn btn-info btn-sm float-right mt-3 px-3 mr-3">Edit</a>


		</div>
	</div>
@endsection