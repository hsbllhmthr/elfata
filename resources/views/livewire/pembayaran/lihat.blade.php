
        <div class="container-fluid mt-4">
            <div class="row align-items-center">
               
            </div>
        </div>
        <div class="container-fluid my-3 py-3">
            <div class="row">
                <div class="col-md-10 col-lg-8 col-sm-10 mx-auto">
                    <form class="" action="" method="post">
                        <div class="card my-sm-5">
                            <div class="card-header text-center">
                                <div class="row justify-content-between">
                                    <div class="col-md-12 text-start">
                                        <img class="mb-2 w-10 p-2" src="{{ asset('assets') }}/img/logo-ct-dark.png"
                                            alt="Logo">
                                        <h6>
                                           Tahfidz Children El-Fata
                                        </h6>
                                        <p class="d-block text-secondary">Jalan Galesong Kecamatan Bajeng Kabupaten Gowa</p>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="table-responsive">
                                            <table class="table text-right">                                                
                                                <tbody>
                                                    <tr>
                                                        <td class="text-start">Sektor</td>
                                                        <td class="ps-4">: {{ $guru->stambuk }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-start">Nis</td>
                                                        <td class="ps-4">: {{ $guru->nis }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-start">Nama</td>
                                                        <td class="ps-4">: {{ $guru->nama }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-start">Tempat, Tanggal Lahir</td>
                                                        <td class="ps-4">: {{ $guru->tempatlahir }}, {{ $guru->tgllahir }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-start">Jenis Kelamin</td>
                                                        <td class="ps-4">: {{ $guru->jk }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-start">Jumlah Saudara</td>
                                                        <td class="ps-4">: {{ $guru->nama }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-start">Anak ke</td>
                                                        <td class="ps-4">: {{ $guru->nama }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-start">Alamat</td>
                                                        <td class="ps-4">: {{ $guru->alamat }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-start">Umur</td>
                                                        <td class="ps-4">: {{ $guru->umur }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-start">Nomor HP</td>
                                                        <td class="ps-4">: {{ $guru->nama }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-start">Asal Sekolah</td>
                                                        <td class="ps-4">: {{ $guru->asalsekolah }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-start">Tanggal Masuk</td>
                                                        <td class="ps-4">: {{ $guru->tglmasuk }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-start">Nama Ayan</td>
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
                                                        <td class="text-start">Pendidikan Terakhir Ayah</td>
                                                        <td class="ps-4">: {{ $guru->pendayah }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-start">Pendidikan Terakhir Ibu</td>
                                                        <td class="ps-4">: {{ $guru->pendibu }}</td>
                                                    </tr>
                                                </tbody>
                                                
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">                                    
                                    <div class="col-lg-12 text-md-end mt-md-0 mt-3">
                                        <button class="btn bg-gradient-info mb-0" onClick="window.print()"
                                            type="button" name="button">Print</button>
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
    @endpush
