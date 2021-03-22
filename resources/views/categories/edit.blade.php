@extends('layouts.app')

@section('title')
Category Edit 
@endsection

@section('content')
<h1 class="text-center my-5">Edit Category</h1>

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">
							Edit Category
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
							<form action="/categories/{{ $category->id }}/update" method="post">
								@csrf
								<div class="form-group">
									<input value="{{ $category->name }}" name="name" type="text" class="form-control" placeholder="Name">
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-primary">Update Category</button>
								</div>
							</form>
						</div>
        </div>
    </div>
</div>
@endsection