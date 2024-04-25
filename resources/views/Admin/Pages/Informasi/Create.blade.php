@extends('Admin.Layout.Main')
@section('Content')

@if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close btn-close-danger" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif


<div class="page-header min-height-150 border-radius-xl mt-1"
    style="background-image: url('../assets/img/curved-images/curved0.jpg'); background-position-y: 50%;">
    <span class="mask bg-gradient-primary opacity-6"></span>
</div>
<div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
    <div class="row gx-4">
        <div class="col-auto">
            <div class="avatar avatar-xl position-relative">
                <img src="{{ asset('storage/' . auth()->user()->image) }}" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
            </div>
        </div>
        <div class="col-auto my-auto">
            <div class="h-100">
                <h5 class="mb-1">
                    {{ auth()->user()->nama_lengkap }}
                </h5>
                <p class="mb-0 font-weight-bold text-sm">
                    {{ auth()->user()->status }}
                </p>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
            <div class="nav-wrapper position-relative end-5 text-end">
                <h5>Informasi Sekolah</h5>
            </div>
        </div>
    </div>
</div>


<div class="col-md mt-4">
    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4">
                <img class="img-preview card-img card-img-left" src="{{ asset('../assets/img/logos/mastercard.png') }}"
                    alt="Card image">
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-7">
                <div class="card-header pb-0 text-center bg-transparent">
                    <h3 class="font-weight-bolder text-info text-gradient">Form Informasi Kegiatan Sekolah</h3>
                    <p class="mb-0">Lengkapilah Form Berikut Ini Secara Lengkap</p>
                </div>
                <div class="card-body">
                    <form action="{{ url('/admin/informasi/create') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="berita" class="form-label">Berita Acara <span
                                    class="text-danger">*</span></label>
                            <input type="text" id="berita" name="berita" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="tanggal" class="form-label">Tanggal Penting <span
                                    class="text-danger">*</span></label>
                            <input type="text" id="tanggal" name="tanggal" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi Acara <span
                                    class="text-danger">*</span></label>
                            <textarea type="text" class="form-control" id="deskripsi" name="deskripsi" rows="3"
                                required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Poster Kegiatan</label>
                            <input class="form-control" type="file" name="image" id="image" onchange="previewImg()">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-info w-100 mt-4 mb-0">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
