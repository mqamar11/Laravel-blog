@extends('layouts.app')



@section('content')

<div class="panel panel-default">
    <div class="">
       <h4>Categories List</h4>
    </div>
    <div class="panel-body">
        <table class="table table-hover">
            <thead>
                <th>Se.</th>
                <th>Name</th>
                <th>Edit</th>
                <th>Delete</th>

            </thead>

            <tbody>

                @if ($categories->count() > 0)


                @foreach ($categories as $category)
                <tr>
                    <td>
                        {{$loop->iteration}}
                    </td>
                    <td>{{$category->name}}</td>

                    <td>
                        <a href="{{ route('category.edit', ['id' => $category->id ]) }}" class="btn btn-xs btn-info">Edit</a>
                    </td>

                    <td>
                        <a href="{{ route('category.delete',['id' => $category->id ]) }}" class="btn btn-xs btn-danger">Delete</a>

                    </td>
                </tr>
                @endforeach

                @else
                <tr>
                    <th colspan="5" class="text-center">No Categories yet </th>
                </tr>

                @endif
            </tbody>
        </table>
    </div>
</div>



@endsection
