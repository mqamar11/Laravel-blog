@extends('layouts.app')



@section('content')

<div class="panel panel-body">
    <div class="panel-body">
        <table class="table table-hover">
            <thead>
                <th>Se.</th>
                <th>Image</th>
                <th>Title</th>
                <th>Edit</th>
                <th>Restore</th>
                <th>Destroy</th>

            </thead>

            <tbody>

              @if ($posts->count() > 0)
              @foreach ($posts as $post)
              <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>
                      {{-- {{ $post->featured }} --}}

                      <img src="{{ $post->featured }}" alt="{{ $post->title }}" width="90px" height="50px">
                  </td>
                  <td>
                      {{ $post->title }}
                  </td>

                  <td>
                      <a href="{{ route('post.edit', ['id' => $post->id ]) }}" class="btn btn-xs btn-info">Edit</a>
                  </td>

                  <td>
                      <a href="{{ route('post.restore',['id' => $post->id ]) }}" class="btn btn-xs btn-success">Restore</a>

                  </td>


                  <td>
                      <a href="{{ route('post.kill',['id' => $post->id ]) }}" class="btn btn-xs btn-danger">Destroy</a>

                  </td>
              </tr>
              @endforeach
              @else
              <tr>
                  <th colspan="5" class="text-center">No Trashed Post</th>
              </tr>

              @endif


            </tbody>
        </table>
    </div>
</div>



@endsection
