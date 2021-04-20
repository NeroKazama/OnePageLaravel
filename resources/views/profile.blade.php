<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" async></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light nav-bar">
            <div class="container h-100">
                <div class="col-12 h-100 text-center m-auto">
                    <a class="" href="/">
                        <img class="position-absolute w-100 h-100" src="img/logo.svg" alt="">
                    </a>
                </div>
            </div>
        </nav>
        <div class="container mt-5">
            <table class="col-12">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Amount</th>
                </tr>
                @foreach ($collection as $item)
                <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->amount}}</td>
                </tr>
                @endforeach
            </table>
            <div class="w-100 p-3 text-center">
                {{ $collection->links() }}
            </div>
        </div>
    </div>
</body>
</html>