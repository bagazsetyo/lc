<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <table>
        <h1><a href="{{  url('add') }}">Add Data</a></h1>
        @foreach($data as $d)
            <tr>
                <td>{{ $d->name }}</td>
                <td>{{ $d->qty }}</td>
                <td><a href="{{ url('menu/edit/'.$d->id) }}">Edit</a></td>
                <td><a href="{{ url('menu/delete/'.$d->id) }}">Delete</a></td>

            </tr>
        @endforeach
    </table>
</body>
</html>