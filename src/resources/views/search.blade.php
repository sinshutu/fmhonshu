@extends('layouts.base')
@section('title', '検索結果一覧')


@section('head')
<link rel="stylesheet" href="/css/search.css">
@endsection

@section('content')
<div class="content">
    <div>
検索したカテゴリ:
    </div>
    <div>
検索キーワード: {{ old('q') }}
    </div>
    @foreach ($posts as $post)
    <div>
    {{ $post->id }}
    {{ $post->issuer_kind }}
    {{ $post->title }}
    {{ $post->circumstance }}
    {{ $post->description }}
    {{ $post->updated_at }}
    {{ $post->created_at }}
    </div>
    @endforeach
    戻るボタン
戻るボタンbackground:#b3b3b3
三角は#fffでお願いします
</div>
@endsection
