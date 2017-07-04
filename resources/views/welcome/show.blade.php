@extends('layouts.app')

@section('content')
<h1 class="text-muted">{{ $tweet->title }}</h1>
<div class="text-muted">
    <!--{{ $tweet->body }}-->
    {!! $tweet->mark_body !!}
</div>
@endsection