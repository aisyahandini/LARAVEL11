<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tambah cast baru</title>
</head>
<body>
    <h1>tambah cast baru</h1>
    <from method="POST" action="/cast">
        @csrf
        <div>
            <tabel for ="nama">nama:</label>
            <input type="text" id="name"  name="name"required> 
        </div>
        <div>
            <tabel for ="nama">umur:</label>
            <input type="numcer" id="umur"  name="umur"required>
        </div>
        <div>
            <tabel for ="nama">bio:</label>
            <textarea name="bio" id="bio" cols="30" rows="10"></textarea>
        </div>
        <button type="submit">simpan</button>
    </from>
    <a href="/cast">kembali</a>
    

</body>
</html>