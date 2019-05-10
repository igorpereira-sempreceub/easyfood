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
    <form> <!--Início formulário-->
        <div class="form-row">
            <div class="col">
                <input type="text" name="ingrediente1" id="ingrediente1" class="form-control" placeholder="Ex: leite">
            </div>
            <div class="col">
                <input type="text" name="ingrediente2" id="ingrediente2" class="form-control" placeholder="Ex: arroz">
            </div>
            <div class="col">
                <input type="text" name="ingrediente3" id="ingrediente3" class="form-control" placeholder="Ex: castanha">
            </div>
            </div> <br><br>
    </form>
    <button type="button" id="pesquisar" class="btn btn-outline-success btn-lg btn-block">Encontre minha receita</button>
    <br><br><br>
    <h1 class="display-4 text-center">Deu Match!</h1>
    <br>
    <p class="lead text-center">
        Encontramos três receitas que utilizam os seus ingredientes!
    </p>
    <br><br>
    <div class="container" id="resultadoPesquisa"> <!--resultado-->
        <div class="card-group">
            <div class="card">
                <img class="card-img-top" src="arrozpiamontese.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Arroz piamontese</h5>
                        <p class="card-text">Esta receita combina com os três ingredientes digitados.</p>
                        <p class="card-text"><small class="text-muted">89 pessoas gostaram dessa receita</small></p>
                    </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="risoto.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Risoto simples</h5>
                            <p class="card-text">Esta receita combina com dois ingredientes digitados.</p>
                            <p class="card-text"><small class="text-muted">53 pessoas gostaram dessa receita</small></p>
                    </div>
            </div>
            <div class="card">
                    <img class="card-img-top" src="baiaodedois.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">Baião de dois</h5>
                    <p class="card-text">Esta receita combina com dois ingredientes digitados.</p>
                    <p class="card-text"><small class="text-muted">22 pessoas gostaram dessa receita</small></p>
            </div>
        </div>
    </div>
</div>

        <ingrediente :ingredientes="{{ $ingredientes }}"></ingrediente>
        <receita :receitas="{{ $receitas }}"></receita>
    </div>
</body>

</html>