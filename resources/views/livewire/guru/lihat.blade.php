<div class="container-fluid my-3 py-3">
    <div class="row">
        <div class="col-md-10 col-lg-8 col-sm-10 mx-auto">
            <div class="card my-sm-5">
                <div class="card-header text-center">
                    <div class="row justify-content-between">
                        <div class="col-md-12 text-center">
                            <img class="mb-2 mx-auto" style="width:100%;" src="{{ asset('assets') }}/img/kop-rapor.png">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table text-right table-sm">                                                
                                    <tbody>
                                        <tr>
                                            <td class="text-start">No. Stambuk</td>
                                            <td class="ps-4">: {{ $guru->stambuk }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">Nama Lengkap</td>
                                            <td class="ps-4">: {{ $guru->nama }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">Cabang</td>
                                            <td class="ps-4">: {{ $guru->cabang }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">Sektor</td>
                                            <td class="ps-4">: {{ $guru->sektor }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">Jenis Kelamin</td>
                                            <td class="ps-4">: {{ $guru->jk }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">Tempat, Tanggal Lahir</td>
                                            <td class="ps-4">: {{ $guru->tempatlahir }}, {{ $guru->tgllahir }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">Status Pernikahan</td>
                                            <td class="ps-4">: {{ $guru->statusnikah }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">Jumlah Saudara</td>
                                            <td class="ps-4">: {{ $guru->saudara }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">Anak Ke Berapa</td>
                                            <td class="ps-4">: {{ $guru->anakke }}</td>
                                        </tr>                                        
                                        <tr>
                                            <td class="text-start">Nama Ayah</td>
                                            <td class="ps-4">: {{ $guru->namaayah }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">Nama Ibu</td>
                                            <td class="ps-4">: {{ $guru->namaibu }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">Pekerjaan Ayah</td>
                                            <td class="ps-4">: {{ $guru->kerjaayah }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">Pekerjaan Ibu</td>
                                            <td class="ps-4">: {{ $guru->kerjaibu }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">Tanggal Tanda Tangan Kontrak</td>
                                            <td class="ps-4">: {{ $guru->tanggalkontrak }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">Alamat Asal</td>
                                            <td class="ps-4">: {{ $guru->asal }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">Alamat Tempat Tinggal</td>
                                            <td class="ps-4">: {{ $guru->alamattinggal }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">Email</td>
                                            <td class="ps-4">: {{ $guru->email }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">Nomor Handphone</td>
                                            <td class="ps-4">: {{ $guru->nohp }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">TK</td>
                                            <td class="ps-4">: {{ $guru->tk }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">SD</td>
                                            <td class="ps-4">: {{ $guru->sd }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">SMP</td>
                                            <td class="ps-4">: {{ $guru->smp }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">SMA</td>
                                            <td class="ps-4">: {{ $guru->sma }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">Universitas</td>
                                            <td class="ps-4">: {{ $guru->universitas }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">Jurusan di Universitas</td>
                                            <td class="ps-4">: {{ $guru->jurusan }}</td>
                                        </tr>                                        
                                    </tbody>                                    
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">                                    
                        <div class="col-lg-12 text-center">
                            <button type="button" class="btn btn-outline-info btn-lg btn-icon" id="cetak">
                                <span class="btn-inner--icon"><i class="material-icons">print</i></span>
                                <span class="btn-inner--text">Cetak</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('js')
<script src="{{ asset('assets') }}/js/plugins/perfect-scrollbar.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('assets') }}/js/plugins/printhis/printThis.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#cetak").click(function(){
            $(".card-header, .card-body").printThis();
        });
    });
</script>
@endpush