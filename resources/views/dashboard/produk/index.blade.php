@extends('dashboard.layouts.main')

@section('content')
    <div class="page-heading">
        <h3>Data Produk</h3>
    </div>
    {{--  ALERT  --}}
    <div class="row mt-3">
        <div class="col">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session()->has('failed'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('failed') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
    </div>
    {{--  ALERT  --}}

    {{--  CONTENT  --}}
    <div class="row mt-3 mb-5">
        <div class="col">
            <a class="btn btn-primary" href="{{ route('produk.create') }}">
                <i class="fa-regular fa-plus me-2"></i>
                Tambah
              </a>

            <div class="card mt-3 col-sm-6 col-md-12">
                <div class="card-body">

                    {{-- tables --}}
                    <table id="myTable" class="table responsive nowrap table-bordered table-striped align-middle"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Slug</th>
                                <th>Harga</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($produks as $produk)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td class="text-wrap" style="max-width: 200px;">{{ $produk->name }}</td>
                                    <td class="text-wrap" style="max-width: 200px;">{{ $produk->slug }}</td>
                                    <td>{{ $produk->harga }}</td>
                                    <td>
                                        <a href="{{ route('produk.edit', $produk->id) }}" class="btn btn-sm btn-warning">
                                            <i class="fa-regular fa-pen-to-square"></i>
                                          </a>
                                        <button id="delete-button" class="btn btn-sm btn-danger" id="delete-button"
                                            data-bs-toggle="modal" data-bs-target="#hapusProduk{{ $loop->iteration }}">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>

                                {{--  MODAL DELETE  --}}
                                <x-form_modal>
                                    @slot('id', "hapusProduk$loop->iteration")
                                    @slot('title', 'Hapus Data Produk')
                                    @slot('route', route('produk.destroy', $produk->id))
                                    @slot('method') @method('delete') @endslot
                                    @slot('btnPrimaryClass', 'btn-outline-danger')
                                    @slot('btnSecondaryClass', 'btn-secondary')
                                    @slot('btnPrimaryTitle', 'Hapus')

                                    @csrf
                                    <input type="hidden" name="id" value="{{ $produk->id }}">
                                    <p class="fs-6">Apakah anda yakin akan menghapus data dengan nama
                                        <b>{{ $produk->name }} ?</b>
                                    </p>
                                </x-form_modal>
                                {{--  MODAL DELETE  --}}
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{--  CONTENT  --}}

@endsection

@section('scripts')

@endsection
