@extends('layouts.index')


@section('container')
    <article>
        <h2>{{ $post->title }}</h2>

        <p>By. M Faruq Azhar in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

        {!! $post->body !!}

    </article>
    <a href="/blog">
        <button type="button" class="btn btn-dark">Back To Blog</button>
    </a>
@endsection


