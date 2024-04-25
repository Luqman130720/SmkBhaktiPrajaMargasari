@extends('Admin.Layout.Main')
@section('Content')

@if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close btn-close-warning" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="page-header min-height-250 border-radius-xl mt-1"
    style="background-image: url('{{ asset('../assets/img/curved-images/curved0.jpg') }}'); background-position-y: 50%;">
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
        <div class="col-lg-5 col-md-7 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
            <div class="nav-wrapper position-relative end-5 text-end">
                <a class="btn bg-gradient-dark mb-0" href="{{ url('/admin/event-prodi/create') }}"><i
                        class="fas fa-plus"></i>&nbsp;&nbsp;Tambahkan Kegiatan Program Studi</a>
            </div>
        </div>
    </div>
</div>


<div class="col-12 mt-4">
    <div class="card mb-4">
        <div class="card-header pb-0 p-3">
            <h6 class="mb-1">List Daftar Prodi / Jurusan</h6>
            <p class="text-sm">Smk Bhakti Praja Margasari</p>
        </div>
        <div class="card-body p-3">
            <div class="row">
                @foreach ($kaprodi as $data)
                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                    <a href="{{ url('/admin/event-prodi/list-event/' .$data->id) }}">

                        <div class="card card-blog card-plain">
                            <div class="position-relative">
                                <div class="d-block shadow-xl border-radius-xl">
                                    <img src="{{ asset('storage/'. $data->image) }}" alt="img-blur-shadow"
                                        class="img-fluid shadow border-radius-xl">
                                </div>
                            </div>
                            <div class="card-body px-1 pb-0">
                                <p class="text-gradient text-dark mb-2 text-sm">{{ $data->name }}</p>
                                <div href="" class="text-center">
                                    <h5>
                                        {{ $data->prodi }}
                                    </h5>
                                </div>
                            </div>

                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
