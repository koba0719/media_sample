@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row row-offcanvas row-offcanvas-right">

            <div class="col-12 col-md-9">
                <p class="float-right d-md-none">
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="offcanvas">Toggle nav</button>
                </p>
                <div class="jumbotron">
                    @if(!isset($tag))
                        <h1>投稿一覧</h1>
                    @else
                        <h1>タグ[{{ $tag->name }}]の投稿一覧</h1>
                    @endif
                    <p>みんなの投稿を読んでみましょう！！</p>
                </div>
                <div class="row">
                    @foreach($posts as $post)
                        <div class="col-12 col-lg-6">
                            <h2>{{ $post->title }}</h2>
                            <p>{{ $post->content }}</p>
                            <p><a class="btn btn-secondary" href="{{ url('/post/'.$post->id) }}" role="button">View details &raquo;</a></p>
                        </div><!--/span-->
                    @endforeach
                </div><!--/row-->

                @if(!isset($tag))
                    {{ $posts->links() }}
                @endif
            </div><!--/span-->

            <div class="col-12 col-md-3 sidebar-offcanvas" id="sidebar">
                <h4>人気のタグ</h4>
                <div class="list-group">
                    @foreach($tags as $tag)
                    <a href="{{ url('/post/search/'.$tag->id) }}" class="list-group-item">{{ $tag->name }}</a>
                    @endforeach
                </div>
            </div><!--/span-->
        </div><!--/row-->

        <hr>

@endsection
