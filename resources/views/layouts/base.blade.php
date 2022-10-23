<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')}</title>
</head>
<body>
    {{-- 基礎のレイアウトファイル(login後) --}}
    {{-- ログイン後ではリストの中身が変更される --}}
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
