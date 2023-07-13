@extends('layout.main');

@section('konten')
<div class="card">
    <div class="card-header">
        Home
    </div>
    <div class="card-body">
     <div class="alert alert-info">
        Selamat Datang
     </div>
    </div>
  </div>
<br>
  <div class="card">
    <div class="card-header">
        Mobil Tersedia
    </div>
    <div class="card-body">
        <div class="card-body">
            @if (session('msg'))
        <div class="alert alert-success">
            {{ session('msg') }}
        </div>
    @endif
    <form method="GET">
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

                @foreach ($mobil as $row)
                    <tr>
                        <td>{{ $loop ->iteration }}</td>
                        <td>{{ $row ->merek }}</td>
                        <td>{{ $row ->model }}</td>
                        <td>{{ $row ->nopol }}</td>
                        <td>{{ $row ->harga }}</td>
                        <td>{{ $row ->status }}</td>
                        <td>
                            <button  type="button" class="btn btn-sm btn-info" title="Edit Data Mobil">
                                Sewa
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
         </table>
        </div>
  </div>
@endsection
