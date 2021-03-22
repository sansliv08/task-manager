@extends('layouts.app')

@section('title')
{{ isset($todo) ? 'Edit Todo' : 'Create Todo' }}
@endsection

@section('content')
<h1 class="text-center">
    {{ isset($todo) ? 'Edit Todo' : 'Create Todo' }}
</h1>

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">
                {{ isset($todo) ? 'Edit Todo' : 'Create Todo' }}
            </div>
            <div class="card-body">
                @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-group">
                        @foreach($errors->all() as $error)
                        <li class="list-group-item">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{ isset($todo) ? route('todos.update', $todo->id) : route('todos.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input name="name" type="text" class="form-control" placeholder="Name" value="{{ isset($todo) ? $todo->name : '' }}" />
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="category_id">
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}" 
                                @if(isset($todo)) 
                                    @if($todo->category_id === $category->id)
                                        selected
                                    @endif
                                @endif
                                >
                                {{ $category->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea name="description" class="form-control" cols="6" rows="6">{{ isset($todo) ? $todo->description : "" }}</textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">{{ isset($todo) ? 'Edit Todo' : 'Create Todo' }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection