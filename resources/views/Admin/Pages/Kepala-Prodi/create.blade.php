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
                <h5>Ketua Program Studi</h5>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-lg-12 mb-lg-0 mb-4">
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="d-flex flex-column h-100">
                            <div class="card-body p-3">
                                <div class="card-header pb-0 text-center bg-transparent mb-5">
                                    <h3 class="font-weight-bolder text-info text-gradient">Form Create Ketua Program
                                        Studi
                                    </h3>
                                    <p class="mb-0">Lengkapilah Form Berikut Ini Secara Lengkap</p>
                                </div>
                                <form action="{{ url('/admin/ketua-program-studi/create') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <label for="name">Nama Ketua Program Studi</label>
                                    <div class="mb-3">
                                        <input type="text" id="name" name="name" class="form-control">
                                    </div>
                                    <label for="program_studi">Program Studi</label>
                                    <div class="mb-3">
                                        <input type="text" id="program_studi" name="program_studi" class="form-control">
                                    </div>
                                    <label for="visi_misi">Visi & Misi</label>
                                    <div class="mb-3">
                                        <textarea type="text" class="form-control" id="visi_misi" name="visi_misi"
                                            rows="3" required></textarea>
                                    </div>
                                    <label for="image">Foto Profil</label>
                                    <div class="mb-3">
                                        <input class="form-control" type="file" name="image" id="image"
                                            onchange="previewImg()">
                                    </div>
                                    <div class="text-end mt-5">
                                        <button type="submit" class="btn btn-info btn-sm">Create</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 ms-auto text-center mt-5 mt-lg-0">
                        <div class="border-radius-lg h-100">
                            <img class="img-preview card-img card-img-left"
                                src="{{ asset('../assets/img/logos/mastercard.png') }}" alt="Card image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





@endsection
