@extends('pages.layouts.app')
<br>
<br>
<br>
<div class="row">
 <div class="col-md-6 col-md-offset-3" style="background-color:#F5F5F5" align="center">

<h1>Create Post</h1>
  {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
      <div class="form-group">
          {{Form::label('title', 'Title')}}
          {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
      </div>
      <div class="form-group">
          {{Form::label('body', 'Body')}}
          {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
      </div>
      <div class="form-group">
          {{Form::file('cover_image')}}
      </div>
      <div class="form-group">
         {{Form::label('tags','Tags')}}
         {{Form::text('tags', '', ['class' => 'form-control', 'placeholder' => 'Tags'])}}
       </div>
      {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
</div>
</div>
