<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
</head>
<body>
    <h1>Update Data</h1>
    <form method="post" action="{{ url('menu/update') }}"> 
        @csrf
        <input type="text" name="name" id="" value="{{ $data->name }}"><br>
        <input type="number" name="qty" value="{{ $data->qty }}">
        <input type="hidden" name="id" value="{{ $data->id }}">

        <button type="submit">Update</button>
    </form>
</body>
</html>