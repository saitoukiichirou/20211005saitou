@extends('layouts.default')
<style>
    .radio {
        transform:scale(1.5);
    }
    tr {
        height: 40px;
    }
    th {
        text-align: left;
    }
    td {
    }
    .input {
        border-radius: 5px;
    }
    .button {
        background: #1a202c;
        color: #FFFFFF;
        /*text-align: center;*/
        justify-content: center;
    }

</style>
@section('title')
@section('content')
<body>
<div class="flame-parent">
    <div class="flame">
    <h1>お問い合わせ</h1>
        <form action="/confirm" method="POST">
        <table>
        @csrf
            <tr>
                <th>お名前<span>※</span></th>
                <td>
                    <input class="input" type="text" name="first_name">
                    　<input class="input" type="text" name="last_name">
                </td>
            </tr>
            <tr>
                <th>性別<span>※</span></th>
                <td>
                    <input class="radio" type="radio" name="gender" value="0" checked="checked"> 男性　
                    <input class="radio" type="radio" name="gender" value="1"> 女性
                </td>
            </tr>
            <tr>
                <th>メールアドレス<span>※</span></th>
                <td>
                    <input class="input" type="email" name="email">
                </td>
            </tr>
            <tr>
                <th>郵便番号<span>※</span></th>
                <td>
                    〒<input class="input" type="text" name="postcode">
                </td>
            </tr>
            <tr>
                <th>住所<span>※</span></th>
                <td>
                    <input class="input" type="text" name="address">
                </td>
            </tr>
            <tr>
                <th>建物名</th>
                <td>
                    <input class="input" type="text" name="building_name">
                </td>
            </tr>
            <tr>
                <th>ご意見<span>※</span></th>
                <td>
                    <textarea class="input" name="option" cols="50" rows="5"></textarea>
                </td>
            </tr>
        </table>

                    <input class="button" type="submit" value="確認">
    </form>
    </div>
</div>
@endsection
</body>

</html>
