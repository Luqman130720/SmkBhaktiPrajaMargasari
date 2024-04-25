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
                <a class="btn bg-gradient-dark mb-0" href="{{ url('/admin/prestasi/create') }}"><i
                        class="fas fa-plus"></i>&nbsp;&nbsp;Tambahkan Prestasi Sekolah</a>
            </div>
        </div>
    </div>
</div>


<div class="col-12 mt-4">
    <div class="card mb-4">
        <div class="card-header pb-0 p-3">
            <h6 class="mb-1">Fasilitas Sekolah</h6>
            <p class="text-sm">Smk Bhakti Praja Margasari</p>
        </div>
        <div class="card-body p-3">
            <div class="row">
                @foreach ($prestasi as $data)
                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                    <div class="card card-blog card-plain">
                        <div class="position-relative">
                            <div class="d-block shadow-xl border-radius-xl">
                                <img src="{{ asset('storage/' . $data->image) }}" alt="img-blur-shadow"
                                    class="img-fluid shadow border-radius-xl">
                            </div>
                            <form action="/admin/prestasi/delete/{{ $data->id }}" method="POST">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger btn-sm position-absolute top-0 end-0 m-2" type="submit"
                                    onclick="return confirm('Apakah kamu yakin?')">
                                    <i class="bx bx-trash"></i> delete
                                </button>
                            </form>
                        </div>
                        <h5 class="mt-2 text-center">
                            {{ $data->prestasi  }}
                        </h5>

                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</div>
@endsection
