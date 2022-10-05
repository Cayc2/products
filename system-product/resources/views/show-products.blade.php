@extends('templates.layout')

@section('title', 'Show Products')

@section('header')
    <a class="btn btn-primary" href="{{ route('PageCreateProduct') }}">Create Product</a>
@endsection

@section('main')
    <section>
        <h3>Show Products</h3>
    </section>

    @if (session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif

    @include('components.msg-success')

    <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>created_at</th>
            <th>updated_at</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($products as $key => $product)
          <tr>
            <th>{{ $key + 1}}</th>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->created_at }}</td>
            <td>{{ $product->updated_at }}</td>
          </tr>
          @empty
            <tr>
                <th class="alert alert-danger" colspan="6">Não existe nenhum produto cadastrado!</th>
            </tr>
          @endforelse
        </tbody>
      </table>
@endsection
