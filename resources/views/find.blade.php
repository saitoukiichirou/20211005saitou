@extends('layouts.default')
<style>
    /*th {*/
    /*    background-color: #289ADC;*/
    /*    color: white;*/
    /*    padding: 5px 40px;*/
    /*}*/
    /*tr:nth-child(odd) td{*/
    /*    background-color: #FFFFFF;*/
    /*}*/
    /*td {*/
    /*    padding: 25px 20px;*/
    /*    background-color: #EEEEEE;*/
    /*    text-align: center;*/
    /*}*/
</style>

{{--検索条件設定画面--}}

<div class="flame-parent">
<div class="flame">
    <form name="find" action="find" method="post">
        @csrf
        お名前<input type="text" name="input_name" value="">
                性別<input name="input_gender" type="radio" value="" checked>
                全て<input name="input_gender" type="radio" value="1">
                男性<input name="input_gender" type="radio" value="2">女性
        <br>
                登録日<input name="date_from" type="date">~<input name="date_to" type="date">
                <br>
                メールアドレス<input type="text" name="input_email">
                <br>
        <input type="submit" value="検索">
    </form>
    <a href="/search" >リセット</a>
</div>
</div>


{{--以下検索結果表示--}}
@section('content')
    @if (@isset($item))
        <table>
            <tr>
                <th>id</th>
                <th>お名前</th>
                <th>性別</th>
                <th>メールアドレス</th>
                <th>ご意見</th>
                <th>削除</th>
            </tr>
            @foreach ($items as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->fullname}}</td>
                    <td>{{$item->getDetail()}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->option}}</td>
                </tr>
            @endforeach
        </table>
    @endif
@endsection
