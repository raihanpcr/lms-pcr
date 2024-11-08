@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="form-head d-flex align-items-center mb-sm-4 mb-3">
            <div class="mr-auto">
                <h2 class="text-black font-w600">Mata Kuliah</h2>
                <p class="mb-0">Hospital Admin Dashboard Template</p>
            </div>
            <a href="javascript:void(0)" class="btn btn-outline-primary"><i class="las la-cog scale5 mr-3"></i>Mata Kuliah
                Baru</a>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Daftar Mata Kuliah</h5>
                    </div>
                    <div class="card-body">

                        <div class="basic-form">
                            <form action="{{ route('matakuliah.store') }}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Mata Kuliah</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="name" class="form-control"
                                            placeholder="Nama Mata Kuliah">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Pengajar</label>
                                    <div class="col-sm-6">
                                        <select class="form-control default-select" name="pengajar" id="sel1">
                                            <option value="">-- Pilih Dosen --</option>
                                            @foreach ($dosen as $dsn)
                                                <option value="{{ $dsn->id }}">{{ $dsn->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Tanggal Mulai</label>
                                    <div class="col-sm-6">
                                        <input type="date" name="tgl_mulai" class="form-control"
                                            placeholder="Tanggal Mulai">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Tanggal Berakhir</label>
                                    <div class="col-sm-6">
                                        <input type="date" name="tgl_akhir" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Deskripsi</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="desc" class="form-control">
                                    </div>
                                </div>
                                @if ($errors->any())
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <div class="col-sm-5 alert alert-danger">
                                                <li>{{ $error }}</li>
                                            </div>
                                        @endforeach
                                    </ul>
                                @endif
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Buat</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
