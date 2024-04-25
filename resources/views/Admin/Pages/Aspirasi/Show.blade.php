@extends('Admin.Layout.Main')
@section('Content')
<div class="page-header min-height-250 border-radius-xl mt-1"
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
        <div class="col-lg-5 col-md-7 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
            <div class="nav-wrapper position-relative end-5 text-end">
                <h5>Pusat Pengaduan dan Saran</h5>
            </div>
        </div>
    </div>
</div>


<div class="col-md-12 mt-4">
    <div class="card">
        <div class="card-header pb-0 px-3">
            <h6 class="mb-0">Aspirations</h6>
        </div>
        <div class="row">
            @foreach ( $aspirasi as $data )

            <div class="card-body pt-0 p-3">

                <li class="list-group-item border-0 d-flex p-4 mb-2 mt-3 bg-gray-100 border-radius-lg">
                    <div class="d-flex flex-column">
                        <h6 class="mb-3 text-sm">Subject: {{ $data->subject }}</h6>
                        <span class="mb-2 text-xs">[{{ $data->created_at }}] "{{ $data->message }}"</span>
                    </div>
                    <div class="ms-auto text-end">
                        {{-- <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i
                                class="far fa-trash-alt me-2"></i>Delete</a> --}}
                        <form action="/aspirasi/delete/{{ $data->id }})" method="POST">
                            @method('delete')
                            @csrf
                            <button class="btn btn-link text-danger text-gradient px-3 mb-0" type="submit"
                                onclick="return confirm('Apakah kamu yakin?')">
                                <i class="bx bx-trash"></i> delete
                            </button>
                        </form>


                    </div>
                </li>

            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
