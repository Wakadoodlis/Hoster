<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <title>{{config('app.name', 'Hoster')}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    </head>
    <body>
        @include('inc.navbar')
        <div class="container">
            <div class="jumbotron">
                @yield('content')
                <hr class="my-4 mb-5">
             </div>
             @include('inc.plans')
        </div>
    </body>
</html>
