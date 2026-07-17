@extends('layouts.app')

@section('content')

<h2>Tambah Customer</h2>

<form method="POST" action="{{ route('customers.store') }}">

@csrf

<div class="mb-3">

<label>Nama</label>

<input type="text" name="name" class="form-control">

</div>

<div class="mb-3">

<label>Email</label>

<input type="email" name="email" class="form-control">

</div>

<div class="mb-3">

<label>Phone</label>

<input type="text" name="phone" class="form-control">

</div>

<button class="btn btn-success">

Simpan

</button>

</form>

@endsection