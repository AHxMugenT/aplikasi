@extends('layouts.index')

@section('container')
    @foreach ($posts as $post)
    <article class="mb-5 border-bottom pb-4">
        <h2>
            <a href="/posts/{{ $post->slug }}" class="text-decoration-none" >{{ $post->title }}</a>
        </h2>

        @if($post->category()->get()->count())
        <p>By. M Faruq Azhar in <a href="/categories/{{ $post->category()->get()[0]->slug }}"
            class="text-decoration-none">{{ $post->category()->get()[0]->slug }}</a></p>

        @endif
        <p>{{ $post->excerpt }}</p>

        <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read More..</a>
    </article>

    @endforeach
@endsection
