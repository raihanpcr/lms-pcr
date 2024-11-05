<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Registrasi - LMS PCR</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link href="{{ asset('assets/template/css/style.css') }}" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">

                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4 text-white">Registrasi Akun</h4>
                                    <form action="{{ route('user.register') }}" method="POST">
                                        @csrf
                                        {{-- nama lengkap  --}}
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Nama Lengkap</strong></label>
                                            <input type="text" name="name" class="form-control text-black"
                                                placeholder="Nama Lengkap">
                                        </div>

                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Tanggal Lahir</strong></label>
                                            <input type="date" name="tgl_lahir" class="form-control text-black">
                                        </div>

                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>No Handphone</strong></label>
                                            <input type="number" name="nohp" class="form-control text-black"
                                                placeholder="No Handphone">
                                        </div>

                                        {{-- email  --}}
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Email</strong></label>
                                            <input type="email" name="email" class="form-control text-black"
                                                placeholder="nama@exmaple.com">
                                        </div>

                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Program Studi</strong></label>
                                            <select class="form-control text-black" name="prodi">
                                                <option value="" disabled selected> -- Pilih -- </option>
                                                @foreach ($programStudi as $prodi)
                                                    <option value="{{ $prodi->name }}" class="text-black">
                                                        {{ $prodi->tingkat }} - {{ $prodi->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        {{-- role  --}}
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Mendaftar Sebagai</strong></label>
                                            <select class="form-control text-black" name="role">
                                                <option value="" disabled selected> -- Pilih -- </option>
                                                <option value="dosen" class="text-black">Dosen</option>
                                                <option value="mahasiswa" class="text-black">Mahasiswa</option>
                                            </select>
                                        </div>

                                        {{-- password --}}
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Password</strong></label>
                                            <input type="password" name="password" class="form-control text-black"
                                                placeholder="Password">
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit"
                                                class="btn bg-white text-primary btn-block">Daftar</button>
                                        </div>
                                        @if ($errors->any())
                                            <div class="mt-4 alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                    </form>

                                    <div class="new-account mt-3">
                                        <p class="text-white">Sudah Mempunyai Akun <a class="text-white"
                                                href="{{ route('login') }}">Login</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Required vendors -->
    <script src="{{ asset('assets/template/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('assets/template/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/template/js/custom.min.js') }}"></script>
    <script src="{{ asset('assets/template/js/deznav-init.js') }}"></script>

</body>

</html>
