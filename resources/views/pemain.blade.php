<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Daftar Pemain</h1>
    @foreach ($pemains as $pemain)
    <tr>
        <th>Nama Pemain</th>
        <th>No Punggung</th>
        <th>Posisi</th>
        <td>{{ $pemain->nama_pemain }}</td>
        <td>{{ $pemain->no_punggung }}</td>
        <td>{{ $pemain->posisi }}</td>
    </tr>
    @endforeach
</body>

</html>