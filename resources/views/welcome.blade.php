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
        <ingrediente :ingredientes="{{ $ingredientes }}"></ingrediente>
        <!-- <br><br><br>
        <h1 class="display-4 text-center">Deu Match!</h1>
        <br>
        <p class="lead text-center">
            Encontramos três receitas que utilizam os seus ingredientes!
        </p> -->
        <!-- <br><br> -->


        <div class="container" id="resultadoPesquisa">
            <!--resultado-->
            <!-- <div class="card-group">
                <div class="card mb-2">
                    <img class="card-img-top" src="images/arrozpiamontese.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Arroz piamontese</h5>
                        <p class="card-text">Esta receita combina com os três ingredientes digitados.</p>
                        <p class="card-text"><small class="text-muted">89 pessoas gostaram dessa receita</small></p>
                    </div>
                </div>
                <div class="card mb-2">
                    <img class="card-img-top" src="images/risoto.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Risoto simples</h5>
                        <p class="card-text">Esta receita combina com dois ingredientes digitados.</p>
                        <p class="card-text"><small class="text-muted">53 pessoas gostaram dessa receita</small></p>
                    </div>
                </div>
                <div class="card mb-2">
                    <img class="card-img-top" src="images/baiaodedois.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Baião de dois</h5>
                        <p class="card-text">Esta receita combina com dois ingredientes digitados.</p>
                        <p class="card-text"><small class="text-muted">22 pessoas gostaram dessa receita</small></p>
                    </div>
                </div>
            </div> -->
            <receita :receitas="{{ $receitas }}"></receita>
        </div>

    </div>
</body>

</html>