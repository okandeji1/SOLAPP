@extends('layouts.user')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <a href="/posts/create" class="btn btn-outline-primary">Create Post</a>
                    <h3>Your blog post</h3>
                    @if(count($posts) > 0)
                    <table class="table table-striped">
                        <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach($posts as $post)
                        <tr>
                                <td>{{$post->title}}</td>
                                <td><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a></td>
                                <td>
                                    {!! Form::open(['action' => ['postController@destroy', $post->id], 'method' => 'POST', 'class' => 'text-right']) !!}
                                    {{form::hidden('_method', 'DELETE')}}
                                    {{form::submit('Delete', ['class' => 'btn btn-outline-danger'])}}
                                {!! form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    @endif
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
@endsection
