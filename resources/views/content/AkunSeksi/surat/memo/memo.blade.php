@extends('template.template_seksi.index')

@section('content')

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Surat</li>
            <li class="breadcrumb-item active">Memo</li>
        </ol>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4>Memo</h4>
                        <a class="btn btn-primary btn-sm" href="{{route('form_memo')}}" role="button">+ Memo</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Nomor Surat</th>
                                    <th class="text-center">Nomor Desposisi</th>
                                    <th class="text-center">Perihal</th>
                                    <th class="text-center">Memo</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
            
                                <tr class="text-black">
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-center">
                                        <span style="float right">     
                                            <a class="btn btn-warning btn-sm" href="" type="button"><img src="{{asset('asset/edit1.png')}}"/></a>
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