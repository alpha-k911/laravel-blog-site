@extends('layout.app')

@section('content')
    <h1>Edit Post</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST']) !!}
        <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title '])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
                {{Form::textarea('body', $post->body, ['id' => 'editor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
            <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
            <script>
                ClassicEditor
                    .create( document.querySelector( '#editor' ) )
                    .catch( error => {
                        console.error( error );
                    } );
            </script>
            
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection