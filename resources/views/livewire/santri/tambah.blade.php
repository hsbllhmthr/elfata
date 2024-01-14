<div class="container-fluid py-4">
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <!-- Card header -->
                <div class="card-header">
                    <h5 class="mb-0">Tambah Santri</h5>
                    <p>Silahkan isi data dengan baik dan benar</p>
                </div>
                <div class="col-12 text-end">
                    <a class="btn bg-gradient-dark mb-0 me-4" href="{{ route('santri') }}">Kembali</a>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="store" class='d-flex flex-column align-items-center' enctype="multipart/form-data">

                        <div class="form-group col-12 col-md-6">
                            <label>Cabang</label>
                            <select wire:model.lazy="cabang" class="form-select border border-2 p-2" data-style="select-with-transition" title="" data-size="100">
                                <option value="">Pilih Cabang</option>
                                <option value="Gowa">Gowa</option>
                                <option value="Makassar">Makassar</option>
                                <option value="Takalar">Takalar</option>
                                <option value="Soppeng">Soppeng</option>
                            </select>
                            @error('cabang')
                            <p class='text-danger inputerror'>{{ $message }} </p>
                            @enderror
                        </div>

                        <div class="form-group col-12 col-md-6 mt-3">
                            <label>Sektor</label>
                            <select wire:model.lazy="sektor" class="form-select border border-2 p-2" data-style="select-with-transition" title="" data-size="100">
                                <option value="">Pilih Sektor</option>
                                <option value="kampung Beru">Kampung Beru</option>
                                <option value="Je'netallasa">Je netallasa</option>
                                <option value="Biringkaloro">Biringkaloro</option>
                                <option value="Timpoppo">Timpoppo</option>
                                <option value="Manjalling">Manjalling</option>
                                <option value="Ana' Gowa">Ana Gowa</option>
                                <option value="Gentungang">Gentungang</option>
                                <option value="Moncobalang">Moncobalang</option>
                                <option value="Limbung">Limbung</option>
                                <option value="Kampili">Kampili</option>
                                <option value="Cendrawasih">Cendrawasih</option>
                                <option value="Pa'baeng-baeng">Pabaeng-baeng</option>
                                <option value="Rappocini">Rappocini</option>
                                <option value="Polres Takalar">Polres Takalar</option>
                                <option value="labata">labata</option>
                                <option value="Soppeng">Soppeng</option>
                            </select>
                            @error('sektor')
                            <p class='text-danger inputerror'>{{ $message }} </p>
                            @enderror
                        </div>

                        <div class="form-group col-12 col-md-6 mt-3">
                            <label>NIS</label>
                            <input wire:model.lazy="nis" type="text" class="form-control border border-2 p-2" value='{{ old('nis') }}'>
                            @error('nis')
                            <p class='text-danger inputerror'>{{ $message }} </p>
                            @enderror
                        </div>

                        <div class="form-group col-12 col-md-6 mt-3">
                            <label>Nama Santri</label>
                            <input wire:model.lazy="nama" type="text" class="form-control border border-2 p-2" value='{{ old('nama') }}'>
                            @error('nama')
                            <p class='text-danger inputerror'>{{ $message }} </p>
                            @enderror
                        </div>

                        <div class="form-group col-12 col-md-6 mt-3">
                            <label>Tempat Lahir</label>
                            <input wire:model.lazy="tempatlahir" type="text" class="form-control border border-2 p-2" value='{{ old('tempatlahir') }}'>
                            @error('tempatlahir')
                            <p class='text-danger inputerror'>{{ $message }} </p>
                            @enderror
                        </div>

                        <div class="form-group col-12 col-md-6 mt-3">
                            <label>Tanggal Lahir</label>
                            <input wire:model.lazy="tgllahir" type="date" class="form-control border border-2 p-2" value='{{ old('tgllahir') }}'>
                            @error('tgllahir')
                            <p class='text-danger inputerror'>{{ $message }} </p>
                            @enderror
                        </div>

                        <div class="form-group col-12 col-md-6 mt-3">
                            <label>Jenis Kelamin</label>
                            <select wire:model.lazy="jk" class="form-select border border-2 p-2" data-style="select-with-transition" title="" data-size="100">
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                            @error('jk')
                            <p class='text-danger inputerror'>{{ $message }} </p>
                            @enderror
                        </div>

                        <div class="form-group col-12 col-md-6 mt-3">
                            <label>Jumlah Saudara</label>
                            <input wire:model.lazy="saudara" type="number" class="form-control border border-2 p-2" value='{{ old('saudara') }}'>
                            @error('saudara')
                            <p class='text-danger inputerror'>{{ $message }} </p>
                            @enderror
                        </div>

                        <div class="form-group col-12 col-md-6 mt-3">
                            <label>Anak ke</label>
                            <input wire:model.lazy="anakke" type="number" class="form-control border border-2 p-2" value='{{ old('anakke') }}'>
                            @error('anakke')
                            <p class='text-danger inputerror'>{{ $message }} </p>
                            @enderror
                        </div>

                        <div class="form-group col-12 col-md-6 mt-3">
                            <label>Alamat</label>
                            <input wire:model.lazy="alamat" type="text" class="form-control border border-2 p-2" value='{{ old('alamat') }}'>
                            @error('alamat')
                            <p class='text-danger inputerror'>{{ $message }} </p>
                            @enderror
                        </div>

                        <div class="form-group col-12 col-md-6 mt-3">
                            <label>Umur</label>
                            <input wire:model.lazy="umur" type="number" class="form-control border border-2 p-2" value='{{ old('umur') }}'>
                            @error('umur')
                            <p class='text-danger inputerror'>{{ $message }} </p>
                            @enderror
                        </div>

                        <div class="form-group col-12 col-md-6 mt-3">
                            <label>No HP</label>
                            <input wire:model.lazy="nohp" type="number" class="form-control border border-2 p-2" value='{{ old('nohp') }}'>
                            @error('nohp')
                            <p class='text-danger inputerror'>{{ $message }} </p>
                            @enderror
                        </div>

                        <div class="form-group col-12 col-md-6 mt-3">
                            <label>Asal Sekolah</label>
                            <input wire:model.lazy="asalsekolah" type="text" class="form-control border border-2 p-2" value='{{ old('asalsekolah') }}'>
                            @error('asalsekolah')
                            <p class='text-danger inputerror'>{{ $message }} </p>
                            @enderror
                        </div>

                        <div class="form-group col-12 col-md-6 mt-3">
                            <label>Tanggal Masuk</label>
                            <input wire:model.lazy="tglmasuk" type="date" class="form-control border border-2 p-2" value='{{ old('tglmasuk') }}'>
                            @error('tglmasuk')
                            <p class='text-danger inputerror'>{{ $message }} </p>
                            @enderror
                        </div>

                        <div class="form-group col-12 col-md-6 mt-3">
                            <label>Nama Ayah</label>
                            <input wire:model.lazy="namaayah" type="text" class="form-control border border-2 p-2" value='{{ old('namaayah') }}'>
                            @error('namaayah')
                            <p class='text-danger inputerror'>{{ $message }} </p>
                            @enderror
                        </div>

                        <div class="form-group col-12 col-md-6 mt-3">
                            <label>Nama Ibu</label>
                            <input wire:model.lazy="namaibu" type="text" class="form-control border border-2 p-2" value='{{ old('namaibu') }}'>
                            @error('namaibu')
                            <p class='text-danger inputerror'>{{ $message }} </p>
                            @enderror
                        </div>

                        <div class="form-group col-12 col-md-6 mt-3">
                            <label>Pekerjaan Ayah</label>
                            <input wire:model.lazy="kerjaayah" type="text" class="form-control border border-2 p-2" value='{{ old('kerjaayah') }}'>
                            @error('kerjaayah')
                            <p class='text-danger inputerror'>{{ $message }} </p>
                            @enderror
                        </div>

                        <div class="form-group col-12 col-md-6 mt-3">
                            <label>Pekerjaan Ibu</label>
                            <input wire:model.lazy="kerjaibu" type="text" class="form-control border border-2 p-2" value='{{ old('kerjaibu') }}'>
                            @error('kerjaibu')
                            <p class='text-danger inputerror'>{{ $message }} </p>
                            @enderror
                        </div>

                        <div class="form-group col-12 col-md-6 mt-3">
                            <label>Pendidikan Terakhir Ayah</label>
                            <input wire:model.lazy="pendayah" type="text" class="form-control border border-2 p-2" value='{{ old('pendayah') }}'>
                            @error('pendayah')
                            <p class='text-danger inputerror'>{{ $message }} </p>
                            @enderror
                        </div>

                        <div class="form-group col-12 col-md-6 mt-3">
                            <label>Pendidikan Terakhir Ibu</label>
                            <input wire:model.lazy="pendibu" type="text" class="form-control border border-2 p-2" value='{{ old('pendibu') }}'>
                            @error('pendibu')
                            <p class='text-danger inputerror'>{{ $message }} </p>
                            @enderror
                        </div>

                        <div class="form-group col-12 col-md-6 mt-3">

                            <label for="examplePassword">Password Login Orang Tua</label>
                            <input wire:model.lazy="password" type="password" class="form-control border border-2 p-2" id="examplePassword">
                            @error('password')
                            <p class='text-danger inputerror'>{{ $message }} </p>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-dark mt-3">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@push('js')
<script src="{{ asset('assets') }}/js/plugins/perfect-scrollbar.min.js"></script>
@endpush