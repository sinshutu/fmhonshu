@extends('layouts.base')
@section('title', 'Page Title')

@section('head')
<link rel="stylesheet" href="/css/index.css">
<script>
    $(document).ready(function(){

        $('#designer_button').click(function() {
            $('#query-inner').removeClass('engineer-query').addClass('designer-query');
        });

        $('#engineer_button').click(function() {
            $('#query-inner').removeClass('designer-query').addClass('engineer-query');
        })

    });
</script>
@endsection

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
                        <div class="issuer designer" id="designer_button">
                            <img src="/img/index/button_designer.png"/>
                        </div>
                    </td>
                    <td>
                        <div class="issuer engineer" id="engineer_button">
                            <img src="/img/index/button_engineer.png"/>
                        </div>
                    </td>
                </tr>
            </table>
        </div>

        <div class="query">
            <form action="search" method="get">
                <div id="query-inner" class="arrow_box">
                    <div id="categories">
                        <p>聞きたいことのカテゴリを選んでね</p>

                        <div class="form-group">
                            <table>
                                @for ($i = 0; $i < count($categories); $i++)
                                <tr>
                                    <td>
                                        <div class="category">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="categories[]" value="{{ $categories[$i]->id }}"> {{ $i }} {{
                                                    $categories[$i]->name }}
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endfor
                            </table>
                        </div>

                        <hr class="divider" />

                    </div>

                    <div id="keywords">
                        <p>聞きたいワード</p>

                        <div id="keywords-form" class="form-group">
                            <input type="text" class="form-control" name="keywords"/>
                            <button type="submit" id="submit" class="btn btn-default">聞いてみる！</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
