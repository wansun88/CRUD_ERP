@extends('layouts.app')

@section('content')

<div class="card">

    <div class="card-header">
        <h4>Detail Customer</h4>
    </div>

    <div class="card-body">

        <table class="table table-bordered">

            <tr>
                <th width="200">ID</th>
                <td>{{ $customer->id }}</td>
            </tr>

            <tr>
                <th>Nama</th>
                <td>{{ $customer->name }}</td>
            </tr>

            <tr>
                <th>Email</th>
                <td>{{ $customer->email }}</td>
            </tr>

            <tr>
                <th>Phone</th>
                <td>{{ $customer->phone }}</td>
            </tr>

            <tr>
                <th>Dibuat</th>
                <td>{{ $customer->created_at }}</td>
            </tr>

            <tr>
                <th>Diubah</th>
                <td>{{ $customer->updated_at }}</td>
            </tr>

        </table>

        <a href="{{ route('customers.index') }}"
            class="btn btn-secondary">
            Kembali
        </a>

        <a href="{{ route('customers.edit', $customer) }}"
            class="btn btn-warning">
            Edit
        </a>

    </div>

</div>

@endsection