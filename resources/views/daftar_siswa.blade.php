<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Siswa</title>
    <style>
        h2 {
            color: rgb(231, 26, 3);
        }
        table {
            border-collapse: collapse;
            width: 20%;
        }
        table, th, td {
            border: 1px solid rgb(10, 10, 10);
            padding: 8px;
            color: rgb(3, 3, 231);
        }
        th {
            background-color: #7c9280;
        }
    </style>
</head>
<body>

<h2>Daftar Siswa</h2>

<table>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Umur</th>
    </tr>

    @foreach ($siswa as $index => $data)
    <tr>
        <td>{{ $index + 1 }}</td>
        <td>{{ $data['nama'] }}</td>
        <td>{{ $data['kelas'] }}</td>
        <td>{{ $data['umur'] }}</td>
    </tr>
    @endforeach

</table>

</body>
</html>