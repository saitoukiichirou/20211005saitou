@extends('layouts.default')
<style>

    .border {
        border: #1a202c solid 1px;
    }

</style>

{{--検索条件設定画面--}}
<div class="flame-parent">
<div class="flame">
    <h1>管理システム</h1>
    <div class="border">
        <form name="find" action="search" method="post">
            @csrf
            お名前<input name="input" type="text" value="{{$input ?? ''}}">
            性別<input name="gender" type="radio" value="0" checked>
            全て<input name="gender" type="radio" value="1">
            男性<input name="gender" type="radio" value="2">女性
            <br>
            登録日<input name="date_from" type="date">~<input name="date_to" type="date">
            <br>
            メールアドレス<input name="email" type="email">
            <br>
            <input type="submit" value="検索">
        </form>
<a href="/search" >リセット</a>
    </div>
    </div>
</div>


{{--以下検索結果表示--}}

@section('content')
    {{ $items->links() }}
    <table border="1">
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
                <td>{{$item->getDetail()}}
                <td>{{$item->email}}</td>
                <td>{{$item->option}}</td>
                <td>
                    <form action="/delete?id={{$item->id}}" method="post">
                        @csrf
                        <input type="submit" value="削除"></form></td>
            </tr>
        @endforeach
    </table>
@endsection

