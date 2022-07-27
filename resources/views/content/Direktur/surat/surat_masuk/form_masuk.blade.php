@extends('template.template_direktur.index')

@section('content')

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Surat</li>
            <li class="breadcrumb-item"><a href="{{route('MasukDirektur')}}">Surat Masuk</a></li>
            <li class="breadcrumb-item active">Insert Surat Masuk</li>
        </ol>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center">Surat Masuk</h4>
                    @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                        {{ $error }} <br/>
                        @endforeach
                    </div>
                    @endif
                    <div class="basic-form">
                            <form action="" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label>Jenis Surat</label>
                                        <select class="custom-select mr-sm-2" name="jenis_id" id="jenis_id" required="required" aria-label="Default select example">
                                        <option disabled selected value>Pilih Jenis Surat</option>

                                            @foreach($jenis as $j)
                                                <option value="{{ $j->id }}">{{ $j->jenis_surat }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>Nama Pengirim</label>
                                        <input type="text" class="form-control input-default" name="pengirim" placeholder="Nama Pengirim" required="required">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label>Perihal</label>
                                        <input type="text" class="form-control input-default" name="perihal" placeholder="Perihal" required="required">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>Nomor Surat</label>
                                        <input type="text" class="form-control input-default" name="perihal" placeholder="Nomor Surat" required="required">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label>Tanggal Surat</label>
                                        <input type="date" class="form-control input-default" name="tgl_surat" placeholder="Tanggal Surat" required="required">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>Tanggal Masuk</label>
                                        <input type="date" class="form-control input-default" name="tgl_masuk" placeholder="Tanggal Masuk" required="required">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label>Tujuan</label>
                                        <input type="text" class="form-control input-default" name="perihal" placeholder="Tujuan" required="required">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label>Pegawai (CC)</label>
                                        <input type="text" class="form-control input-default" name="perihal" placeholder="Nama Pegawai" required="required">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <input type="file" class="form-control-file" name="file_surat" required="required">
                                    </div>
                                </div>
                                    <div class="mb-3" style="float:right;">
                                        <span>
                                            <input class="btn btn-primary" type="submit" value="Submit" onClick="return confirm('Apakah data yang dimasukkan sudah benar ?')">
                                            <a class="btn btn-success text-white" href="{{route('surat_masuk')}}" role="button">Kembali</a>
                                        </span>
                                    </div>
                                </div>
                            </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection