@extends('template.template_direktur.index')

@section('content')

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Data</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Jenis Surat</a></li>
        </ol>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4>Jenis Surat</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Kategori</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Kode</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 0; ?>

                                @foreach($jenis as $j)
                                
                                <?php 
                                $no++;
                                ?>
                                
                                <tr class="text-black">
                                    <td class="text-center">{{ $no }}.</td>
                                    <td>{{ $j->kategori->nama_kategori }}</td>
                                    <td>{{ $j->nama_jenis }}</td>
                                    <td class="text-center">{{ $j->kode_jenis }}</td>
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