{{-- @php
use App\Helpers\Helper;
@endphp

@extends('dashboard.pelanggan.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Pesanan Saya</h1>
</div>

@if (session()->has('success'))
  <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

<div class="table-responsive col-lg-10">
    <table class="table table-striped table-bordered">
        <thead>
            <tr class="text-center">
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Harga</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Total Harga</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
            <tr class="text-center">
                <td>{{ $loop->iteration }}</td>
                <td>{{ $order->product->name }}</td>
                <td>{{ Helper::harga($order->product->price) }}</td>
                <td>{{ $order->jumlah }}</td>
                <td>{{ Helper::harga($order->total_harga) }}</td>
                <td>
                    @if($order->status == 'BELUM DIBAYAR')
                    <span class="btn btn-danger">{{ $order->status }}</span>
                    @elseif($order->status == 'SEDANG DIPROSES')
                    <span class="btn btn-warning">{{ $order->status }}</span>
                    @elseif($order->status == 'DIKIRIM')
                    <span class="btn btn-primary">{{ $order->status }}</span>
                    @elseif($order->status == 'SELESAI')
                    <span class="btn btn-success">{{ $order->status }}</span>
                    @endif
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

@extends('dashboard.pelanggan.main')

@section('container')

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
              <h6>Daftar Pesanan</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Produk</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Harga</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jumlah</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Total Harga</th>
                      <th class="text-center text-secondary opacity-7">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($orders as $order)
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ $order->product->name }}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{ Helper::harga($order->product->price) }}</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">{{ $order->jumlah }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{ Helper::harga($order->total_harga) }}</span>
                      </td>
                      <td class="align-middle text-center">
                        @if($order->status == 'BELUM DIBAYAR')
                        <a href="/bayar/{{ $order->id }}"class="btn btn-danger">{{ $order->status }}</a>
                        <form action="/dashboard/myorder/{{ $order->id }}" method="POST" class="d-inline">
                          @method('delete')
                          @csrf
                          <button class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin membatalkan pesanan ini?')">Batalkan</button>
                        </form>
                        @elseif($order->status == 'DALAM PROSES')
                        <span class="btn btn-warning">{{ $order->status }}</span>
                        @elseif($order->status == 'DIKIRIM')
                        <span class="btn btn-primary">{{ $order->status }}</span>
                        @elseif($order->status == 'SELESAI')
                        <span class="btn btn-success">{{ $order->status }}</span>
                        @endif
                        {{-- <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a> --}}
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