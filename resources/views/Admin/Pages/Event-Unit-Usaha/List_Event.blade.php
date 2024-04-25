@extends('Admin.Layout.Main')
@section('Content')

@if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close btn-close-danger" data-bs-dismiss="alert" aria-label="Close"></button>
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
                <h5>Unit Usaha</h5>
            </div>
        </div>
    </div>
</div>


<div class="col-12 mt-4">
    <div class="card mb-4">
        <div class="card-header pb-0 p-3">
            <h6 class="mb-1">Daftar Prodi</h6>
            <p class="text-sm">Smk Bhakti Praja Margasari</p>
        </div>
        <div class="card-body p-3">
            <div class="row">
                @foreach ( $events as $data )

                {{-- <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                    <div class="card card-blog card-plain">
                        <div class="position-relative">
                            <div class="d-block shadow-xl border-radius-xl">
                                <img src="{{ asset('storage/'. $data->image) }}" alt="img-blur-shadow"
                class="img-fluid shadow border-radius-xl">
            </div>
        </div>
        <div class="card-body px-1 pb-0">
            <p class="text-gradient text-dark mb-2 text-sm">{{ $data->tanggal }}</p>
            <div href="javascript:;">
                <h5>
                    {{ $data->judul }}
                </h5>
            </div>
            <form action="/admin/event-unit-usaha/list-event/delete/{{ $data->id }})" method="POST">
                @method('delete')
                @csrf
                <button class="btn btn-outline-primary btn-sm mb-0" type="submit"
                    onclick="return confirm('Apakah kamu yakin?')">
                    <i class="bx bx-trash"></i> delete
                </button>
            </form>

        </div>
    </div>
</div> --}}
<div class="col-xl-3 col-md-6 mb-xl-0 mb-4 text-center">
    <div class="card card-blog card-plain">
        <div class="position-relative">
            <div class="d-block shadow-xl border-radius-xl">
                <img src="{{ asset('storage/'. $data->image) }}" alt="img-blur-shadow"
                    class="img-fluid shadow border-radius-xl">
            </div>
            <form action="/admin/event-unit-usaha/list-event/delete/{{ $data->id }}" method="POST"
                class="position-absolute top-0 end-0 mt-2 me-2">
                @method('delete')
                @csrf
                <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Apakah kamu yakin?')">
                    <i class="bx bx-trash"></i> Delete
                </button>
            </form>
        </div>
        <div class="card-body px-2 py-0">
            <h5 class="mt-3">{{ $data->judul }}</h5>
        </div>
    </div>
</div>


@endforeach
</div>
</div>
</div>
</div>
@endsection
