<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>read flash message</title>
</head>

<body>
    <h1> Flash Message</h1>
    @if (session('message'))
        <p> {{ session('message') }} </p>
    @else
        <p>No message here</p>
    @endif
</body>

</html>
