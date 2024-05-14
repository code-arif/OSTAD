<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>new perosn</title>
    </head>

    <body>
        <h1>Create a new person</h1>
        <h2> Name: {{ $name }} </h2>
        <h2> Email: {{ $email }} </h2>
        <h2> PhotoName: {{ $photo }}</h2>
        @if ($photo)
            <a href="{{ asset('upload/photo/' . $photo) }}" target="_blank">
                <button>Show Image</button>
            </a>
        @endif

    </body>

</html>
