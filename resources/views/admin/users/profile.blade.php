@extends('layouts.app')



@section('content')

@include('admin.includes.partials')

<div class="card">
    <div class="card-header">
        Edit your profile
    </div>
    <div class="card-body">
        <form action="{{ route('user.profile.update') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="name">Username</label>

                <input type="text" name="name" id="name" value="{{ $user->name }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="email">Email</label>

                <input type="email" name="email" id="email" value="{{ $user->email }}" class="form-control">
            </div>


            <div class="form-group">
                <label for="password">Password</label>

                <input type="password" name="password" id="password" class="form-control">
            </div>


            <div class="form-group">
                <label for="avatar">Upload Avatar</label>

                <input type="file" name="avatar" id="avatar" class="form-control">
            </div>


            <div class="form-group">
                <label for="facebook">Facebook</label>

                <input type="text" name="facebook" id="facebook" value="{{ $user->profile->facebook }}" class="form-control">
            </div>


            <div class="form-group">
                <label for="youtube">Youtube</label>

                <input type="text" name="youtube" id="youtube" value="{{ $user->profile->youtube }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="about">About you </label>
                <textarea name="about" id="about" cols="6" rows="6" class="form-control">
                    {{ $user->profile->about }}
                </textarea>

            </div>

            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit">
                        Update Profile
                    </button>
                </div>
            </div>

        </form>
    </div>
</div>

@stop
