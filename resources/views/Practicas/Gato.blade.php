@include('partials.nav')

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tic Tac Toe Inteligente</title>
    <link rel="stylesheet" href="{{ asset('estilos/Gato.css') }}">
    <script src="/js/gato.js" defer></script>
</head>
<body>
    <h1>Tic Tac Toe</h1>
    <div id="puntuacion">
        <div id="puntuacion-jugador">
            <h3>Puntuacion del jugador</h3>
            <p>0</p>
        </div>
        <div id="puntuacion-computadora">
            <h3>Puntuacion de la computadora</h3>
            <p>0</p>
        </div>
    </div>
    <p id="ganador"></p>
    <div class="centro acciones">
        <button id="reiniciar">Nuevo juego</button>
        <select id="primer-jugador">
            <option value="O">Jugador</option>
            <option value="X">Computadora</option>
        </select>
    </div>
    <div class="centro">
        <div id="cuadricula">
            
        </div>
    </div>
</body>
</html>