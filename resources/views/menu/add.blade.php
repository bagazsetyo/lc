<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
</head>
<body>
    <h1>Add Data</h1>
    <form method="post" action="{{ url('menuadd') }}"> 
        @csrf
        <input type="text" name="name" id=""><br>
        <input type="number" name="qty">
        <button type="submit">Add</button>
    </form>
</body>
</html>