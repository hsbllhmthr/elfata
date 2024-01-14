<div class="container-fluid py-4">
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <!-- Card header -->
                <div class="card-header">
                    <h5 class="mb-0">Ubah Santri</h5>
                    <p>Silahkan isi data dengan baik dan benar</p>
                </div>
                <div class="col-12 text-end">
                    <a class="btn bg-gradient-dark mb-0 me-4" href="{{ route('santri') }}">Kembali</a>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="update" class='d-flex flex-column align-items-center' enctype="multipart/form-data">

                        <div class="form-group col-12 col-md-6">
                            <label>Cabang</label>
                            <select wire:model.lazy="santri.cabang" class="form-select border border-2 p-2" data-style="select-with-transition" title="" data-size="100">
                                <option value="">Pilih Cabang</option>
                                <option value="Gowa" {{ $santri->cabang === "Gowa" ? 'selected' : ''}}>Gowa</option>
                                <option value="Makassar" {{ $santri->cabang === "Makassar" ? 'selected' : ''}}>Makassar</option>
                                <option value="Takalar" {{ $santri->cabang === "Takalar" ? 'selected' : ''}}>Takalar</option>
                                <option value="Soppeng" {{ $santri->cabang === "Soppeng" ? 'selected' : ''}}>Soppeng</option>
                            </select>
                            @error('cabang')
                            <p class='text-danger inputerror'>{{ $message }} </p>
                            @enderror
                        </div>

                        <div class="form-group col-12 col-md-6 mt-3">
                            <label>Sektor</label>
                            <select wire:model.lazy="santri.sektor" class="form-select border border-2 p-2" data-style="select-with-transition" title="" data-size="100">
                                <option value="kampung Beru" {{ $santri->sektor === "Kampung Beru" ? 'selected' : ''}}>Kampung Beru</option>
                                <option value="Je'netallasa" {{ $santri->sektor === "Je netallasa" ? 'selected' : ''}}>Je netallasa</option>
                                <option value="Biringkaloro" {{ $santri->sektor === "Biringkaloro" ? 'selected' : ''}}>Biringkaloro</option>
                                <option value="Timpoppo" {{ $santri->sektor === "Timpoppo" ? 'selected' : ''}}>Timpoppo</option>
                                <option value="Manjalling" {{ $santri->sektor === "Manjalling" ? 'selected' : ''}}>Manjalling</option>
                                <option value="Ana' Gowa" {{ $santri->sektor === "Ana Gowa" ? 'selected' : ''}}>Ana Gowa</option>
                                <option value="Gentungang" {{ $santri->sektor === "Gentungang" ? 'selected' : ''}}>Gentungang</option>
                                <option value="Moncobalang" {{ $santri->sektor === "Moncobalang" ? 'selected' : ''}}>Moncobalang</option>
                                <option value="Limbung" {{ $santri->sektor === "Limbung" ? 'selected' : ''}}>Limbung</option>
                                <option value="Kampili" {{ $santri->sektor === "Kampili" ? 'selected' : ''}}>Kampili</option>
                                <option value="Cendrawasih" {{ $santri->sektor === "Cendrawasih" ? 'selected' : ''}}>Cendrawasih</option>
                                <option value="Pa'baeng-baeng" {{ $santri->sektor === "Pabaeng-baeng" ? 'selected' : ''}}>Pabaeng-baeng</option>
                                <option value="Rappocini" {{ $santri->sektor === "Rappocini" ? 'selected' : ''}}>Rappocini</option>
                                <option value="Polres Takalar" {{ $santri->sektor === "Polres Takalar" ? 'selected' : ''}}>Polres Takalar</option>
                                <option value="labata" {{ $santri->sektor === "labata" ? 'selected' : ''}}>labata</option>
                                <option value="Soppeng" {{ $santri->sektor === "Soppeng" ? 'selected' : ''}}>Soppeng</option>
                            </select>
                            @error('sektor')
                            <p class='text-danger inputerror'>{{ $message }} </p>
                            @enderror
                        </div>

                        <div class="form-group col-12 col-md-6 mt-3">
                            <label>NIS</label>
                            <input wire:model.lazy="santri.nis" type="text" class="form-control border border-2 p-2" value='{{ old('nis') }}'>
                            @error('nis')
                            <p class='text-danger inputerror'>{{ $message }} </p>
                            @enderror
                        </div>

                        <div class="form-group col-12 col-md-6 mt-3">
                            <label>Nama Santri</label>
                            <input wire:model.lazy="santri.nama" type="text" class="form-control border border-2 p-2" value='{{ old('nama') }}'>
                            @error('nama')
                            <p class='text-danger inputerror'>{{ $message }} </p>
                            @enderror
                        </div>

                        <div class="form-group col-12 col-md-6 mt-3">
                            <label>Tempat Lahir</label>
                            <input wire:model.lazy="santri.tempatlahir" type="text" class="form-control border border-2 p-2" value='{{ old('tempatlahir') }}'>
                            @error('tempatlahir')
                            <p class='text-danger inputerror'>{{ $message }} </p>
                            @enderror
                        </div>

                        <div class="form-group col-12 col-md-6 mt-3">
                            <label>Tanggal Lahir</label>
                            <input wire:model.lazy="santri.tgllahir" type="date" class="form-control border border-2 p-2" value='{{ old('tgllahir') }}'>
                            @error('tgllahir')
                            <p class='text-danger inputerror'>{{ $message }} </p>
                            @enderror
                        </div>

                        <div class="form-group col-12 col-md-6 mt-3">
                            <label>Jenis Kelamin</label>
                            <select wire:model.lazy="santri.jk" class="form-select border border-2 p-2" data-style="select-with-transition" title="" data-size="100">
                                <option value="Laki-laki" {{ $santri->jk === "Laki-laki" ? 'selected' : ''}}>Laki-laki</option>
                                <option value="Perempuan" {{ $santri->jk === "Perempuan" ? 'selected' : ''}}>Perempuan</option>
                            </select>
                            @error('jk')
                            <p class='text-danger inputerror'>{{ $message }} </p>
                            @enderror
                        </div>

                        <div class="form-group col-12 col-md-6 mt-3">
                            <label>Jumlah Saudara</label>
                            <input wire:model.lazy="santri.saudara" type="number" class="form-control border border-2 p-2" value='{{ old('saudara') }}'>
                            @error('saudara')
                            <p class='text-danger inputerror'>{{ $message }} </p>
                            @enderror
                        </div>

                        <div class="form-group col-12 col-md-6 mt-3">
                            <label>Anak ke</label>
                            <input wire:model.lazy="santri.anakke" type="number" class="form-control border border-2 p-2" value='{{ old('anakke') }}'>
                            @error('anakke')
                            <p class='text-danger inputerror'>{{ $message }} </p>
                            @enderror
                        </div>

                        <div class="form-group col-12 col-md-6 mt-3">
                            <label>Alamat</label>
                            <input wire:model.lazy="santri.alamat" type="text" class="form-control border border-2 p-2" value='{{ old('alamat') }}'>
                            @error('alamat')
                            <p class='text-danger inputerror'>{{ $message }} </p>
                            @enderror
                        </div>

                        <div class="form-group col-12 col-md-6 mt-3">
                            <label>Umur</label>
                            <input wire:model.lazy="santri.umur" type="number" class="form-control border border-2 p-2" value='{{ old('umur') }}'>
                            @error('umur')
                            <p class='text-danger inputerror'>{{ $message }} </p>
                            @enderror
                        </div>

                        <div class="form-group col-12 col-md-6 mt-3">
                            <label>No HP</label>
                            <input wire:model.lazy="santri.nohp" type="number" class="form-control border border-2 p-2" value='{{ old('nohp') }}'>
                            @error('nohp')
                            <p class='text-danger inputerror'>{{ $message }} </p>
                            @enderror
                        </div>

                        <div class="form-group col-12 col-md-6 mt-3">
                            <label>Asal Sekolah</label>
                            <input wire:model.lazy="santri.asalsekolah" type="text" class="form-control border border-2 p-2" value='{{ old('asalsekolah') }}'>
                            @error('asalsekolah')
                            <p class='text-danger inputerror'>{{ $message }} </p>
                            @enderror
                        </div>

                        <div class="form-group col-12 col-md-6 mt-3">
                            <label>Tanggal Masuk</label>
                            <input wire:model.lazy="santri.tglmasuk" type="date" class="form-control border border-2 p-2" value='{{ old('tglmasuk') }}'>
                            @error('tglmasuk')
                            <p class='text-danger inputerror'>{{ $message }} </p>
                            @enderror
                        </div>

                        <div class="form-group col-12 col-md-6 mt-3">
                            <label>Nama Ayah</label>
                            <input wire:model.lazy="santri.namaayah" type="text" class="form-control border border-2 p-2" value='{{ old('namaayah') }}'>
                            @error('namaayah')
                            <p class='text-danger inputerror'>{{ $message }} </p>
                            @enderror
                        </div>

                        <div class="form-group col-12 col-md-6 mt-3">
                            <label>Nama Ibu</label>
                            <input wire:model.lazy="santri.namaibu" type="text" class="form-control border border-2 p-2" value='{{ old('namaibu') }}'>
                            @error('namaibu')
                            <p class='text-danger inputerror'>{{ $message }} </p>
                            @enderror
                        </div>

                        <div class="form-group col-12 col-md-6 mt-3">
                            <label>Pekerjaan Ayah</label>
                            <input wire:model.lazy="santri.kerjaayah" type="text" class="form-control border border-2 p-2" value='{{ old('kerjaayah') }}'>
                            @error('kerjaayah')
                            <p class='text-danger inputerror'>{{ $message }} </p>
                            @enderror
                        </div>

                        <div class="form-group col-12 col-md-6 mt-3">
                            <label>Pekerjaan Ibu</label>
                            <input wire:model.lazy="santri.kerjaibu" type="text" class="form-control border border-2 p-2" value='{{ old('kerjaibu') }}'>
                            @error('kerjaibu')
                            <p class='text-danger inputerror'>{{ $message }} </p>
                            @enderror
                        </div>

                        <div class="form-group col-12 col-md-6 mt-3">
                            <label>Pendidikan Terakhir Ayah</label>
                            <input wire:model.lazy="santri.pendayah" type="text" class="form-control border border-2 p-2" value='{{ old('pendayah') }}'>
                            @error('pendayah')
                            <p class='text-danger inputerror'>{{ $message }} </p>
                            @enderror
                        </div>

                        <div class="form-group col-12 col-md-6 mt-3">
                            <label>Pendidikan Terakhir Ibu</label>
                            <input wire:model.lazy="santri.pendibu" type="text" class="form-control border border-2 p-2" value='{{ old('pendibu') }}'>
                            @error('pendibu')
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