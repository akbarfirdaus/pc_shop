@extends('dashboard.layouts.main')

@section('content')
    <div class="page-heading">
        <h3>Data Kategori</h3>
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
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahKategori">
                <i class=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-plus-lg" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                    </svg></i>
                Tambah
            </button>

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
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kategoris as $kategori)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $kategori->name }}</td>
                                    <td>{{ $kategori->slug }}</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-warning text-white"
                                            data-bs-toggle="modal" data-bs-target="#editKategori{{ $loop->iteration }}">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </button>
                                        <button id="delete-button" class="btn btn-sm btn-danger" id="delete-button"
                                            data-bs-toggle="modal" data-bs-target="#hapusKategori{{ $loop->iteration }}">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>


                                {{--  MODAL EDIT  --}}

                                <x-form_modal>
                                    @slot('id', "editKategori$loop->iteration")
                                    @slot('title', 'Edit Data Kategori')
                                    @slot('route', route('kategori.update', $kategori->id))
                                    @slot('method') @method('put') @endslot
                                    @slot('btnPrimaryTitle', 'Perbarui')
                                    @csrf

                                    <div class="row">
                                        <div class="mb-3">
                                            <input type="hidden" name="id" value="{{ $kategori->id }}">
                                            <label for="name" class="form-label">Nama</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                name="name" value="{{ old('name', $kategori->name) }}" id="name"
                                                placeholder="Anton" autofocus required>
                                            @error('name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </x-form_modal>
                                {{--  MODAL EDIT  --}}

                                {{--  MODAL DELETE  --}}
                                <x-form_modal>
                                    @slot('id', "hapusKategori$loop->iteration")
                                    @slot('title', 'Hapus Data Kategori')
                                    @slot('route', route('kategori.destroy', $kategori->id))
                                    @slot('method') @method('delete') @endslot
                                    @slot('btnPrimaryClass', 'btn-outline-danger')
                                    @slot('btnSecondaryClass', 'btn-secondary')
                                    @slot('btnPrimaryTitle', 'Hapus')

                                    @csrf
                                    <input type="hidden" name="id" value="{{ $kategori->id }}">
                                    <p class="fs-6">Apakah anda yakin akan menghapus data dengan nama
                                        <b>{{ $kategori->name }} ?</b>
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

    {{--  MODAL ADD  --}}

    <x-form_modal>
        @slot('id', 'tambahKategori')
        @slot('title', 'Tambah Data Kategori')
        @slot('route', route('kategori.store'))

        @csrf
        <div class="row">
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                    id="name" placeholder="name" autofocus required>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </x-form_modal>
    {{--  MODAL ADD  --}}
@endsection

@section('scripts')

</script>
@endsection
