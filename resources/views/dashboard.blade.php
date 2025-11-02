@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">Dashboard</div>
    <div class="card-body">
        <h5>Halo, {{ Auth::user()->name }}!</h5>
        <p>Selamat datang di sistem Sahabat Warga.</p>
    </div>
</div>
@endsection
