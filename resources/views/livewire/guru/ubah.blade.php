        <div class="container-fluid py-4">
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header">
                            <h5 class="mb-0">Ubah Guru</h5>
                            <p>Silahkan isi data dengan baik dan benar</p>
                        </div>
                        <div class="col-12 text-end">
                            <a class="btn bg-gradient-dark mb-0 me-4" href="{{ route('guru') }}">Kembali</a>
                        </div>
                        <div class="card-body">
                            <form wire:submit.prevent="update" class='d-flex flex-column align-items-center' enctype="multipart/form-data">
                                <div class="form-group col-12 col-md-6">
                                    <label>No. Stambuk</label>
                                    <input wire:model.lazy="guru.stambuk" type="number" class="form-control border border-2 p-2" value='{{ old('stambuk') }}'>
                                    @error('stambuk')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="form-group col-12 col-md-6 mt-3">
                                    <label>Nama Lengkap</label>
                                    <input wire:model.lazy="guru.nama" type="text" class="form-control border border-2 p-2" value='{{ old('nama') }}'>
                                    @error('nama')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="form-group col-12 col-md-6 mt-3">
                                    <label>Cabang</label>
                                    <select wire:model.lazy="guru.cabang" class="form-select border border-2 p-2" data-style="select-with-transition" title="" data-size="100">
                                        <option value="">Pilih Cabang</option>
                                        <option value="Cabang Gowa" {{ $guru->cabang === "Cabang Gowa" ? 'selected' : ''}}>Cabang Gowa</option>
                                        <option value="Cabang Makassar" {{ $guru->cabang === "Cabang Makassar" ? 'selected' : ''}}>Cabang Makassar</option>
                                        <option value="Cabang Takalar" {{ $guru->cabang === "Cabang Takalar" ? 'selected' : ''}}>Cabang Takalar</option>
                                        <option value="Cabang Soppeng" {{ $guru->cabang === "Cabang Soppeng" ? 'selected' : ''}}>Cabang Soppeng</option>
                                    </select>
                                    @error('cabang')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="form-group col-12 col-md-6 mt-3">
                                    <label>Sektor</label>
                                    <input wire:model.lazy="guru.sektor" type="text" class="form-control border border-2 p-2" value='{{ old('sektor') }}'>
                                    @error('sektor')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="form-group col-12 col-md-6 mt-3">
                                    <label>Jenis Kelamin</label>
                                    <select wire:model.lazy="guru.jk" class="form-select border border-2 p-2" data-style="select-with-transition" title="" data-size="100">
                                        <option value="Laki-laki" {{ $guru->jk === "Laki-laki" ? 'selected' : ''}}>Laki-laki</option>
                                        <option value="Perempuan" {{ $guru->jk === "Perempuan" ? 'selected' : ''}}>Perempuan</option>
                                    </select>
                                    @error('jk')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="form-group col-12 col-md-6 mt-3">
                                    <label>Tempat Lahir</label>
                                    <input wire:model.lazy="guru.tempatlahir" type="text" class="form-control border border-2 p-2" value='{{ old('tempatlahir') }}'>
                                    @error('tempatlahir')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="form-group col-12 col-md-6 mt-3">
                                    <label>Tanggal Lahir</label>
                                    <input wire:model.lazy="guru.tgllahir" type="date" class="form-control border border-2 p-2" value='{{ old('tgllahir') }}'>
                                    @error('tgllahir')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="form-group col-12 col-md-6 mt-3">
                                    <label>Status Pernikahan</label>
                                    <select wire:model.lazy="guru.statusnikah" class="form-select border border-2 p-2" data-style="select-with-transition" title="" data-size="100">
                                        <option value="Belum" {{ $guru->statusnikah === "Belum" ? 'selected' : ''}}>Belum</option>
                                        <option value="Sudah" {{ $guru->statusnikah === "Sudah" ? 'selected' : ''}}>Sudah</option>
                                    </select>
                                    @error('statusnikah')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="form-group col-12 col-md-6 mt-3">
                                    <label>Jumlah Saudara</label>
                                    <input wire:model.lazy="guru.saudara" type="number" class="form-control border border-2 p-2" value='{{ old('saudara') }}'>
                                    @error('saudara')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="form-group col-12 col-md-6 mt-3">
                                    <label>Anak ke berapa</label>
                                    <input wire:model.lazy="guru.anakke" type="number" class="form-control border border-2 p-2" value='{{ old('anakke') }}'>
                                    @error('anakke')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="form-group col-12 col-md-6 mt-3">
                                    <label>Nama Ayah</label>
                                    <input wire:model.lazy="guru.namaayah" type="text" class="form-control border border-2 p-2" value='{{ old('namaayah') }}'>
                                    @error('namaayah')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="form-group col-12 col-md-6 mt-3">
                                    <label>Nama Ibu</label>
                                    <input wire:model.lazy="guru.namaibu" type="text" class="form-control border border-2 p-2" value='{{ old('namaibu') }}'>
                                    @error('namaibu')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="form-group col-12 col-md-6 mt-3">
                                    <label>Pekerjaan Ayah</label>
                                    <input wire:model.lazy="guru.kerjaayah" type="text" class="form-control border border-2 p-2" value='{{ old('kerjaayah') }}'>
                                    @error('kerjaayah')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="form-group col-12 col-md-6 mt-3">
                                    <label>Pekerjaan Ibu</label>
                                    <input wire:model.lazy="guru.kerjaibu" type="text" class="form-control border border-2 p-2" value='{{ old('kerjaibu') }}'>
                                    @error('kerjaibu')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="form-group col-12 col-md-6 mt-3">
                                    <label>Tanggal Tanda Tangan Kontrak</label>
                                    <input wire:model.lazy="guru.tanggalkontrak" type="date" class="form-control border border-2 p-2" value='{{ old('tanggalkontrak') }}'>
                                    @error('tanggalkontrak')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="form-group col-12 col-md-6 mt-3">
                                    <label>Alamat Asal</label>
                                    <input wire:model.lazy="guru.asal" type="text" class="form-control border border-2 p-2" value='{{ old('asal') }}'>
                                    @error('asal')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="form-group col-12 col-md-6 mt-3">
                                    <label>Alamat Tempat Tinggal</label>
                                    <input wire:model.lazy="guru.alamattinggal" type="text" class="form-control border border-2 p-2" value='{{ old('alamattinggal') }}'>
                                    @error('alamattinggal')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="form-group col-12 col-md-6 mt-3">
                                    <label>Email</label>
                                    <input wire:model.lazy="guru.email" type="email" class="form-control border border-2 p-2" value='{{ old('email') }}'>
                                    @error('email')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="form-group col-12 col-md-6 mt-3">
                                    <label>Nomor Handphone</label>
                                    <input wire:model.lazy="guru.nohp" type="number" class="form-control border border-2 p-2" value='{{ old('nohp') }}'>
                                    @error('nohp')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="form-group col-12 col-md-6 mt-3">
                                    <label>TK</label>
                                    <input wire:model.lazy="guru.tk" type="text" class="form-control border border-2 p-2" value='{{ old('tk') }}'>
                                    @error('tk')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="form-group col-12 col-md-6 mt-3">
                                    <label>SD</label>
                                    <input wire:model.lazy="guru.sd" type="text" class="form-control border border-2 p-2" value='{{ old('sd') }}'>
                                    @error('sd')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="form-group col-12 col-md-6 mt-3">
                                    <label>SMP</label>
                                    <input wire:model.lazy="guru.smp" type="text" class="form-control border border-2 p-2" value='{{ old('smp') }}'>
                                    @error('smp')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="form-group col-12 col-md-6 mt-3">
                                    <label>SMA</label>
                                    <input wire:model.lazy="guru.sma" type="text" class="form-control border border-2 p-2" value='{{ old('sma') }}'>
                                    @error('sma')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="form-group col-12 col-md-6 mt-3">
                                    <label>Universitas</label>
                                    <input wire:model.lazy="guru.universitas" type="text" class="form-control border border-2 p-2" value='{{ old('universitas') }}'>
                                    @error('universitas')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="form-group col-12 col-md-6 mt-3">
                                    <label>Jurusan di Universitas</label>
                                    <input wire:model.lazy="guru.jurusan" type="text" class="form-control border border-2 p-2" value='{{ old('jurusan') }}'>
                                    @error('jurusan')
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