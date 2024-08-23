<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit cast</title>
</head>
<body>
    <h1>edit casts</h1>
    <from method="POST" action="/cast/{{  $cast->id}}">
        @csrf
        @method('PUT')
        <div>
            <label for="name">name:</label>
            <input type="text" id="nama" name="nama"required value="{{$cast->nama}}">
        </div>
        <div>
            <label for="name">name</label>
            <input type="number" id="umur" name="umur"required value="{{$cast->umur}}">
        </div>
        <div>
            <label for="name">bio</label>
            <textarea id="bio" name="bio" required>{{$cast->nama}}</textarea>
        </div>

      <button type="submit">simpan</button>
    </from> 
   a href="/cast/{{  $cast->id }}">cancel</a>
</body>
</html>
