<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- css stylesheets --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Hospitalia</title>
</head>
<body>
    <div class="menu">
        <ul>
            <li>Home</li>
            <li>Preasidium</li>
            <li>Hospi</li>
            <li>Kalender</li>
            <li>Docs</li>
            <li>Sponsors</li>
            <li>Contact</li>
        </lu>
    </div>
    <div class="column_1">
        <h1>Volgende activiteit</h1>
        <h2>[Titel activiteit]</h2>
    </div>
    <div class="column_2">
        <h1>Welkom op de Hospi Website</h1>
        <h2>Per aspera ad astra</h2>
        <img src="{{ asset('images/hospi.png') }}" alt="schild van hospitalia"> 
    </div>
</body>
</html>