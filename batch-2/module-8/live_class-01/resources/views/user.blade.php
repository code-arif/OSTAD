<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="user" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="name">NAME</label>
        <input type="text" name="name"></br> </br>
        <label for="email">EMAIL</label>
        <input type="Email" name="email"></br> </br>
        <input type="file" name="photo">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
