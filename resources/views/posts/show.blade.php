@extends('layout.app')
<style>
    .display-comment .display-comment {
        margin-left: 40px
    }
</style>
@section('content')
<a href="/posts" class="btn btn-outline-dark mt-3">Go back</a>
<div class="row">
    <h1>{{$post->title}}</h1>
    <div class="col-lg-12">
    <img src="/storage/cover_images/{{$post->cover_image}}" alt="">
    </div>
    <div class="col-lg-6">
        <h3>{!!$post->header!!}</h3>
        {!!$post->body!!}
    </div>
</div>

    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    <h4>Display Comments</h4>
    @include('partials._comment_replies', ['comments' => $post->comments, 'post_id' => $post->id])
    @foreach($post->comments as $comment)
        <div class="display-comments">
            <strong>{{ $comment->name }}</strong>
            <p>{{ $comment->body }}</p>
        </div>
    @endforeach
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h4>Add Comment</h4>
                <form action="{{ route('comment.add') }}" method="post">
                        @csrf
                    <div class="form-group">
                        <textarea name="comment_body" id="" class="form-control" ></textarea>
                    </div>
                    <div class="form-group">
                       <input type="text" name="name" class="form-control" placeholder="Input Your Name" >
                    </div>
                    <div class="form-group">
                       <input type="email" name="email" class="form-control" placeholder="Input Your Email" >
                            </div>
                    <div class="form-group">
                        <input type="hidden" name="post_id" value="{{$post->id}}">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Add Comment" class="btn btn-outline-secondary">
                    </div>
                </form>
            </div>
        </div>
    </div>
    @if(!auth::guest())
    @if(auth::user()->id == $post->user_id)
    <a href="/posts/{{$post->id}}/edit" class="btn btn-outline-dark">Edit</a>

    {!! Form::open(['action' => ['postController@destroy', $post->id], 'method' => 'POST', 'class' => 'text-right']) !!}
        {{form::hidden('_method', 'DELETE')}}
        {{form::submit('Delete', ['class' => 'btn btn-outline-danger'])}}
    {!! form::close() !!}
    @endif
    @endif
@endsection

