@extends('layouts.app')



@section('content')

@include('admin.includes.partials')

<div class="card">
    <div class="card-header">
        Create New User
    </div>
    <div class="card-body">
        <form action="{{ route('user.store') }}" method="POST" >
            {{ csrf_field() }}

            <div class="form-group">
                <label for="name">Name</label>

                <input type="text" name="name" id="name" class="form-control">
            </div>

            <div class="form-group">
                <label for="email">Email</label>

                <input type="email" name="email" id="email" class="form-control">
            </div>

            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit">
                        Add new user
                    </button>
                </div>
            </div>

        </form>
    </div>
</div>

@stop
