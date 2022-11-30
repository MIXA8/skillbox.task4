@extends('layouts.news')
@section('content')
    <main role="main" class="container">
        <h1 class="mt-5">{{ $post->title }}</h1>
        <p class="lead">{!! $post->body !!} </p>
        <p><a href="{{ route('post.index') }}">На главную </a> {{ \Carbon\Carbon::create($post->created_at)->format('d F, Y год. Время: H:i') }}</p>
    </main>
@endsection
