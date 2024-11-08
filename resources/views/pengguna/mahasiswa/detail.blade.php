@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="form-head d-flex align-items-center mb-sm-4 mb-3">
            <div class="mr-auto">
                <h2 class="text-black font-w600">Mahasiswa</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title"> {{ $mahasiswa->name }}</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label text-black" for="val-username">Nama
                                    </label>
                                    <div class="col-lg-6">
                                        {{ $mahasiswa->name }}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label text-black" for="val-username">NIP
                                    </label>
                                    <div class="col-lg-6">
                                        {{ $mahasiswa->nip_nim }}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label text-black" for="val-username">Email
                                    </label>
                                    <div class="col-lg-6">
                                        {{ $mahasiswa->email }}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label text-black" for="val-username">No hanphone
                                    </label>
                                    <div class="col-lg-6">
                                        {{ $mahasiswa->phone }}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label text-black" for="val-username">Alamat
                                    </label>
                                    <div class="col-lg-6">
                                        {{ $mahasiswa->alamat }}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label text-black" for="val-username">Username
                                    </label>
                                    <div class="col-lg-6">
                                        {{ $mahasiswa->username }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-sm-flex justify-content-between align-items-center">
                            <div class="card-footer-link mb-4 mb-sm-0">
                                <p class="card-text text-dark d-inline">LMS PCR - Detail Mahasiswa</p>
                            </div>


                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endsection
