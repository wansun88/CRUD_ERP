@extends('layouts.app')

@section('content')

<h2>Edit Customer</h2>

<form method="POST" action="{{ route('customers.update',$customer) }}">

@csrf

@method('PUT')

<div class="mb-3">

<label>Nama</label>

<input type="text" name="name"
value="{{ $customer->name }}"
class="form-control">

</div>

<div class="mb-3">

<label>Email</label>

<input type="email"
name="email"
value="{{ $customer->email }}"
class="form-control">

</div>

<div class="mb-3">

<label>Phone</label>

<input type="text"
name="phone"
value="{{ $customer->phone }}"
class="form-control">

</div>

<button class="btn btn-primary">

Update

</button>

</form>

@endsection