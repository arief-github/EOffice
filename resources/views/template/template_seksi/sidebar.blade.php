
<div class="nk-sidebar">         
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label">Dashboard</li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                </a>
                <ul aria-expanded="false">
                    
                    <li><a href="{{route('HomeSeksi')}}">Home</a></li>
                </ul>
            </li>   
            <li class="nav-label">Apps</li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-envelope menu-icon"></i> <span class="nav-text">Surat</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('MasukSeksi')}}">Surat Masuk</a></li>
                    <li><a href="{{route('KeluarSeksi')}}">Surat Keluar</a></li>
                    <li><a href="{{route('DisposisiSeksi')}}">Disposisi</a></li>
                    <li><a href="{{route('MemoSeksi')}}">Memo</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-note menu-icon"></i><span class="nav-text">Data</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('KategoriSeksi')}}">Kategori Surat</a></li>
                    <li><a href="{{route('JenisSeksi')}}">Jenis Surat</a></li>
                    <li><a href="{{route('DirektoratSeksi')}}">Direktorat</a></li>
                    <li><a href="{{route('DevisiSeksi')}}">Devisi</a></li>
                    <li><a href="{{route('DepartemenSeksi')}}">Departemen</a></li>
                    <li><a href="{{route('SeksiSek')}}">Seksi</a></li>
                    <li><a href="{{route('LevelSeksi')}}">Level Jabatan</a></li>
                    <li><a href="{{route('PegawaiSeksi')}}">Pegawai</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>