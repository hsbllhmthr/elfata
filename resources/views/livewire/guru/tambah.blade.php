        <div class="container-fluid py-4">
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header">
                            <h5 class="mb-0">Tambah Guru</h5>
                            <p>Silahkan isi data dengan baik dan benar</p>
                        </div>
                        <div class="col-12 text-end">
                            <a class="btn bg-gradient-dark mb-0 me-4" href="{{ route('guru') }}">Kembali</a>
                        </div>
                        <div class="card-body">
                            <form wire:submit.prevent="store" class='d-flex flex-column align-items-center' enctype="multipart/form-data">
                                <div class="form-group col-12 col-md-6">
                                    <label>No. Stambuk</label>
                                    <input wire:model.lazy="stambuk" type="number" class="form-control border border-2 p-2" value='{{ old('stambuk') }}'>
                                    @error('stambuk')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="form-group col-12 col-md-6 mt-3">
                                    <label>Nama Lengkap</label>
                                    <input wire:model.lazy="nama" type="text" class="form-control border border-2 p-2" value='{{ old('nama') }}'>
                                    @error('nama')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="form-group col-12 col-md-6 mt-3">
                                    <label>Cabang</label>
                                    <select wire:model.lazy="cabang" class="form-select border border-2 p-2" data-style="select-with-transition" title="" data-size="100">
                                        <option value="">Pilih Cabang</option>
                                        <option value="Cabang 1">Cabang Gowa</option>
                                        <option value="Cabang 2">Cabang Makassar</option>
                                        <option value="Cabang 3">Cabang Takalar</option>
                                        <option value="Cabang 4">Cabang Soppeng</option>
                                    </select>
                                    @error('cabang')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="form-group col-12 col-md-6 mt-3">
                                    <label>Sektor</label>
                                    <input wire:model.lazy="sektor" type="text" class="form-control border border-2 p-2" value='{{ old('sektor') }}'>
                                    @error('sektor')
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
                                    <label>Status Pernikahan</label>
                                    <select wire:model.lazy="statusnikah" class="form-select border border-2 p-2" data-style="select-with-transition" title="" data-size="100">
                                        <option value="">Pilih Status Pernikahan</option>
                                        <option value="Belum">Belum</option>
                                        <option value="Sudah">Sudah</option>
                                    </select>
                                    @error('statusnikah')
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
                                    <label>Anak ke berapa</label>
                                    <input wire:model.lazy="anakke" type="number" class="form-control border border-2 p-2" value='{{ old('anakke') }}'>
                                    @error('anakke')
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
                                    <label>Tanggal Tanda Tangan Kontrak</label>
                                    <input wire:model.lazy="tanggalkontrak" type="date" class="form-control border border-2 p-2" value='{{ old('tanggalkontrak') }}'>
                                    @error('tanggalkontrak')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="form-group col-12 col-md-6 mt-3">
                                    <label>Alamat Asal</label>
                                    <input wire:model.lazy="asal" type="text" class="form-control border border-2 p-2" value='{{ old('asal') }}'>
                                    @error('asal')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="form-group col-12 col-md-6 mt-3">
                                    <label>Alamat Tempat Tinggal</label>
                                    <input wire:model.lazy="alamattinggal" type="text" class="form-control border border-2 p-2" value='{{ old('alamattinggal') }}'>
                                    @error('alamattinggal')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="form-group col-12 col-md-6 mt-3">
                                    <label>Email</label>
                                    <input wire:model.lazy="email" type="email" class="form-control border border-2 p-2" value='{{ old('email') }}'>
                                    @error('email')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="form-group col-12 col-md-6 mt-3">
                                    <label>Nomor Handphone</label>
                                    <input wire:model.lazy="nohp" type="number" class="form-control border border-2 p-2" value='{{ old('nohp') }}'>
                                    @error('nohp')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="form-group col-12 col-md-6 mt-3">
                                    <label>TK</label>
                                    <input wire:model.lazy="tk" type="text" class="form-control border border-2 p-2" value='{{ old('tk') }}'>
                                    @error('tk')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="form-group col-12 col-md-6 mt-3">
                                    <label>SD</label>
                                    <input wire:model.lazy="sd" type="text" class="form-control border border-2 p-2" value='{{ old('sd') }}'>
                                    @error('sd')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="form-group col-12 col-md-6 mt-3">
                                    <label>SMP</label>
                                    <input wire:model.lazy="smp" type="text" class="form-control border border-2 p-2" value='{{ old('smp') }}'>
                                    @error('smp')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="form-group col-12 col-md-6 mt-3">
                                    <label>SMA</label>
                                    <input wire:model.lazy="sma" type="text" class="form-control border border-2 p-2" value='{{ old('sma') }}'>
                                    @error('sma')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="form-group col-12 col-md-6 mt-3">
                                    <label>Universitas</label>
                                    <input wire:model.lazy="universitas" type="text" class="form-control border border-2 p-2" value='{{ old('universitas') }}'>
                                    @error('universitas')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="form-group col-12 col-md-6 mt-3">
                                    <label>Jurusan di Universitas</label>
                                    <input wire:model.lazy="jurusan" type="text" class="form-control border border-2 p-2" value='{{ old('jurusan') }}'>
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