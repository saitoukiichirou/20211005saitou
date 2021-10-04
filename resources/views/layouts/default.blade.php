<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
        body {
            font-size:16px;
            margin: 5px;
        }
        span {
            color: crimson;
        }
        .flame-parent {
            display: flex;
            justify-content: center;
        }
        .flame {
            /*border: #a0aec0 solid 2px ;*/
        }
        h1 {
            font-size:24px;
            letter-spacing:-4px;
            margin-left: 10px;
            text-align: center;
        }
        .content {
            margin:10px;
        }
        svg.w-5.h-5 {  /*paginateメソッドの矢印の大きさ調整のために追加*/
            width: 30px;
            height: 30px;
        }
    </style>
</head>
<body>
<h1>@yield('title')</h1>
<div class="content">
    @yield('content')
</div>
</body>
</html>
