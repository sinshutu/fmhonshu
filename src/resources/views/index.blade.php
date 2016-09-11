@extends('layouts.base')
@section('title', 'Page Title')

@section('head')
<link rel="stylesheet" href="/css/index.css">
<script>
    $(document).ready(function(){

        $('#designer_button').click(function() {
            $('#query-inner').removeClass('engineer-query').addClass('designer-query');
            query_form.issuer.value = 0;
        });

        $('#engineer_button').click(function() {
            $('#query-inner').removeClass('designer-query').addClass('engineer-query');
            query_form.issuer.value = 1;
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
            <form name="query_form" action="search" method="get">
                <div id="query-inner" class="arrow_box">
                    <div id="categories">
                        <p>聞きたいことのカテゴリを選んでね</p>

                        <div class="form-group">
                            <table>
                                @foreach ($categories as $majorCategory)
                                <tr>
                                    <td>
                                        <table>
                                            <tr>
                                                <td style="width: 100px; padding-left: 10px; border-right: 1px #b9b640 solid;">
                                                    {{ $majorCategory->name }}
                                                </td>
                                                <td style="padding-left: 10px;">
                                                    @foreach ($majorCategory->minor_categories as $minorCategory)
                                                    <div class="category">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="categories[]" value="{{ $minorCategory->id }}">{{
                                                                $minorCategory->name }}
                                                            </label>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </td>
                                            </tr>
                                        </table>
                                    </tr>
                                </tr>
                                @endforeach
                            </table>
                        </div>

                        <hr class="divider" />

                    </div>

                    <div id="keywords">
                        <p>聞きたいワード</p>

                        <div id="keywords-form" class="form-group">
                            <input type="text" class="form-control" name="keywords"/>
                            <input type="hidden" name="issuer" value="" />
                            <button type="submit" id="submit" class="btn btn-default">聞いてみる！</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
