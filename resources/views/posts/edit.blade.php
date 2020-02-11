@extends('layout.app')
@section('content')
    <h1>Create</h1>

    <div class="col-lg-8 p-3 shadow-lg">
    {!! Form::open(['action' => ['postController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
      <div class="form-group">
        {{form::label('title', 'Title')}}
        {{form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
      </div>
       <div class="form-group">
        {{form::label('header', 'Header')}}
        {{form::text('header', $post->header, ['class' => 'form-control', 'placeholder' => 'Header'])}}
      </div>
      <div class="form-group">
        {{form::label('paragraph', 'Paragraph')}}
        {{form::textarea('body', $post->paragraph, [ 'class' => 'form-control', 'placeholder' => 'Short Text'])}}
      </div>
       <div class="form-group">
        {{form::label('body', 'Body')}}
        {{form::textarea('body', $post->body, [ 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
      </div>
      <div class="form-group">
            {{form::file('cover_image')}}
        </div>
          {{form::hidden('_method', 'PUT')}}
         {{form::submit('Submit', ['class' => 'btn btn-outline-primary'])}}
    {!! Form::close() !!}
    </div>
@endsection

