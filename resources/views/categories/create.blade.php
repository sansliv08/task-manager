@extends('layouts.app')

@section('title')
{{ isset($category) ? 'Edit Category' : 'Create Category' }}
@endsection

@section('content')
<h1 class="text-center my-5">
{{ isset($category) ? 'Edit Category' : 'Create Category' }}
</h1>

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">
						{{ isset($category) ? 'Edit Category' : 'Create Category' }}
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
							<form action="{{ isset($category) ? route('categories.update') : route('categories.store') }}" method="post">
								@csrf
								<div class="form-group">
									<input name="name" type="text" class="form-control" placeholder="Name" value="{{ isset($category) ? $category->name : '' }}">
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-primary">{{ isset($category) ? 'Edit Category' : 'Create Category' }}</button>
								</div>
							</form>
						</div>
        </div>
    </div>
</div>
@endsection