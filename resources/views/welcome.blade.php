<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
        @endif
        <!-- 
        <canvas id="myCanvas" width="500" height="500"></canvas>
        -->
        <div>
            <canvas id="myCanvas2" width="800" height="600"></canvas>
        </div>
        
        <script>
            function drawDiamond(){
                var canvas2 = document.getElementById("myCanvas2");
                var ctx2 = canvas2.getContext("2d");
                ctx2.beginPath();
                ctx2.fillStyle = "#000000";
                var arista = 10;
                var salto = arista;
                var ancho_maximo = 25;
                var alto_maximo = 60;
                var ancho_actual = 0;
                ancho_actual = canvas2.width/2;
                for (let i = 0; i <= alto_maximo; i++) {
                    if( i >= 1 && i < 10 ){
                        ancho_maximo+=1.5;
                    }
                    else{
                        ancho_maximo-=0.8;
                    }
                    console.log("ancho maximo: ", ancho_maximo);
                    for (let x1 = 0, x2 = 0, j = 0; j <= ancho_maximo; j++, x1--, x2++) {
                        console.log("ancho actual: ", ancho_actual);
                        console.log("cuadro 1 (x: ",x1*salto," y: ",i*salto," )");
                        console.log("cuadro 2 (x: ",x2*salto," y: ",i*salto," )");
                        ctx2.rect(ancho_actual + x1*salto, i*salto , arista, arista);
                        ctx2.rect(ancho_actual + x2*salto, i*salto , arista, arista);
                    }
                    
                }
                ctx2.fill();
                ctx2.closePath();
            }
            drawDiamond();
        </script>
        <script>
            function getRndInteger(min, max) {
                return Math.floor(Math.random() * (max - min) ) + min;
            }
            function getDirection(jump){
                if( getRndInteger(0,50) > 25){
                    jump = jump*-1;
                }else{
                    jump = jump;
                }
                return jump;
            }
            function drawFractal(){
                var canvas = document.getElementById("myCanvas2");
                var ctx = canvas.getContext("2d");
                ctx.beginPath();
                var max_width = canvas.width;
                var max_height = canvas.height;
                var cube = 10;
                var jump = cube;
                var jump_random = 0;
                var random_lenght = 0;
                var x_actual = 0;
                var y_actual = 0;
                ctx.fillStyle = "#FF0000";
                for (let i = 0; i < 100; i++) {
                    jump_random = getDirection(jump);
                    jump_random_2 = getDirection(jump);
                    random_lenght = getRndInteger(0,30);
                    for (let j = 0; j < random_lenght; j++) {
                        if(jump_random > 0){
                            console.log("Entra horizontal");
                            if(jump_random_2>0){
                                if(x_actual*jump >= max_width){
                                    jump_random_2 = jump_random_2*-1;
                                    x_actual--;
                                }
                                else{
                                    x_actual++;
                                }
                            }
                            else{
                                if(x_actual*jump <= 0){
                                    jump_random_2 = jump_random_2*-1;
                                    x_actual++;
                                }
                                else{
                                    x_actual--;
                                }
                            }
                            
                        }
                        else{
                            if(jump_random_2>0){
                                if(y_actual*jump  >= max_height){
                                    jump_random_2 = jump_random_2*-1;
                                    y_actual--;
                                }
                                else{
                                    y_actual++;
                                }
                            }
                            else{
                                if(y_actual*jump <= 0){
                                    jump_random_2 = jump_random_2*-1;
                                    y_actual++;
                                }
                                else{
                                    y_actual--;
                                }
                            }
                        }
                        ctx.rect(x_actual*jump, y_actual*jump , cube, cube);
                    }
                    ctx.fill();
                    ctx.closePath();
                }
            }
            drawFractal();
        </script>

    </div>
</body>

</html>