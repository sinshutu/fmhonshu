@extends('layouts.base')
@section('title', 'Page Title')

@section('content')
<div class="content">
    <form action="search" method="get">
        <input type="text" name="q" />
        <input type="submit" value="検索" />
    </form>
</div>
@endsection
