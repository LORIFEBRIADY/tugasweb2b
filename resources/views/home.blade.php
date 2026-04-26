@extends('layouts.dashboard')
@section('content')
<h2>Home Page</h2>

<x-alert type="success" message="Berhasil masuk ke halaman Home!" />

<x-alert type="info" message="Ini adalah informasi penting di Home." />
@endsection

@push('scripts')
<script>
    console.log('Halaman Home Siap!');
</script>
@endpush
<x-title text="" />