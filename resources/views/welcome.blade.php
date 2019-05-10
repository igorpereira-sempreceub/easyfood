<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>EasyFood</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- Scripts -->
    <script src="{{ mix('/js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="{{ mix('css/welcome.css') }}" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

</head>

<body>
    <div id="app" class="container">
        <div class="row">
            <div class="col">
                <div class="title">
                    EasyFood
                </div>
            </div>
        </div>
        <ingrediente :ingredientes="{{ $ingredientes }}"></ingrediente>
        <receita :receitas="{{ $receitas }}"></receita>
    </div>
</body>

</html>