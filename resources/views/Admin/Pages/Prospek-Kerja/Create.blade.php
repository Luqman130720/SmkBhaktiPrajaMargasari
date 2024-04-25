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
                <img src="{{ asset('storage/' . auth()->user()->image) }}" alt="profile_image"
                    class="w-100 border-radius-lg shadow-sm">
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
        <div class="col-lg-5 col-md-7 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
            <div class="nav-wrapper position-relative end-5 text-end">
                <h5>Prospek Kerja</h5>
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
                    <h3 class="font-weight-bolder text-info text-gradient">Form Create Prospek Kerja</h3>
                    <p class="mb-0">Lengkapilah Form Berikut Ini Secara Lengkap</p>
                </div>
                <div class="card-body">
                    <form action="{{ url('/admin/prospek-kerja/create') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label for="name">Nama</label>
                        <div class="mb-3">
                            <input type="text" id="name" name="name" class="form-control"
                                placeholder="Ex: Ethan James. S.Kom, M.Kom.">
                        </div>
                        <label for="introduction">Introduction</label>
                        <div class="mb-3">
                            <textarea type="text" class="form-control" id="introduction" name="introduction"
                                rows="3"></textarea>
                        </div>
                        <label for="Pekerjaan">Pekerjaan</label>
                        <div class="mb-3">
                            <input type="text" id="Pekerjaan" name="Pekerjaan" class="form-control"
                                placeholder="Ex: Desain Komunikasi Visual">
                        </div>
                        <label for="image">Foto Profil Prodi</label>
                        <div class="mb-3">
                            <input class="form-control" type="file" name="image" id="image" onchange="previewImg()">
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
