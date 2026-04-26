<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Ujian</title>
    <style>
        body {
            background-color: rgb(93, 163, 225)
        }
         footer {
        background: #2c3e50;       
    }
       
    </style>
</head>
<body>

    <header>
        @include('partials.navbar')
    </header>
<h2>Hasil Ujian Siswa</h2>
<table border="1">
    <tr>
        <td>Nama</td>
        <td>: {{ $siswa['nama'] }}</td>
    </tr>
    <tr>
        <td>Nilai</td>
        <td>: {{ $siswa['nilai'] }}</td>
    </tr>
    <tr>
        <td>Predikat</td>
        <td>:
            <strong>
            @if ($siswa['nilai'] >= 85)
                A (Sangat Baik)
            @elseif ($siswa['nilai'] >= 75)
                B (Baik)
            @elseif ($siswa['nilai'] >= 60)
                C (Cukup)
            @else
                D (Kurang)
            @endif
            </strong>
        </td>
    </tr>
    <tr>
        <td>Keterangan</td>
        <td>:
            <strong>
            @unless ($siswa['nilai'] < 60)
                Selamat Anda -- LULUS --
            @else
                Maaf Anda -- TIDAK LULUS --
            @endunless
            </strong>
        </td>
    </tr>
</table>
<footer>
    @include('partials.footer')
</footer>
</body>
</html>