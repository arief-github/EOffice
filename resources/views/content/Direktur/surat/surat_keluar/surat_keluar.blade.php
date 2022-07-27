@extends('template.template_direktur.index')

@section('content')

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Surat</li>
            <li class="breadcrumb-item active">Surat Keluar</li>
        </ol>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4>Surat Keluar</h4>
                        <a class="btn btn-primary btn-sm" href="{{route('form_keluar')}}" role="button">+ Surat</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Nomor Surat</th>
                                    <th class="text-center">Penerima</th>
                                    <th class="text-center">Perihal</th>
                                    <th class="text-center">Tanggal Keluar</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
            
                                
                                <tr class="text-black">
                                    <td class="text-center"></td>
                                    <td></td>
                                    <td></td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-center"><span class="badge px-2"></span></td>
                                    <td class="text-center">
                                        <span style="float right">
                                            @if('Sukses')
                                                <button type="button" class="btn btn-secondary btn-sm" disabled><img src="{{asset('asset/edit1.png')}}"/></button>
                                            @else      
                                                <a class="btn btn-warning btn-sm" href="edit/{{$k->id}}" type="button"><img src="{{asset('asset/edit1.png')}}"/></a>
                                            @endif
                                            <a class="btn btn-success btn-sm text-white" href="" role="button"><img src="{{asset('asset/download.png')}}"/></a>
                                            <a class="btn btn-danger btn-sm text-white" href="" role="button"><img src="{{asset('asset/delete.png')}}"/></a>
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                           
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection