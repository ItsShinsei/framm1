<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     
    <h1>Data Guru</h1>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama Panggilan</th>
            <th>Nama Lengkap</th>
            <th>Umur</th>
            <th>Mata Pelajaran</th>
        </tr>
        @foreach($data as $guru)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $guru->name }}</td>
            <td>{{ $guru->nama_lengkap }}</td>
            <td>{{ $guru->umur }}</td>
            <td>{{ $guru->mapel }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>