@extends('layouts.app')

@section('content')
    <h2>Daftar Customer</h2>

    <a href="{{ route('customers.create') }}" class="btn btn-primary mb-3">
        Tambah Customer
    </a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">

        <thead>

            <tr>

                <th>ID</th>

                <th>Nama</th>

                <th>Email</th>

                <th>Phone</th>

                <th width="180">Action</th>

            </tr>

        </thead>

        <tbody>

            @foreach ($customers as $customer)
                <tr>

                    <td>{{ $customer->id }}</td>

                    <td>{{ $customer->name }}</td>

                    <td>{{ $customer->email }}</td>

                    <td>{{ $customer->phone }}</td>

                    <td>

                        <a href="{{ route('customers.show', $customer) }}" class="btn btn-info btn-sm">
                            Detail
                        </a>

                        <a href="{{ route('customers.edit', $customer) }}" class="btn btn-warning btn-sm">

                            Edit

                        </a>

                        <form action="{{ route('customers.destroy', $customer) }}" method="POST" class="d-inline">

                            @csrf

                            @method('DELETE')

                            <button class="btn btn-danger btn-sm">

                                Delete

                            </button>

                        </form>

                    </td>

                </tr>
            @endforeach

        </tbody>

    </table>
@endsection
