@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="form-head d-flex align-items-center mb-sm-4 mb-3">
            <div class="mr-auto">
                <h2 class="text-black font-w600">Mata Kuliah</h2>
                <p class="mb-0">Hospital Admin Dashboard Template</p>
            </div>
            <a href="{{ route('matakuliah.create') }}" class="btn btn-outline-primary"><i
                    class="las la-cog scale5 mr-3"></i>Mata Kuliah Baru</a>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Daftar Mata Kuliah</h5>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-responsive-md">
                                <thead>
                                    <tr>
                                        <th class="width80"><strong>No</strong></th>
                                        <th><strong>Kode</strong></th>
                                        <th><strong>Mata Kuliah</strong></th>
                                        <th><strong>Tanggal Mulai</strong></th>
                                        <th><strong>Tanggal Berakhir</strong></th>
                                        <th><strong>Deskripsi</strong></th>
                                        <th><strong>Pengajar</strong></th>
                                        <th><strong>Action</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($matakuliah as $index => $matkul)
                                        <tr>
                                            <td><strong>{{ $index + 1 }}</strong></td>
                                            <td>{{ $matkul->kode }}</td>
                                            <td>{{ $matkul->name }}</td>
                                            <td>{{ $matkul->tgl_mulai }}</td>
                                            <td>{{ $matkul->tgl_akhir }}</td>
                                            <td>{{ $matkul->desc }}</td>
                                            <td>{{ $matkul->user->name }}</td>

                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-success light sharp"
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
                                                            href="{{ route('matakuliah.edit', $matkul->id) }}">Edit</a>
                                                        <form action="{{ route('matakuliah.destroy', $matkul->id) }}"
                                                            method="POST"
                                                            onsubmit=" return confirm('Apakah yakin menghapus data {{ $matkul->name }} ini ?');"
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
                            <p class="card-text text-dark d-inline">Last updated 3 mins ago</p>
                        </div>

                        <a href="javascript:void()" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
