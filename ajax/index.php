<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sabe-Tudo!</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
        
    <link rel="stylesheet prefetch" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet prefetch" href="https://fonts.googleapis.com/css?family=Coda">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.balloon.min.js"></script>
    <div class="container">
        <header>
            <h1>Sabe-Tudo!</h1>
        </header>

        <section class="score-panel" id="main-panel">
        	<ul class="stars">
        		<li><i class="fa fa-star"></i></li>
        		<li><i class="fa fa-star"></i></li>
        		<li><i class="fa fa-star"></i></li>
        	</ul>

        	<span class="moves">0</span> movimento(s)

            <div class="timer">
            </div>

            <div class="restart" onclick=startGame()>
        		<i class="fa fa-repeat"></i>
        	</div>
        </section>

        <ul class="deck" id="card-deck">
            <li class="card" type="card1">
                <i class="fas" id="command1"></i>
            </li>
            <li class="card" type="card2">
                <i class="fas" id="command2"></i>
            </li>
            <li class="card" type="card3">
                <i class="fas" id="command3"></i>
            </li>
            <li class="card" type="card4">
                <i class="fas" id="command4"></i>
            </li>
            <!--
            <li class="card" type="card5">
                <i class="fas" id="command5"></i>
            </li>
            <li class="card" type="card6">
                <i class="fas" id="command6"></i>
            </li>
            <li class="card" type="card7">
                <i class="fas" id="command7"></i>
            </li>
            <li class="card" type="card8">
                <i class="fas" id="command8"></i>
            </li>
            -->

            <li class="card cardtext" type="card1" data-popup="Criar diretórios!" id="fun1">
                <i class="fas fa-laugh-beam"></i>
            </li>
            <li class="card cardtext" type="card2" data-popup="Listar arquivos e diretórios!" id="fun2">
                <i class="fas fa-laugh-beam"></i>
            </li>
            <li class="card cardtext" type="card3" data-popup="Saber os processos!" id="fun3">
                <i class="fas fa-laugh-beam"></i>
            </li>
            <li class="card cardtext" type="card4" data-popup="Buscar uma palavra!" id="fun4">
                <i class="fas fa-laugh-beam"></i>
            </li>
            <!--
            <li class="card cardtext" type="card5" data-popup="Mostrar o conteúdo do arquivo!" id="fun5">
                <i class="fas fa-laugh-beam"></i>
            </li>
            <li class="card cardtext" type="card6" data-popup="Remover arquivos e diretórios!" id="fun6">
                <i class="fas fa-laugh-beam"></i>
            </li>
            <li class="card cardtext" type="card7" data-popup="Editar um arquivo de texto!" id="fun7">
                <i class="fas fa-laugh-beam"></i>
            </li>
            <li class="card cardtext" type="card8" data-popup="Matar um processo!" id="fun8">
                <i class="fas fa-laugh-beam"></i>
            </li>
            -->
        </ul>

        <div id="popupi" class="overlay">
            <div class="popup">
                <h2>Instruções!</h2>
                <a class="close" href=# >×</a>
                <div class="content-1">
                    Relacione os comandos com suas funções.<br><br>
                    Consiga o menor tempo, se puder...
                </div>
            </div>
        </div>

        <div id="popup1" class="overlay">
            <div class="popup">
                <h2>Parabéns!</h2>
                <a class="close" href=# >×</a>
                <div class="content-1">
                    Parabéns! Você concluiu!
                </div>
                <div class="content-2">
                    <p>Você levou <span id=finalMove> </span> movimentos </p>
                    <p>com <span id=totalTime> </span> </p>
                    <p>Estrelas:  <span id=starRating></span></p>
                </div>
                <button id="play-again" onclick="playAgain()">
                    Jogue novamente!</a>
                </button
            </div>
        </div>

    </div>
    <script src="js/app.js"></script>
</body>
</html>
