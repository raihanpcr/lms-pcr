@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="form-head d-flex align-items-center mb-sm-4 mb-3">
            <div class="mr-auto">
                <h2 class="text-black font-w600">Mahasiswa</h2>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        Form Edit Data Mahasiswa
                    </div>
                    <div class="card-body">
                        <div class="col-md-6">
                            <form action="{{ route('dosen.update', $dosen->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input class="form-control text-black" type="text" name="name"
                                        value="{{ $dosen->name }}">
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="form-control text-black" type="text" name="username"
                                        value="{{ $dosen->username }}">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control text-black" type="text" name="email"
                                        value="{{ $dosen->email }}">
                                </div>
                                <div class="form-group">
                                    <label>No Handphone</label>
                                    <input class="form-control text-black" type="text" name="nohp"
                                        value="{{ $dosen->phone }}">
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input class="form-control text-black" type="text" name="alamat"
                                        value="{{ $dosen->alamat }}">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal lahir</label>
                                    <input class="form-control text-black" type="date" name="tgl_lahir"
                                        value="{{ $dosen->tgl_lahir }}">
                                </div>
                                <div class="form-group">
                                    <label>Program Studi</label>
                                    <input class="form-control text-black" type="text" name="prodi"
                                        value="{{ $dosen->prodi }}">
                                </div>
                                {{-- <div class="form-group">
                                    <label>Pengguna Aktif</label>
                                    <select class="form-control default-select" name="active" id="sel1">
                                        <option value="1">Aktif</option>
                                        <option value="0">Tidak Aktif</option>
                                    </select>
                                </div> --}}
                                @if ($errors->any())
                                    <div class="mt-4 alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <button type="submit" class="btn bg-primary text-white btn-block">Edit Data
                                    Pengguna</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
