@extends('menu.template')
@section('content')
    <div class="row mt--2">
        <div class="col-md-12">
            <div class="card full-height">
                <div class="card-header">
                    <div class="card-title text-center">
                        <h1 class="mt-3">Daftar Menu</h1>
                        
                    </div>
                </div>
                <div class="container">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatables-default" class="display table table-striped table-hover table table-success " cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Harga</th>
                                    <th class="d-flex justify-content-center">
                                    <a href="{{ url('menu/add') }}">
                            <button type="button" class="btn btn-primary float-end text-white btn-round">
                                <i class="fa fa-plus"></i>
                                Tambah Menu
                            </button>
                        </a>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Products as $menu)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $menu->nama }}</td>
                                        <td>Rp. {{ number_format($menu->harga, 0, ',', '.') }}</td>
                                        <td class="text-center">
                                            <a href='<?= url("menu/update/$menu->id") ?>' title="Edit"
                                                class="btn btn-success btn-sm text-white">
                                                edit
                                            </a>
                                            <a href='<?= url("menu/delete/$menu->id") ?>'
                                                onclick="return confirm('Apakah anda yakin hapus ?.')" title="Delete"
                                                class="btn btn-danger btn-sm text-white">
                                                hapus
                                            </a>
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