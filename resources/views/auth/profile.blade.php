@extends('layout.main');

@section('konten')
<div class="card">
    <div class="card-header">
        Profile
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <label for="name" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="name" name="name" value="{{ $name }}" disabled>
            </div>
        </div>
        <div class="row mb-3">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="email" name="email" value="{{ $email }}" disabled>
            </div>
        </div>
        <div class="row mb-3">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $alamat }}" disabled>
            </div>
        </div>
        <div class="row mb-3">
            <label for="nohp" class="col-sm-2 col-form-label">No HP</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="nohp" name="nohp" value="{{ $nohp }}" disabled>
            </div>
        </div>
        <div class="row mb-3">
            <label for="nosim" class="col-sm-2 col-form-label">No SIM</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="nosim" name="nosim" value="{{ $nosim }}" disabled>
            </div>
        </div>
    </div>
  </div>
@endsection
