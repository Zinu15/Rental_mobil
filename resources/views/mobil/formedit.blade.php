@extends('layout.main');

@section('konten')
<div class="card">
    <h3>Edit Data Mobil</h3>
    <div class="card-header">
        <button type="button" class="btn btn-danger btn-sm" onclick="window.location='{{ url('mobil') }}'">
            <i class="fas fa-plus-circle"></i> Kembali
        </button>
    </div>
    <div class="card-body">
     <form action="{{ url('mobil/'.$idmobil) }}" method="post">
     @csrf
     @method('PUT')
     <div class="row mb-3">
        <label for="merek" class="col-sm-2 col-form-label">Merek</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="merek" name="merek" value="{{ $merek }}">
      </div>
      </div>
      <div class="row mb-3">
        <label for="model" class="col-sm-2 col-form-label">Model</label>
        <div class="col-sm-10">
          <input type="text" class="form-control " id="model" name="model" value="{{ $model }}">
        </div>
      </div>
      <div class="row mb-3">
        <label for="nopol" class="col-sm-2 col-form-label">No polisi</label>
        <div class="col-sm-10">
          <input type="text" class="form-control " id="nopol" name="nopol" value="{{ $nopol }}">
        </div>
      </div>
      <div class="row mb-3">
        <label for="harga" class="col-sm-2 col-form-label">Harga</label>
        <div class="col-sm-10">
          <input type="number" class="form-control " id="harga" name="harga" value="{{ $harga }}">
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
