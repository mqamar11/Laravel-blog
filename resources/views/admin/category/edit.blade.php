@extends('layouts.app')



@section('content')

@include('admin.includes.partials')

<div class="card">
    <div class="card-header">
         Update Category:  <b>{{ $category->name }}</b>
    </div>
    <div class="card-body">
        <form action="{{ route('category.update', ['id' => $category->id]) }}" method="POST" >
            {{ csrf_field() }}
            @method('PUT')

            <div class="form-group">
                <label for="name">Name</label>

                <input type="text" name="name" id="name" class="form-control" value="{{ $category->name}}">
            </div>

            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit">
                        Update Category
                    </button>
                </div>
            </div>

        </form>
    </div>
</div>

@stop
