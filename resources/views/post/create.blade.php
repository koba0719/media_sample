@extends('layouts.app')
@section('content')
    <h2 class="panel-heading">記事投稿</h2>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-body">
                <form method="post" action="{{ route('post.store') }}">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <label for="title" class="control-label">タイトル</label>
                        <input id="title" name="title" class="form-control" type="text">
                    </div>

                    <div class="form-group">
                        <label for="content" class="control-label">本文</label>
                        <textarea class="form-control" id="content" name="content" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="content" class="control-label">タグ</label>
                        @foreach($tags as $tag)
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="{{ $tag->name }}" name="tags[]" value="{{ $tag->id }}">
                                <label class="custom-control-label" for="{{ $tag->name }}">{{ $tag->name }}</label>
                            </div>
                        @endforeach
                    </div>
                    <button class="btn btn-primary">送信</button>
                </form>
            </div>
        </div>
    </div>
@endsection
