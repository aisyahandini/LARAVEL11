<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>list data</title>
</head>
<body>
    <tabel border="1">
          <thead>
                 <tr>
                    <th>no</nama>
                    <th>nama</nama>
                    <th>umur</nama>
                    <th>bio</nama>
                    <th>view<nama>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($casts as $key => $cast) { ?>
                        <tr>
                            <td><?= $cast->id ?></td>
                             <td><?= $cast->nama ?></td>
                             <td><?= $cast->umur ?></td>
                             <td><?= $cast->bio ?></td>
                             <td><a= href="/cast/<?= $cast->id ?>">view</a></td>
                             </tr>
                             <?php  } ?>
                             </tbody>
                        <a href="/cast/create">tambah cast</a>
                        </tabel>
</body>
</html>