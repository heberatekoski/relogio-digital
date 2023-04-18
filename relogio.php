<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relogio digital</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,300&display=swap');
        *{
            margin: 0;
            padding: 0;
            font-family: 'Open Sans,' sans-serif;
            
        }
        body{
            height: 100vh;
            background: linear-gradient(120deg,#ffe53bd8,#ff2525da);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .relogio{
            display: flex;
            align-items: center;
            justify-content: space-around;
            height: 200px;
            width: 550px;
            background: transparent;
            border-radius: 3px;
            box-shadow: 0px 8px 10px rgba(0, 0, 0, 0.5);
        }
        .relogio div {
            height: 170px;
            width: 150px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: #fff;
            background: rgba(5, 5, 5, 0.9);
            box-shadow: 5px 5px, 15px rgba(0, 0, 0, 0.7);
            border-radius: 7px;
            letter-spacing: 3px;
        }
        .relogio span{
            font-weight: bolder;
            font-size: 30px;

        }
        .relogio span.tempo{
            font-size: 10px;
        }

    </style>
</head>
<body>
    <div class="relogio">
        <div>
            <span id="horas">00</span>
            <span id="tempo">Horas</span>
        </div>
        <div>
            <span id="minutos">00</span>
            <span id="tempo">Minutos</span>
        </div>
        <div>
            <span id="segundos">00</span>
            <span id="tempo">Segundos</span>
        </div>
    </div>
    <script>
        const horas = document.getElementById('horas');
        const minutos = document.getElementById('minutos');
        const segundos = document.getElementById('segundos');

        const relogio = setInterval(function time(){
            let dateToday = new Date();
            let hr = dateToday.getHours();
            let min = dateToday.getMinutes();
            let s = dateToday.getSeconds();

            if (hr < 10) hr = '0' + hr;
            if (min < 10) min = '0' + min;
            if (s < 10) s = '0' + s;

            horas.textContent = hr;
            minutos.textContent = min;
            segundos.textContent = s;
        })
    </script>
</body>
</html>