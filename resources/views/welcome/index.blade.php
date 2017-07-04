@extends('layouts.app')

@section('content')
    <h1 class="text-muted">Home</h1>
    <ul>
        @if (count($tweets) > 0)
            @foreach ($tweets as $tweet)
                <li>
                    {!! link_to_route('welcome.show', $tweet->title, ['id' => $tweet->id]) !!}
                </li>
            @endforeach
        @endif
    </ul>
@endsection