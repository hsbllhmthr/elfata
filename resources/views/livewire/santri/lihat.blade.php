<div class="container-fluid my-3 py-3">
    <div class="row">
        <div class="col-md-10 col-lg-8 col-sm-10 mx-auto">
            <form class="" action="index.html" method="post">
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
                                                <td class="text-start">Cabang</td>
                                                <td class="ps-4">: {{ $santri->cabang }}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-start">Sektor</td>
                                                <td class="ps-4">: {{ $santri->sektor }}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-start">Nis</td>
                                                <td class="ps-4">: {{ $santri->nis }}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-start">Nama</td>
                                                <td class="ps-4">: {{ $santri->nama }}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-start">Tempat, Tanggal Lahir</td>
                                                <td class="ps-4">: {{ $santri->tempatlahir }}, {{ $santri->tgllahir }}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-start">Jenis Kelamin</td>
                                                <td class="ps-4">: {{ $santri->jk }}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-start">Jumlah Saudara</td>
                                                <td class="ps-4">: {{ $santri->nama }}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-start">Anak ke</td>
                                                <td class="ps-4">: {{ $santri->nama }}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-start">Alamat</td>
                                                <td class="ps-4">: {{ $santri->alamat }}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-start">Umur</td>
                                                <td class="ps-4">: {{ $santri->umur }}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-start">Nomor HP</td>
                                                <td class="ps-4">: {{ $santri->nama }}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-start">Asal Sekolah</td>
                                                <td class="ps-4">: {{ $santri->asalsekolah }}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-start">Tanggal Masuk</td>
                                                <td class="ps-4">: {{ $santri->tglmasuk }}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-start">Nama Ayan</td>
                                                <td class="ps-4">: {{ $santri->namaayah }}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-start">Nama Ibu</td>
                                                <td class="ps-4">: {{ $santri->namaibu }}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-start">Pekerjaan Ayah</td>
                                                <td class="ps-4">: {{ $santri->kerjaayah }}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-start">Pekerjaan Ibu</td>
                                                <td class="ps-4">: {{ $santri->kerjaibu }}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-start">Pendidikan Terakhir Ayah</td>
                                                <td class="ps-4">: {{ $santri->pendayah }}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-start">Pendidikan Terakhir Ibu</td>
                                                <td class="ps-4">: {{ $santri->pendibu }}</td>
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
            </form>
        </div>
    </div>
</div>
@push('js')
<script src="{{ asset('assets') }}/js/plugins/perfect-scrollbar.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('assets') }}/js/plugins/printhis/printThis.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#cetak").click(function() {
            $(".card-header, .card-body").printThis();
        });
    });
</script>
@endpush