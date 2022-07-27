
<div class="nk-sidebar">         
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label">Dashboard</li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                </a>
                <ul aria-expanded="false">
                    
                    <li><a href="{{route('HomeDirektur')}}">Home</a></li>
                </ul>
            </li>   
            <li class="nav-label">Apps</li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-envelope menu-icon"></i> <span class="nav-text">Surat</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('MasukDirektur')}}">Surat Masuk</a></li>
                    <li><a href="{{route('KeluarDirektur')}}">Surat Keluar</a></li>
                    <li><a href="{{route('DisposisiDirektur')}}">Disposisi</a></li>
                    <li><a href="{{route('MemoDirektur')}}">Memo</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-note menu-icon"></i><span class="nav-text">Data</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('KategoriDirektur')}}">Kategori Surat</a></li>
                    <li><a href="{{route('JenisDirektur')}}">Jenis Surat</a></li>
                    <li><a href="{{route('DirektoratDirektur')}}">Direktorat</a></li>
                    <li><a href="{{route('DevisiDirektur')}}">Devisi</a></li>
                    <li><a href="{{route('DepartemenDirektur')}}">Departemen</a></li>
                    <li><a href="{{route('SeksiDirektur')}}">Seksi</a></li>
                    <li><a href="{{route('LevelDirektur')}}">Level Jabatan</a></li>
                    <li><a href="{{route('PegawaiDirektur')}}">Pegawai</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>