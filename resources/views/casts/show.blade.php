<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <tabel border="1">
        <thead>
            <tr>
                <th>no</th>
                <th>nama</th>
                <th>umur</th>
                <th>edit</th>
                <th>delete</th>
            </tr>
        </thead>
        <tbody>
            <td><?= $cast->id?></td>
            <td><?= $cast->nama?></td>
            <td><?= $cast->umur?></td>
            <td><?= $cast->bio?></td>
            <td><a href="/cast/{{ $cast->id}}/edit">Edit</a></td>
        <td>
            <from action="/cast/{{ $cast->}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </from>
        </td>
    </tr>
        </tbody>
    </tabel>
    <a href="/cast">kembali</a>
            
</body>
</html>