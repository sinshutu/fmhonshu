@extends('layouts.base')
@section('title', 'Page Title')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="headline">
            <p>誰に聞きたいの？</p>
        </div>

        <div class="issuer">
            <table id="issuer-table">
                <tr>
                    <td>
                        <div class="issuer">
                            <img src="/img/index/button_designer.png" />
                        </div>
                    </td>
                    <td>
                        <div class="issuer">
                            <img src="/img/index/button_engineer.png" />
                        </div>
                    </td>
                </tr>
            </table>
        </div>

        <div class="query">
            <div id="query-inner">
                <div id="category">
                    <p>聞きたいことのカテゴリを選んでね</p>

                    <div class="form-group">
                    <table>
                        @foreach ($categories as $category)
                        <tr>
                            <td>
                                <div class="category">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="{{ $category->id }}" > {{ $category->name }}
                                        </label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    </div>

                </div>
            </div>
        </div>

        <div class="content">
            <form action="search" method="get">
                <input type="text" name="q" />
                <input type="submit" value="検索" />
            </form>
        </div>
    </div>
</div>
@endsection
