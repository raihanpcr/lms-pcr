<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li>
                <a href="{{ route('dashboard') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-user"></i>
                    <span class="nav-text">Pengguna</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('dosen.index') }}">Dosen</a></li>
                    <li><a href="{{ route('mahasiswa.index') }}">Mahasiswa</a></li>

                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-television"></i>
                    <span class="nav-text">Mata Kuliah</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('matakuliah.index') }}">Daftar Mata Kuliah</a></li>
                    <li><a href="./app-calender.html">Kelas Saya</a></li>
                    <li><a href="./app-calender.html">Mata Kuliah</a></li>
                </ul>
            </li>
        </ul>

        <div class="copyright">
            <p><strong>Welly Hospital Admin Dashboard</strong> © 2020 All Rights Reserved</p>
            <p>Made with ♥ by DexignZone</p>
        </div>
    </div>
</div>
