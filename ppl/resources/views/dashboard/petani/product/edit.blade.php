@extends('dashboard.petani.main')

@section('container')

<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
              <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Edit Produk</h1>
              </div>
              
              <div class="col-lg-8">
                  <form method="POST" action="/dashboard/product/{{ $product->slug }}" class="mb-5">
                      @method('put')
                      @csrf
                      <div class="mb-3">
                        <label for="name" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $product->name) }}">
                        @error('name')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="price" class="form-label">Harga /Kg</label>
                        <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price', $product->price) }}">
                        @error('price')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="stok" class="form-label">Stok</label>
                        <input type="number" class="form-control @error('stok') is-invalid @enderror" id="stok" name="stok" value="{{ old('stok', $product->stok) }}">
                        @error('stok')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi</label>
                        <input id="description" type="hidden" name="description" value="{{ old('description', $product->description) }}">
                        <trix-editor input="description"></trix-editor>
                        @error('description')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                      </div>
                      <button type="submit" class="btn btn-primary">Perbarui</button>
                    </form>
              </div>
            </div>
        </div>
    </div>
</div>

    
@endsection