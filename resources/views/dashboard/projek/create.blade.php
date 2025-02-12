@extends('dashboard.layouts.main')

@section('content')
    <div class="page-heading">
        <h3>Tambah Data Projek</h3>
    </div>
    <div class="row">
        <div class="col-6">
            <a class="btn btn-outline-secondary" href="{{ route('projek.index') }}">
                <i class="fa-regular fa-chevron-left me-2"></i>
                Kembali
            </a>

            <div class="card mt-3">
                <div class="card-body">
                    {{-- Form Perangkat Gampong --}}
                    <form action="{{ route('projek.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
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
                            <label for="mitra" class="form-label">Mitra</label>
                            <input type="text" class="form-control @error('mitra') is-invalid @enderror"
                                name="mitra" id="mitra" value="{{ old('mitra') }}" autofocus required>
                            @error('mitra')
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
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                    {{-- End Form Perangkat Gampong --}}
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
