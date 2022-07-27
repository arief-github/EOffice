@extends('template.template_devisi.index')

@section('content')

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Data</li>
            <li class="breadcrumb-item active">Pegawai</li>
        </ol>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4>Pegawai</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">NIK</th>
                                    <th class="text-center">No KTP</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">NPWP</th>
                                    <th class="text-center">Level Jabatan</th>
                                    <th class="text-center">Direktorat</th>
                                    <th class="text-center">Devisi</th>
                                    <th class="text-center">Departemen</th>
                                    <th class="text-center">Seksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 0; ?>

                                @foreach($pegawai as $p)

                                <?php 
                                $no++;
                                ?>
                                <tr class="text-black">
                                    <td class="text-center">{{ $no }}.</td>
                                    <td>{{$p->nik}}</td>
                                    <td>{{$p->no_ktp}}</td>
                                    <td>{{$p->nama_pegawai}}</td>
                                    <td>{{$p->npwp}}</td>
                                    <td>{{$p->leveljabatan->level_jabatan}}</td>
                                    <td>{{$p->direktorat->nama_direktorat}}</td>
                                    <td>{{$p->devisi->nama_devisi}}</td>
                                    <td>{{$p->departemen->nama_departemen}}</td>
                                    <td>{{$p->seksi->nama_seksi}}</td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 