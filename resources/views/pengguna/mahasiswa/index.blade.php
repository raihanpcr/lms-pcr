@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="form-head d-flex align-items-center mb-sm-4 mb-3">
            <div class="mr-auto">
                <h2 class="text-black font-w600">Mahasiswa</h2>
            </div>
            <a href="javascript:void(0)" class="btn btn-outline-primary"><i class="las la-cog scale5 mr-3"></i>Customize
                Layout</a>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Daftar Mahasiswa</h5>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-responsive-md">
                                <thead>
                                    <tr>
                                        <th class="width80"><strong>No</strong></th>
                                        <th><strong>NIM</strong></th>
                                        <th><strong>Nama</strong></th>
                                        <th><strong>Email</strong></th>
                                        <th><strong>Alamat</strong></th>
                                        <th><strong>No Handphone</strong></th>
                                        <th><strong>Username</strong></th>
                                        <th><strong>Program Studi</strong></th>
                                        <th><strong>Action</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($mahasiswa as $index => $mhs)
                                        <tr>
                                            <td class="text-black medium">{{ $index + 1 }}</td>
                                            <td class="text-black medium">{{ $mhs->nip_nim }}</td>
                                            <td class="text-black medium">{{ $mhs->name }}</td>
                                            <td class="text-black medium">{{ $mhs->email }}</td>
                                            <td class="text-black medium">{{ $mhs->alamat }}</td>
                                            <td class="text-black medium">{{ $mhs->phone }}</td>
                                            <td class="text-black medium">{{ $mhs->username }}</td>
                                            <td class="text-black medium">{{ $mhs->prodi }}</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-primary light sharp"
                                                        data-toggle="dropdown">
                                                        <svg width="20px" height="20px" viewBox="0 0 24 24"
                                                            version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24" />
                                                                <circle fill="#000000" cx="5" cy="12"
                                                                    r="2" />
                                                                <circle fill="#000000" cx="12" cy="12"
                                                                    r="2" />
                                                                <circle fill="#000000" cx="19" cy="12"
                                                                    r="2" />
                                                            </g>
                                                        </svg>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item"
                                                            href="{{ route('mahasiswa.edit', $mhs->id) }}">Edit</a>
                                                        <a class="dropdown-item"
                                                            href="{{ route('mahasiswa.show', $mhs->id) }}">Detail</a>
                                                        <form action="{{ route('mahasiswa.destroy', $mhs->id) }}"
                                                            method="POST"
                                                            onsubmit=" return confirm('Apakah yakin menghapus data mahasiswa ini ?');"
                                                            style="display: inline">

                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="dropdown-item">Delete</button>
                                                        </form>
                                                        {{-- <a class="dropdown-item" href="#">Delete</a> --}}
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer d-sm-flex justify-content-between align-items-center">
                        <div class="card-footer-link mb-4 mb-sm-0">
                            <p class="card-text text-dark d-inline">LMS PCR - Mahasiswa</p>
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
