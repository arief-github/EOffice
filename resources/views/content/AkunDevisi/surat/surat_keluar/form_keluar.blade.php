@extends('template.template_direktur.index')

@section('content')

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Surat</a></li>
            <li class="breadcrumb-item"><a href="{{route('surat_keluar')}}">Surat Keluar</a></li>
            <li class="breadcrumb-item active">Insert Surat Keluar</li>
        </ol>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center">Surat Keluar</h4>
                    @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                        {{ $error }} <br/>
                        @endforeach
                    </div>
                    @endif
                    <center>
                    <div class="basic-form">
                        <form action=" " method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group col-md-8">
                                <div class="mb-3">
                                    <input type="text" class="form-control input-default" name="no_suratkeluar" required="required" placeholder="Nomor Surat">
                                </div>
                                <div class="mb-3">
                                    <select class="custom-select mr-sm-2 " name="users_id" required="required" aria-label="Default select example">
                                        <option disabled selected>Pilih Penerima</option>
                                            <option value=" "></option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control input-default" name="perihal_keluar" required="required" placeholder="Perihal">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" style="margin-right: 85%;">Tanggal Keluar</label>
                                    <input type="date" class="form-control input-default" name="tgl_keluar" required="required">
                                </div>
                                <div class="mb-3">
                                    <input type="file" class="form-control-file" name="file_surat" required="required">
                                </div>
                                <div class="mb-3">
                                    <input type="hidden" class="form-control" name="status" required="required" value="Proses">
                                </div>
                                <div class="mb-3">
                                    <span style="float-right">
                                        <input class="btn btn-primary" type="submit" value="Submit" onClick="return confirm('Apakah data yang dimasukkan sudah benar ?')">
                                        <a class="btn btn-success text-white" href="{{route('surat_keluar')}}" role="button">Kembali</a>
                                    </span>
                                </div>
                            </div>
                        </form>
                    </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection