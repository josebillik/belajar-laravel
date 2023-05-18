<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Siswa</title>
</head>
<body>
    <h1>Detail Siswa</h1>
    <table border="1">
        <tr>
            <th>Nama</th>
            <td>:</td>
            <td>{{ $student->name }}</td>
        </tr>
        <tr>
            <th>NIS</th>
            <td>:</td>
            <td>{{ $student->nis }}</td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td>:</td>
            <td>{{ $student->address }}</td>
        </tr>
        <tr>
            <th>Tanggal Lahir</th>
            <td>:</td>
            <td>{{ $student->birth_date }}</td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td>:</td>
            <td>{{ $student->gender == 1 ? 'Pria' : 'Wanita'}}</td>
        </tr>
        <tr>
            <th>Jurusan</th>
            <td>:</td>
            <td>{{ $student->major }}</td>
        </tr>
    </table>
</body>
</html>