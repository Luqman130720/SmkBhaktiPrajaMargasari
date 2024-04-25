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
                <h5>Organisasi</h5>
            </div>
        </div>
    </div>
</div>


<div class="container mt-4">
    <div class="row">
        <div class="col-md-7">
            <div class="card mb-3">
                <div class="card-header pb-0 text-center bg-transparent">
                    <h3 class="font-weight-bolder text-info text-gradient">Form Create Organisasi / Ekstrakulikuler</h3>
                    <p class="mb-0">Lengkapilah Form Berikut Ini Secara Lengkap</p>
                </div>
                <div class="card-body">
                    <form action="{{ url('/admin/organisasi/create') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="organisasi">Organisasi</label>
                            <input type="text" id="organisasi" name="organisasi" class="form-control"
                                placeholder="Ex: OSIS">
                        </div>
                        <div class="mb-3">
                            <label for="desk_1">Deskripsi 1 Organisasi</label>
                            <textarea type="text" class="form-control" id="desk_1" name="desk_1" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="desk_2">Deskripsi 2 Organisasi</label>
                            <textarea type="text" class="form-control" id="desk_2" name="desk_2" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="moto_organisasi">Moto Organisasi</label>
                            <textarea type="text" class="form-control" id="moto_organisasi" name="moto_organisasi"
                                rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="image">Foto Profil Organisasi</label>
                            <input class="form-control" type="file" name="image" id="image" onchange="previewImg()">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card">
                <img class="card-img img-preview" id="img-preview"
                    src="{{ asset('../assets/img/logos/mastercard.png') }}" alt="Card image">
            </div>
        </div>
    </div>
</div>

@endsection
