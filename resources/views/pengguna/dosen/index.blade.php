@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="form-head d-flex align-items-center mb-sm-4 mb-3">
            <div class="mr-auto">
                <h2 class="text-black font-w600">Dosen</h2>
            </div>
            <a href="javascript:void(0)" class="btn btn-outline-primary"><i class="las la-cog scale5 mr-3"></i>Customize
                Layout</a>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Daftar Dosen</h5>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-responsive-md">
                                <thead>
                                    <tr>
                                        <th class="width80"><strong>No</strong></th>
                                        <th><strong>NIP</strong></th>
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
                                    @foreach ($dosen as $index => $dsn)
                                        <tr>
                                            <td class="text-black medium">{{ $index + 1 }}</td>
                                            <td class="text-black medium">{{ $dsn->nip_nim }}</td>
                                            <td class="text-black medium">{{ $dsn->name }}</td>
                                            <td class="text-black medium">{{ $dsn->email }}</td>
                                            <td class="text-black medium">{{ $dsn->alamat }}</td>
                                            <td class="text-black medium">{{ $dsn->phone }}</td>
                                            <td class="text-black medium">{{ $dsn->username }}</td>
                                            <td class="text-black medium">{{ $dsn->prodi }}</td>
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
                                                            href="{{ route('dosen.edit', $dsn->id) }}">Edit</a>
                                                        <a class="dropdown-item"
                                                            href="{{ route('dosen.show', $dsn->id) }}">Detail</a>
                                                        <form action="{{ route('dosen.destroy', $dsn->id) }}"
                                                            method="POST"
                                                            onsubmit=" return confirm('Apakah yakin menghapus data {{ $dsn->name }} ini ?');"
                                                            style="display: inline">

                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="dropdown-item">Delete</button>
                                                        </form>
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
                            <p class="card-text text-dark d-inline">LMS PCR - Dosen</p>
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
