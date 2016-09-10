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
            <div id="query-inner" class="container">
                <div class="row">
                    
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
