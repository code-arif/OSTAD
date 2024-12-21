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
    <div x-data = "data">
        <h3 x-text ="title"></h3>
        <p x-text="message"></p>
        <p x-text="date"></p>
        <p x-text="date"></p>
        <p x-text="date"></p>
        <p x-text="date"></p>
        <p x-text="date"></p>
        <button @click="date = '07th Dec, 2024' ">Click me</button>
    </div>

    <script>
        const data = {
            message: 'Hello, world!',
            title: 'Alpine Practice',
            date: 'DEC 06, 2024'
        };
    </script>
</body>

</html>
