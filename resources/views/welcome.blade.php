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
        <h1 class="display-1 text-center">Easy Food</h1>
        <br><br>
        <p class="lead text-center">
            Encontre a receita ideal de acordo com os ingredientes que você tem na sua cozinha
        </p>
        <br> <br> <br>
        <!-- <ingrediente :ingredientes="{{ $ingredientes }}"></ingrediente> -->
        <!-- <br><br><br>
        <h1 class="display-4 text-center">Deu Match!</h1>
        <br>
        <p class="lead text-center">
            Encontramos três receitas que utilizam os seus ingredientes!
        </p> -->
        <!-- <br><br> -->


        <div>
            <receita :receitas="{{ $receitas }}" :ingredientes="{{ $ingredientes }}"></receita>
        </div>

    </div>
</body>

</html>