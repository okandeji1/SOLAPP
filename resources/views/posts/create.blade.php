@extends('layouts.app')
@section('content')
    <h1>Create</h1>

    <div class="col-lg-8 p-3 shadow-lg">
    {!! Form::open(['action' => 'postController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
      <div class="form-group">
        {{form::label('title', 'Title')}}
        {{form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
      </div>
       <div class="form-group">
        {{form::label('header', 'Header')}}
        {{form::text('header', '', ['class' => 'form-control', 'placeholder' => 'Post Header'])}}
      </div>
      <div class="form-group">
        {{form::label('paragraph', 'Paragraph')}}
        {{form::textarea('paragraph', '', [ 'class' => 'form-control', 'placeholder' => 'Short Text'])}}
      </div>
      <div class="form-group">
        {{form::label('body', 'Body')}}
        {{form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
      </div>
      <div class="form-group">
          {{form::file('cover_image')}}
      </div>
         {{form::submit('Submit', ['class' => 'btn btn-outline-primary'])}}
    {!! Form::close() !!}
    </div>
@endsection

