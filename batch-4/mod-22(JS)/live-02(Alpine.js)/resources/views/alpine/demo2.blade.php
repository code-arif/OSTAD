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
        <button @click="open = false">Hide</button>
        <button @click="open = true">Show</button>
        <button @click="open = !open">Toggle</button>
        <button @click="toggle()">Toggle with builtin funciton</button>

        <div x-show = "open" x-transition.scale.origin.right style= "background-color:rgb(50, 51, 41); padding:10px">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia, aperiam atque tempore nemo earum autem amet nisi. Enim, molestiae exercitationem. Voluptate est eius excepturi veniam itaque reiciendis, suscipit esse ratione.
        </div>
    </div>

    <script>
        const data = {
            open: true,
            toggle(){
                this.open = !this.open;
            }
        };
    </script>
</body>

</html>
