@extends('SuperAdmin.Layout.Main')
@section('Content')
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
    </div>
</div>


<div class="col-12 mt-4">
    <div class="card mb-2">
        <div class="card-header pb-0 p-3">
            <h6 class="mb-1">List Account ADministrator</h6>
            <p class="text-sm">Smk Bhakti Praja Margasari</p>
        </div>
        <div class="card-body p-2">
            <div class="row">
                <div class="row my-3">
                    <div class="col-lg-12 col-md-4 mb-md-0 mb-2">
                        <div class="card">
                            <div class="card-body px-0 pb-2">
                                <div class="table-responsive">
                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Nama</th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                    Status</th>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Username</th>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Aksi</th> <!-- Kolom tambahan untuk aksi -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $data)
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div>
                                                            <img src="{{ asset('storage/'. $data->image) }}"
                                                                class="avatar avatar-sm me-3" alt="xd">
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">{{ $data->nama_lengkap }}</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="avatar-group mt-2">
                                                        <h6 class="mb-0 text-sm">{{ $data->status }}</h6>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <h6 class="mb-0 text-sm">{{ $data->username }}</h6>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <form action="/users/{{ $data->id }}" method="POST">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="btn btn-danger btn-sm" type="submit"
                                                            onclick="return confirm('Apakah kamu yakin?')">
                                                            Hapus
                                                        </button>
                                                    </form>
                                                </td>

                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
