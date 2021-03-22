@extends('layouts.app')

@section('title')
Todo Edit
@endsection

@section('content')
<h1 class="text-center">Edit Todo</h1>

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">
							Edit task
						</div>
            <div class="card-body">
							@if($errors -> any())
							<div class="mb-3">
								<ul class="list-group">
									@foreach($errors->all() as $error)
									<li class="list-group-item list-group-item-danger">{{ $error }}</li>
									@endforeach
								</ul>
							</div>
							@endif
							<form action="/todos/{{ $todo->id }}/update" method="post">
								@csrf
								<div class="form-group">
									<input value="{{ $todo->name }}" name="name" type="text" class="form-control" placeholder="Name">
								</div>
								<div class="form-group">
									<textarea name="description" class="form-control" cols="6" rows="6">{{ $todo->description }}</textarea>
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-primary">Update Todo</button>
								</div>
							</form>
						</div>
        </div>
    </div>
</div>

@endsection