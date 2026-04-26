@extends('layouts.dashboard')
@section('content')
<h2>Profile Pengguna</h2>
<x-alert type="warning" message="Perhatian: data profile pengguna harus valid!" />
<table border="1" cellpadding="10">
    <tr>
        <th>Nama</th>
        <td>{{ $user['nama'] }}</td>
    </tr>
    <tr>
        <th>Email</th>
        <td>{{ $user['email'] }}</td>
    </tr>
    <tr>
        <th>Alamat</th>
        <td>{{ $user['alamat'] }}</td>
    </tr>
</table>
<x-alert type="success" message="Profile  berhasil dimuat." />
@endsection
@push('scripts')
<script src="{{ asset('js/profile.js') }}"></script>
@endpush
