@extends('dashboard.layouts.main')

@section('content')
    <div class="page-heading">
        <h3>Tambah Data Produk</h3>
    </div>
    <div class="row">
        <div class="col-12">
            <a class="btn btn-outline-secondary" href="{{ route('produk.index') }}">
                <i class="fa-regular fa-chevron-left me-2"></i>
                Kembali
            </a>

            <div class="col-12">
                <div class="card mt-3">
                    <div class="card-body">
                        {{-- Form Perangkat Gampong --}}
                        <form action="{{ route('produk.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Nama</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            name="name" id="name" value="{{ old('name') }}" autofocus required>
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="id_kategori" class="form-label">Kategori</label>
                                        <select class="js-example-basic-single form-select " name="id_kategori">
                                            @foreach ($kategoris as $kategori)
                                                @if (old('id_kategori') == $kategori->id)
                                                    <option value="{{ $kategori->id }}" selected>{{ $kategori->nama }}</option>
                                                @else
                                                    <option value="{{ $kategori->id }}">{{ $kategori->name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('id_jabatan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="harga" class="form-label">Harga</label>
                                        <input type="number" class="form-control @error('harga') is-invalid @enderror"
                                            name="harga" id="harga" placeholder="harga" autofocus required>
                                        @error('harga')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="thumbnail" class="form-label">Thumbnail</label>
                                        <img class="img-preview img-fluid mb-3 col-sm-5">
                                        <input class="form-control @error('thumbnail') is-invalid @enderror" type="file"
                                            name="thumbnail" id="thumbnail" onchange="previewImage()">
                                        @error('thumbnail')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="deskripsi" class="form-label">Deskripsi</label>
                                        <input type="hidden" class="form-control @error('deskripsi') is-invalid @enderror"
                                            name="deskripsi" id="deskripsi" placeholder="Question" autofocus required>
                                        @error('deskripsi')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <trix-editor input="deskripsi"></trix-editor>
                                    </div>
                                </div>
                            </div>

                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                        {{-- End Form Perangkat Gampong --}}
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });

        function previewImage() {
            const image = document.querySelector('#thumbnail');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(OFREvent) {
                imgPreview.src = OFREvent.target.result;
            }
        }
    </script>
@endsection
