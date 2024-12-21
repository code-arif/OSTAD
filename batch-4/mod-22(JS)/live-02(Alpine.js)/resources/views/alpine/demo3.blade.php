<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alpine Practice</title>
    @vite(['resources/js/app.js'])
    <link rel="stylesheet" href="https://matcha.mizu.sh/matcha.css">
</head>

<body>
    <h1>Hello this is my Alpine practice first project</h1>
    <h2>{{ $title }}</h2>
    <div x-data = "person">
        <p x-text = "name"> </p>
        <p x-text = "age"> </p>
        <p x-text = "email"> </p>
        <button @click = "name = 'Ariful Islam' ">name change</button>
        <button @click = "age = 50 ">age change</button>
        <button @click = "email = 'ariful@gmail.com'">email change</button>
        <hr>
        <input type="text" x-model = "name">
        <input type="text" x-model = "age">
        <input type="text" x-model = "email">
    </div>

    <script>
        const person = {
            name: 'John Deo',
            age: 30,
            email: 'john@doe.com'
        };
    </script>
</body>

</html>
