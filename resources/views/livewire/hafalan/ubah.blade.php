        <div class="container-fluid py-4">
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header">
                            <h5 class="mb-0">Tambah Hafalan Santri</h5>
                            <p>Silahkan isi data dengan baik dan benar</p>
                        </div>
                        <div class="col-12 text-end">
                            <a class="btn bg-gradient-dark mb-0 me-4" href="{{ route('hafalan') }}">Kembali</a>
                        </div>
                        <div class="card-body">
                            <form wire:submit.prevent="update" class='d-flex flex-column align-items-center' enctype="multipart/form-data">
                                <div class="form-group col-12 col-md-6">
                                    <label>Halaqah</label>
                                    <select wire:model.lazy="hafalan.halaqah" class="form-select border border-2 p-2" data-style="select-with-transition" title="" data-size="100" id="halaqah">
                                        <option value="">Pilih Halaqah</option>
                                        <option value="Halaqah 1" {{ $hafalan->halaqah === "Halaqah 1" ? 'selected' : ''}}>Halaqah 1</option>
                                        <option value="Halaqah 2" {{ $hafalan->halaqah === "Halaqah 2" ? 'selected' : ''}}>Halaqah 2</option>
                                        <option value="Halaqah 3" {{ $hafalan->halaqah === "Halaqah 3" ? 'selected' : ''}}>Halaqah 3</option>
                                        <option value="Halaqah 4" {{ $hafalan->halaqah === "Halaqah 4" ? 'selected' : ''}}>Halaqah 4</option>
                                        <option value="Halaqah 5" {{ $hafalan->halaqah === "Halaqah 5" ? 'selected' : ''}}>Halaqah 5</option>
                                    </select>
                                    @error('hafalan.halaqah')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="form-group col-12 col-md-6 mt-3">
                                    <label for='santri_id'>Santri</label>
                                    <select wire:model.lazy="hafalan.santri_id" class="form-select border border-2 p-2" data-style="select-with-transition" title="" data-size="100" id="santri">
                                        @foreach ($santris as $santri)
                                        <option value="{{ $santri->id }}" {{ $santri->santri_id === $santri->id ? 'selected' : ''}}>
                                            {{ $santri->nama }}
                                        </option>
                                        @endforeach
                                    </select>
                                    @error('hafalan.santri_id')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="form-group col-12 col-md-6 mt-3">
                                    <label>Tanggal</label>
                                    <input wire:model.lazy="hafalan.tanggal" type="date" class="form-control border border-2 p-2" value='{{ old('tanggal') }}'>
                                    @error('hafalan.tanggal')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="form-group col-12 col-md-6 mt-3">
                                    <label>Hafalan</label>
                                    <input wire:model.lazy="hafalan.isi" type="text" class="form-control border border-2 p-2" value='{{ old('isi') }}'>
                                    @error('hafalan.isi')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="form-group col-12 col-md-6 mt-3">
                                    <label>Nilai kelancaran</label>
                                    <input wire:model.lazy="hafalan.nilai1" type="text" class="form-control border border-2 p-2" value='{{ old('nilai1') }}'>
                                    @error('hafalan.nilai1')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="form-group col-12 col-md-6 mt-3">
                                    <label>Nilai makhroj</label>
                                    <input wire:model.lazy="hafalan.nilai2" type="text" class="form-control border border-2 p-2" value='{{ old('nilai2') }}'>
                                    @error('hafalan.nilai2')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="form-group col-12 col-md-6 mt-3">
                                    <label>Nilai tajwid</label>
                                    <input wire:model.lazy="hafalan.nilai3" type="text" class="form-control border border-2 p-2" value='{{ old('nilai3') }}'>
                                    @error('hafalan.nilai3')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>


                                <div class="form-group col-12 col-md-6 mt-3">
                                    <label>Link</label>
                                    <input wire:model.lazy="hafalan.link" type="text" class="form-control border border-2 p-2" value='{{ old('link') }}'>
                                    @error('hafalan.link')
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