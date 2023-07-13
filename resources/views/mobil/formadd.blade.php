@extends('layout.main');

@section('konten')
<div class="card">
    <h3>Tambah Data Mobil</h3>
    <div class="card-header">
        <button type="button" class="btn btn-danger btn-sm" onclick="window.location='{{ url('mobil') }}'">
            <i class="fas fa-plus-circle"></i> Kembali
        </button>
    </div>
    <div class="card-body">
     <form action="{{ url('mobil') }}" method="post">
     @csrf
     <div class="row mb-3">
        <label for="merek" class="col-sm-2 col-form-label">Merek</label>
        <div class="col-sm-10">
          <input type="text" class="form-control @error('merek') is-invalid @enderror" id="merek" name="merek" value="{{ old('merek') }}">
          @error('merek')
    <div class="invalid-feedback">
        {{ $message }}
      </div>
        @enderror
        </div>
      </div>
      <div class="row mb-3">
        <label for="model" class="col-sm-2 col-form-label">Model</label>
        <div class="col-sm-10">
          <input type="text" class="form-control @error('model') is-invalid @enderror" id="model" name="model" value="{{ old('model') }}">
          @error('model')
    <div class="invalid-feedback">
        {{ $message }}
      </div>
@enderror
        </div>
      </div>
      <div class="row mb-3">
        <label for="nopol" class="col-sm-2 col-form-label">No polisi</label>
        <div class="col-sm-10">
          <input type="text" class="form-control @error('nopol') is-invalid @enderror" id="nopol" name="nopol" value="{{ old('nopol') }}">
          @error('nopol')
    <div class="invalid-feedback">
        {{ $message }}
      </div>
@enderror
        </div>
      </div>
      <div class="row mb-3">
        <label for="harga" class="col-sm-2 col-form-label">Harga</label>
        <div class="col-sm-10">
          <input type="number" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" value="{{ old('harga') }}">
          @error('harga')
    <div class="invalid-feedback">
        {{ $message }}
      </div>
@enderror
        </div>
      </div>
      <div class="row mb-3">
        <label for="" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary">
            Simpan
          </button>
        </div>
    </div>
</form>
  </div>
@endsection
