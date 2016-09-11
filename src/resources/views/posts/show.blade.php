@extends('layouts.base')
@section('title', '詳細画面')


@section('head')
<link rel="stylesheet" href="/css/posts/show.css">
@endsection

@section('content')
<div class="content">
    <div class="title">
        <h1>{{ $post->title }}</h1>
    </div>
    <div class="text-right">
        {{ date("Y/m/d", strtotime($post->updated_at)) }}
    </div>
    <p>
        {{ $post->circumstance }}
    </p>
    <hr class="dots">
    <p>
        {{ $post->description }}
    </p>

    <button class="center-block" onclick="history.back();">
        検索結果に戻る
    </button>
</div>
@endsection
