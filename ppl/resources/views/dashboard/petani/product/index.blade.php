{{-- @php
use App\Helpers\Helper;
@endphp

@extends('dashboard.petani.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Produk Saya</h1>
</div>

@if (session()->has('success'))
  <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

<div class="table-responsive col-lg-10">
  <a href="/dashboard/product/create" class="btn btn-primary md-3">Tambah Produk</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama</th>
          <th scope="col">Harga</th>
          <th scope="col">Stok</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($products as $produk)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $produk->name }}</td>
          <td>{{ Helper::harga($produk->price) }}</td>
          <td>{{ $produk->stok }}</td>
          <td>
            <a href="/dashboard/product/{{ $produk->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
            <a href="/dashboard/product/{{ $produk->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
            <form action="/dashboard/product/{{ $produk->slug }}" method="POST" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="return confirm('Apakah anda yakin ingin menghapus produk ini?')"><span data-feather="x-circle"></span></button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
    
@endsection --}}

@php
use App\Helpers\Helper;
@endphp

@extends('dashboard.petani.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Produk Saya</h1>
</div>

@if (session()->has('success'))
  <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h6>Daftar Produk</h6>
            <a href="/dashboard/product/create" class="btn btn-primary md-3">Tambah Produk</a>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Produk</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Harga</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">stok</th>
                    <th class="text-center text-secondary opacity-7">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($products as $product)
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">{{ $loop->iteration }}</h6>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0">{{ $product->name }}</p>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold">{{ Helper::harga($product->price) }}</span>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <span class="badge badge-sm bg-gradient-success">{{ $product->stok }}</span>
                    </td>
                    <td class="align-middle text-center">
                      <a href="/dashboard/product/{{ $product->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
                      <a href="/dashboard/product/{{ $product->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                      <form action="/dashboard/product/{{ $product->slug }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Apakah anda yakin ingin menghapus produk ini?')"><span data-feather="x-circle"></span></button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>   
  </div>
    
@endsection