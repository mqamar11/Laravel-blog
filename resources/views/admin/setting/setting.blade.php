@extends('layouts.app')



@section('content')

@include('admin.includes.partials')

<div class="card">
    <div class="card-header">
        Edit Site Setting
    </div>
    <div class="card-body">
        <form action="{{ route('setting.update') }}" method="POST">
            {{ csrf_field() }}
            @method('PUT')

            <div class="form-group">
                <label for="name">Name</label>

                <input type="text" name="site_name" value="{{ $settings->site_name }}" id="name" class="form-control">
            </div>

            <div class="form-group">
                <label for="email">Email</label>

                <input type="email" name="email" value="{{ $settings->email }}" id="email" class="form-control">
            </div>


            <div class="form-group">
                <label for="contact">Contact</label>

                <input type="contact" name="contact" value="{{ $settings->contact }}" id="contact" class="form-control">
            </div>


            <div class="form-group">
                <label for="address">Address</label>

                <input type="address" name="address" value="{{ $settings->address }}" id="address" class="form-control">
            </div>

            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit">
                        Update Site Settings
                    </button>
                </div>
            </div>

        </form>
    </div>
</div>

@stop
