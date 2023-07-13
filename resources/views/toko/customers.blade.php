@extends('template.admin')

@section('content')
    <h1>Customers</h1>
    <a href="{{ route('produk.AddCustomer') }}" class="btn btn-primary mb-3">Add Customer</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Nomor Telepon</th>
            </tr>
        </thead>
        <tbody>
            @php $number = 1;  @endphp
            @foreach ($customers as $customer)
                <tr>
                    <td>{{ $number }}</td>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->address }}</td>
                    <td>{{ $customer->no_hp }}</td>
                </tr>
                @php  $number++ @endphp
            @endforeach

        </tbody>
    </table>
@endsection