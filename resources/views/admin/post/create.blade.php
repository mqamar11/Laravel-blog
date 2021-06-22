@extends('layouts.app')



@section('content')

@include('admin.includes.partials')

<div class="card">
    <div class="card-header">
        Create New Post
    </div>
    <div class="card-body">
        <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="title">Title</label>

                <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}">
            </div>

            <div class="form-group">
                <label for="featured">Featured Image</label>

                <input type="file" name="featured" id="featured" class="form-control">

            </div>

            <div class="form-group">
                <label for="featured">Select Category</label>
                <select name="category" class="form-control" id="featured">
                    <option value="" selected disabled>Select</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id  ?? ''}}">{{ $category->name  ?? ''}}</option>
                    @endforeach

                </select>
            </div>

            <div class="form-group">
                <label for="tags">Select Tags</label>
                @foreach ($tags as $tag)
                <div class="checkbox">

                    <label>
                        <input type="checkbox" name="tags[]" id="tags" value="{{ $tag->id }}"> {{ $tag->tag }}
                    </label>

                </div>
                @endforeach
            </div>


            <div class="form-group">
                <label for="content">Content</label>

                <textarea name="content" id="content" cols="5" rows="5" class="form-control" >
                    {{ old('content') }}
                </textarea>
            </div>

            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit">
                        Store Post
                    </button>
                </div>
            </div>

        </form>
    </div>
</div>

@stop
