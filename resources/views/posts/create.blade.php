@extends('layouts.app')

@section('content')
    
    <h1>Create Post</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title '])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', '', ['id' => 'aa', 'class' => 'form-control', 'placeholder' => 'Body Text'])}} 
        </div>
        {{Form::submit('submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
    {{-- <script>
        ClassicEditor
            .create( document.querySelector( '#aa' ) )
            .catch( error => {
                console.error( error );
            } );
    </script> --}}
@endsection