<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Welcome to blade template engin</title>
    </head>

    <body>

        <h1>foreach loop in blade tempalte</h1>
        @foreach ($users as $user)
            <li>Your name is {{ $user['name'] }} and your city is {{ $user['city'] }}</li>    
        @endforeach

    </body>

</html>
