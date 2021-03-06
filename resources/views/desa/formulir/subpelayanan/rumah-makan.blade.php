<div class="box box-solid box-warning">
    <div class="box-header">
        <h3 class="box-title">Formulir</h3>
    </div>
    <div class="box-body" style="height: 670px;overflow-y: scroll;">
        <form action="{{route('formulir_rm')}}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
                <label for="" class="label-control">Nama Pemohon</label>
                <input type="text" class="form-control" value="{{old('nama_pemohon')}}" placeholder="Nama Pemohon" name="nama_pemohon">
                @if($errors->get('nama_pemohon'))
                    @foreach ($errors->get('nama_pemohon') as $pesan)
                        <li><label for="" style="color:#f56954">{{$pesan}}</label></li>
                    @endforeach
                @endif
            </div>
            <div class="form-group">
                <label for="" class="label-control">NIK</label>
                <input type="text" class="form-control" value="{{old('nik')}}" placeholder="NIK" name="nik">
                @if($errors->get('nik'))
                    @foreach ($errors->get('nik') as $pesan)
                        <li><label for="" style="color:#f56954">{{$pesan}}</label></li>
                    @endforeach
                @endif
            </div>
            <div class="form-group">
                <label for="" class="label-control">No. Telepon</label>
                <input type="text" class="form-control" value="{{old('telepon')}}" placeholder="Nomor Telepon" name="telepon">
                @if($errors->get('telepon'))
                    @foreach ($errors->get('telepon') as $pesan)
                        <li><label for="" style="color:#f56954">{{$pesan}}</label></li>
                    @endforeach
                @endif
            </div>
            <div class="form-group">
                <label for="" class="label-control">Pekerjaan</label>
                <input type="text" class="form-control" value="{{old('pekerjaan')}}" name="pekerjaan">
                @if($errors->get('pekerjaan'))
                    @foreach ($errors->get('pekerjaan') as $pesan)
                        <li><label for="" style="color:#f56954">{{$pesan}}</label></li>
                    @endforeach
                @endif
            </div>
            <label for="" class="label-control">Alamat</label>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="" class="label-control">RT</label>
                        <input type="text" class="form-control" value="{{old('rt')}}" placeholder="RT" name="rt">
                        @if($errors->get('rt'))
                            @foreach ($errors->get('rt') as $pesan)
                                <li><label for="" style="color:#f56954">{{$pesan}}</label></li>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="" class="label-control">RW</label>
                        <input type="text" class="form-control" value="{{old('rw')}}" placeholder="RW" name="rw">
                        @if($errors->get('rw'))
                            @foreach ($errors->get('rw') as $pesan)
                                <li><label for="" style="color:#f56954">{{$pesan}}</label></li>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="" class="label-control">Jalan / Dusun</label>
                        <input type="text" class="form-control" value="{{old('jalan')}}" placeholder="Jalan / Dusun " name="jalan">
                        @if($errors->get('jalan'))
                            @foreach ($errors->get('jalan') as $pesan)
                                <li><label for="" style="color:#f56954">{{$pesan}}</label></li>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="" class="label-control">{{$daerah->jenis_daerah}}</label>
                        <input type="text" class="form-control" readonly value="{{$daerah->nama_daerah}}" name="daerah">
                        <input type="hidden" name="id_daerah" value="{{$daerah->id}}">
                         <input type="hidden" name="pelayanan_id" value="{{$pelayanan->id}}">
                         <input type="hidden" name="sublayanan_id" value="{{$sub->id}}">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="" class="label-control">Jenis Permohonan</label>
                <select name="jenis" value="{{old('jenis')}}" class="form-control" id="jenis_permohonan">
                    <option value="">Pilih Jenis Permohonan</option>
                    <option value="new">Permohonan Baru</option>
                    <option value="du">Daftar Ulang</option>
                    <option value="bn">Balik Nama</option>
                </select>
                @if($errors->get('jenis'))
                    @foreach ($errors->get('jenis') as $pesan)
                        <li><label for="" style="color:#f56954">{{$pesan}}</label></li>
                    @endforeach
                @endif
            </div>
            <div class="form-group" id="balik_nama">
                <label for="" class="label-control">Nama Pemilik Usaha Lama</label>
                <input type="text" name="nama_usaha_baru"  value="{{old('nama_usaha_baru')}}" class="form-control">
                @if($errors->get('nama_usaha_baru'))
                    @foreach ($errors->get('nama_usaha_baru') as $pesan)
                        <li><label for="" style="color:#f56954">{{$pesan}}</label></li>
                    @endforeach
                @endif
            </div>
            <div class="form-group">
                <label for="" class="label-control">Nama Usaha</label>
                <input type="text" name="nama_usaha" value="{{old('nama_usaha')}}" class="form-control">
                @if($errors->get('nama_usaha'))
                    @foreach ($errors->get('nama_usaha') as $pesan)
                        <li><label for="" style="color:#f56954">{{$pesan}}</label></li>
                    @endforeach
                @endif
            </div>
            <div class="form-group">
                <label for="" class="label-control">Alamat Usaha</label>
                <input type="text" name="alamat_usaha" value="{{old('alamat_usaha')}}" class="form-control">
                @if($errors->get('alamat_usaha'))
                    @foreach ($errors->get('alamat_usaha') as $pesan)
                        <li><label for="" style="color:#f56954">{{$pesan}}</label></li>
                    @endforeach
                @endif
            </div>
            <div class="form-group">
                <label for="" class="label-control">Scan KTP</label>
                <input type="file" class="form-control" name="ktp">
                @if($errors->get('ktp'))
                    @foreach ($errors->get('ktp') as $pesan)
                        <li><label for="" style="color:#f56954">{{$pesan}}</label></li>
                    @endforeach
                @endif
            </div>
            <div class="form-group">
                <label for="" class="label-control">Scan pengantar dari {{$daerah->jenis_daerah}} terkait lokasi usaha</label>
                <input type="file" class="form-control" name="scan_pengantar">
                @if($errors->get('scan_pengantar'))
                    @foreach ($errors->get('scan_pengantar') as $pesan)
                        <li><label for="" style="color:#f56954">{{$pesan}}</label></li>
                    @endforeach
                @endif
            </div>
            <div class="form-group">
                <input type="submit" value="Proses" class="form-control btn btn-primary">
            </div>
        </form>
    </div>
</div>
@section('js')
<script>
    $(document).ready(function(){
        $("#balik_nama").hide('true');
        $('#jenis_permohonan').on('change',function(){
        var optionText = $(this).val();
        if(optionText == "bn"){
            $("#balik_nama").show('true');
        }else{
            $("#balik_nama").hide('true');
        }
    });
    });
</script>
@endsection