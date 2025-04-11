<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理画面 - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('admin.dashboard') }}">ダッシュボード</a></li>
            <li><a href="{{ route('admin.contacts.index') }}">問い合わせ一覧</a></li>
            <li><a href="{{ route('logout') }}">ログアウト</a></li>
        </ul>
    </nav>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
