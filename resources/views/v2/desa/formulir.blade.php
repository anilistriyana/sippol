@extends('layout.v2.desa')
@section('title','Formulir')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{route('desa-home')}}">Beranda</a></li>
    <li class="breadcrumb-item active" aria-current="page">Formulir</li>
@endsection
@section('content')
<div class="row">
        @foreach ($pelayanan as $pelayanan)
        <div class="col-sm-12 col-lg-3">
                <div class="card bg-light">
                    <div class="card-body">
                        <h5 class="card-title text-center">{{$pelayanan->pelayanan}}</h5>
                        <table class="table no-border mini-table m-t-20">
                            <tbody>
                                <tr>
                                    <td class="text-muted">Total</td>
                                    <td class="font-medium">{{count($pemohon->where('pelayanan_id',$pelayanan->id))}}</td>
                                </tr>
                                <tr>
                                    <td class="text-muted">Siap Dicetak</td>
                                    <td class="font-medium">
                                        {{count($pemohon->where('pelayanan_id',$pelayanan->id)->where('status','Setuju'))}}</td>
                                </tr>
                                <tr>
                                    <td class="text-muted">Sudah ada No SK</td>
                                    <td class="font-medium">
                                        {{count($pemohon->where('pelayanan_id',$pelayanan->id)->where('status','Sudah ada nomor SK'))}}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-muted">Belum ada No SK</td>
                                    <td class="font-medium">
                                        {{count($pemohon->where('pelayanan_id',$pelayanan->id)->where('status','Belum'))}}</td>
                                </tr>
                                <tr>
                                    <td class="text-muted">Revisi Berkas</td>
                                    <td class="font-medium">
                                        {{count($pemohon->where('pelayanan_id',$pelayanan->id)->where('status','Revisi'))}}</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="text-center"><a href="#{{$pelayanan->slug}}" data-toggle="modal" class="btn btn-info">Informasi &nbsp;<i class="ti-info-alt"></i></a></p>
                        <p class="text-center"><a href="{{route('formPelayanan-desa',[$pelayanan->slug])}}" class="btn btn-success">Formulir <i class="ti-pencil"></i></a></p>
                        <p align="center"><a class="btn btn-warning" href="{{url('desa/v2/data-pemohon/'.$pelayanan->slug)}}">Data Pemohon 
                        <i class="ti-file"></i></a></p>
                    </div>
                </div>
            </div>
            <div id="{{$pelayanan->slug}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="modal-title">Informasi {{$pelayanan->pelayanan}}</h4><br>
                                {!!$pelayanan->keterangan!!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection