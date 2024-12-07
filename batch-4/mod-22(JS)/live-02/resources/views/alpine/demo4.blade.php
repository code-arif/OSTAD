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
        <template x-for = "person, index in persons" :key = "index">
            <li x-text = "person.name"></li>
            <li x-text = "person.email"></li>
        </template>
    </div>

    <script>
        const data = {
            persons: [{
                name: 'John doe',
                age: 30,
                email: 'john@deo.com'
            }, {
                name: 'jen doe',
                age: 36,
                email: 'jen@doe.com'
            }, {
                name: 'mac',
                age: 52,
                email: 'mac@example.com'
            }]
        }
    </script>
</body>

</html>
