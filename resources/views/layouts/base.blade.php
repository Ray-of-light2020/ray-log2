<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title')</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<hr />
@section('main')

@show
<div class="text-center">
    <a href="{{ url('/') }}">Top</a>
</div>
<hr />
<script src="{{ asset('/js/script.js') }}"></script>
</body>
</html>