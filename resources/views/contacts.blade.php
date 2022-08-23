<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        img{
            width: 200px;
        }
    </style>
    <nav>
        <ul style="list-style-type: none;">
            <li style="display: inline">
                <a href="{{route('home')}}">Home</a>
            </li>
            <li style="display: inline">
                <a href="{{route('contacts')}}">Contacts</a>
            </li>
        </ul>
    </nav>

    <h1>Contacts page</h1>

    <ul>
        <li><span>Riccardo Binotto (non proprio Riccardo ma vabbè, sempre Binotto :) )</span><img src="https://rossomotori.it/wp-content/uploads/2022/03/binotto-1-1.jpg" alt="Binotto"></li>
        <li><span>Valentino Rossi</span><img src="https://tuttonotizie.eu/wp-content/uploads/2022/08/tuttonotizie-valentino-rossi-avete-mai-visto-la-lussuosa-villa-del-motociclista-un-vero-incanto-1200x900.jpg" alt="Vale"></li>
        <li><span>Arima Kousei</span><img src="https://www.personality-database.com/profile_images/6165.png" alt="Arima"></li>
        <li><span>Max Pezzali</span><img src="https://www.newsic.it/wp-content/uploads/2021/06/max90_21_live-1--786x543.jpg" alt="Max"></li>
        <li><span>Lone Wanderer</span><img src="https://static.tvtropes.org/pmwiki/pub/images/lone_wanderer_fo3.jpg" alt="Fallout 3"></li>
    </ul>
</body>
</html>
