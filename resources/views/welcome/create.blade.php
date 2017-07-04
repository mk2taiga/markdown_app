@extends('layouts.app')

@section('content')
    <h1 class="text-muted">Form</h1>
    {!! Form::model($tweet, ['route' => 'welcome.store']) !!}
        <div class="form-group text-muted">
            {!! Form::label('title', 'Title') !!}
            {!! Form::text('title',　null,  ['class' => 'form-control']) !!}
        </div>
        <div class="form-group text-muted">
            {!! Form::label('body', 'Body') !!}
            {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
        </div>
        {!! Form::submit('投稿する', ['class' => 'btn btn-primary btn-block']) !!}
    {!! Form::close() !!}
@endsection