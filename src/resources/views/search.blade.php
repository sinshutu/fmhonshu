@extends('layouts.base')
@section('title', '検索結果一覧')


@section('head')
<link rel="stylesheet" href="/css/search.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>
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
        <div class="update text-right">
            {{ date("Y/m/d", strtotime($post->updated_at)) }}
        </div>
        <div class="card text-xs-center">
          <div class="card-header text-left">
            <h2><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
          </div>
          <div class="card-block">
            <p class="card-text text-left">
                {{ $post->circumstance }}
            </p>
          </div>
          <div class="card-footer text-muted text-left">
            カテゴリ:
          </div>
        </div>
    @endforeach
</div>
@endsection
