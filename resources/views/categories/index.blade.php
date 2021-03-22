@extends('layouts.app')

@section('title')
Categories List
@endsection

@section('content')
	<h1 class="text-center my-5">Categories List</h1>
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card card-default">
				<div class="card-header">
					Categories
				</div>
				<div class="card-body">
					<ul class="list-group">
						@foreach($categories as $category)
						<li class="list-group-item">
							<div>{{ $category->name }}</div>
							<div>Todos count: {{ $category->todos->count() }}</div>
							<a href="/categories/{{ $category->id }}" class="btn btn-light btn-sm float-right">View</a>
						</li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
	</div>
@endsection