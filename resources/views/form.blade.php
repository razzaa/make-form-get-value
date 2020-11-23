<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Html Form</title>
</head>
<body>
    <form action="user" method="POST">
        @csrf
        <input type="text" name="username" placeholder="Enter Your User Name">
        <input type="password" name="password" placeholder="Enter Password">
        <button type="submit">Save</button>
    </form>
</body>
</html>