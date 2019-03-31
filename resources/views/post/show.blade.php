@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="blog-post-title">{{ $post->title }}t</h2>
        <p class="blog-post-meta">{{ $post->created_at }} by
            @if(isset($post->user))
                {{$post->user->name}}
            @else
                Deleted User
            @endif
        </p>
        <ul class="list-inline">
            @foreach($post->tags as $tag)
                <li class="list-inline-item">
                    <a href="/post/search/{{ $tag->id }}" class="fa-tag">
                    <span class="badge badge-pill badge-info text-light">
                        {{ $tag->name }}
                    </span>
                    </a>
                </li>
            @endforeach
        </ul>
        <hr>
        <div class="blog-post">

            {{ $post->content }}

        </div><!-- /.blog-post -->
    </div>
@endsection
