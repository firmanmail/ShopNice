@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="mb-3">
        <a href="{{route('backend.index')}}" class="btn btn-outline-primary">
          Tambah Pesanan
      </a>
      </div>

      <div class="card border-0 shadow">
        <div class="px-3 py-3">
          <h4 class="text-muted">Tambah Pesanan</h4>
        </div>
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Barang Masuk</th>
                    <th>Barang Masuk</th>
                    <th>Barang Masuk</th>
                </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection