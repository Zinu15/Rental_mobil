@extends('layout.main');

@section('konten')
<h3>Data Mobil</h3>
<div class="card">
    <div class="card-header">
        <button type="button" class="btn btn-primary btn-sm" onclick="window.location='{{ url('mobil/add') }}'">
            <i class="fas fa-plus-circle"></i> Tambah Mobil
        </button>
    </div>
    <div class="card-body">
        @if (session('msg'))
    <div class="alert alert-success">
        {{ session('msg') }}
    </div>
@endif
<form method="GET">
    <div class="row mb-3">
        <label for="search" class="col-sm-2 col-form-label">Cari Data</label>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-sm" value="" placeholder="Cari Data ..." name="search" autofocus value="{{ $search }}">
        </div>
    </div>
</form>
     <table class="table table-sm table-striped table-border">
        <thead>
            <tr>
                <th>NO</th>
                <th>Merek Mobil</th>
                <th>Model</th>
                <th>Nopol</th>
                <th>Harga</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @php
                $nomor =1 + (($mobil->currentPage()-1) * $mobil->perPage());
            @endphp
            @foreach ($mobil as $row)
                <tr>
                    {{-- <td>{{ $loop ->iteration }}</td> --}}
                    <td>{{ $nomor++ }}</td>
                    <td>{{ $row -> merek }}</td>
                    <td>{{ $row -> model }}</td>
                    <td>{{ $row -> nopol }}</td>
                    <td>{{ $row -> harga }}</td>
                    <td>{{ $row -> status }}</td>
                    <td>
                        <button onclick="window.location='{{ url('mobil/'.$row->idmobil) }}'" type="button" class="btn btn-sm btn-info" title="Edit Data Mobil">
                            <i class="fas fa-edit"></i>
                        </button>
                        <form onsubmit="return deleteData('{{ $row->merek }}')" method="POST" style="display: inline" action="{{ url('mobil/'.$row->idmobil) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" title="Hapus Data" class="btn btn-sm btn-danger">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
     </table>
     {{ $mobil->links() }}
    </div>
  </div>
  <script>
    function deleteData(merek){
        pesan = confirm('Yakin hapus data mobil ini ??');
        if(pesan) return true;
        else return false;
    }
  </script>
@endsection
