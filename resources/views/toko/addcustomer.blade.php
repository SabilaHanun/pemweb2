@extends('template.admin')

@section('content')
    <h1>Add Customer</h1>
    <form action="{{ route('produk.NewCustomer') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="price">Alamat:</label>
            <input type="text" name="address" id="address" class="form-control">
        </div>
        <div class="form-group">
            <label for="description">Nomor Telepon:</label>
            <input type="number" name="no_hp" id="no_hp" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
@endsection