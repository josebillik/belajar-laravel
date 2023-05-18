<!DOCTYPE html>
<html lang="en" style="background-color: aquamarine">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Student</title>
</head>
<body>
    <h1 style="margin-left: auto ; margin-right: auto">Data Semua Siswa SMAN 1</h1>
    <table border=1 style="background-color: antiquewhite ;margin-left:auto;margin-right:auto;" >
        <tr>
            <th>Nama</th>
            <th>NIS</th>
            <th>Alamat</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>
        @foreach ($students as $student)
        <tr>
            <td>{{ $student->name }}</td>
            <td>{{ $student->nis }}</td>
            <td>{{ $student->address }}</td>
            <td>{{ $student->birth_date }}</td>
            <td>{{ $student->gender == 1 ? 'Pria' : 'Wanita' }}</td>
            <td>{{ $student->major }}</td>
            <td>
                <a href="{{ route('show.student', $student->id) }}">Detail</a>
                <a href="/edit/{{ $student->id }}">Edit</a>
                <form action="{{ route('delete.student', $student->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                <button>Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
     
    </table>
</body>
</html>