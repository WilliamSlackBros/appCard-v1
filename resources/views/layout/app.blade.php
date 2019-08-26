<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Appcad-v1</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style>
    *{
        margin:auto;
        padding:0;
    }
    .container-fluid{
        margin:0;
        padding:0;
    }
    </style>
</head>
<body>
    <div class="container-fluid">
    @component('component_navbar',["current" => $current])
    @endcomponent
        <main role="main">
        @hasSection('body')<!--se houver body carrega o que está no yield-->
            @yield('body')
        @endif
        </main>
    </div>
    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
</body>
</html>