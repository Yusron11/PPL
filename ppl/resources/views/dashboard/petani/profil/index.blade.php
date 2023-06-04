@extends('dashboard.petani.main')

@section('container')

<div class="card shadow-lg mx-4 ">
    <div class="card-body p-3">
      <div class="row gx-4">
        <div class="col-auto">
          <div class="avatar avatar-xl position-relative">
            <img src="https://source.unsplash.com/500x400?profil" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
          </div>
        </div>
        <div class="col-auto my-auto">
          <div class="h-100">
            <h5 class="mb-1">
              {{ $user->name }}
            </h5>
            <p class="mb-0 font-weight-bold text-sm">
              {{ $user->role }}
            </p>
          </div>
        </div>
      </div>
    </div>
</div>
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header pb-0">
            <div class="d-flex align-items-center">
              <p class="mb-0">Profile Saya</p>
              <button class="btn btn-primary btn-sm ms-auto">Edit</button>
            </div>
          </div>
          <div class="card-body">
            <p class="text-uppercase text-sm">User Information</p>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Username</label>
                  <input class="form-control" type="text" value="{{ $user->username }}">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">{{ $user->email }}</label>
                  <input class="form-control" type="email" value="{{ $user->email }}">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Nama Lengkap</label>
                  <input class="form-control" type="text" value="{{ $user->name }}">
                </div>
              </div>
            </div>
            <hr class="horizontal dark">
            <p class="text-uppercase text-sm">Contact Information</p>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Address</label>
                  <input class="form-control" type="text" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">City</label>
                  <input class="form-control" type="text" value="New York">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Country</label>
                  <input class="form-control" type="text" value="United States">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Postal code</label>
                  <input class="form-control" type="text" value="437300">
                </div>
              </div>
            </div>
            <hr class="horizontal dark">
            <p class="text-uppercase text-sm">About me</p>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">About me</label>
                  <input class="form-control" type="text" value="A beautiful Dashboard for Bootstrap 5. It is Free and Open Source.">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection