<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Read session</title>
</head>

<body>
    <h1> About page </h1>
    <p>Name: {{ session('name') }} </p>
    <p>Email: {{ session('email') }} </p>
    <p>Phone: {{ session('phone') }} </p>
    <p>Age: {{ session('age', 25) }} </p>
</body>

</html>
