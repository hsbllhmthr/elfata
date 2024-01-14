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
                            <form wire:submit.prevent="store" class='d-flex flex-column align-items-center' enctype="multipart/form-data">
                                <div class="form-group col-12 col-md-6">
                                    <label>Halaqah</label>
                                    <select wire:model.lazy="halaqah" class="form-select border border-2 p-2" data-style="select-with-transition" title="" data-size="100" id="halaqah">
                                        <option value="">Pilih Halaqah</option>
                                        <option value="Halaqah 1">Halaqah 1</option>
                                        <option value="Halaqah 2">Halaqah 2</option>
                                        <option value="Halaqah 3">Halaqah 3</option>
                                        <option value="Halaqah 4">Halaqah 4</option>
                                        <option value="Halaqah 5">Halaqah 5</option>
                                    </select>
                                    @error('halaqah')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="form-group col-12 col-md-6 mt-3">
                                    <label for='santri_id'>Santri</label>
                                    <select wire:model.lazy="santri_id" class="form-select border border-2 p-2" data-style="select-with-transition" title="" data-size="100" id="santri">
                                        <option value="">Pilih Santri</option>
                                        @foreach ($santris as $santri)
                                        <option value="{{ $santri->id }}" {{ old('santri_id') == $santri->id ? 'selected' : ''}}>{{ $santri->nama }}
                                        </option>
                                        @endforeach
                                    </select>
                                    @error('santri_id')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="form-group col-12 col-md-6 mt-3">
                                    <label>Tanggal</label>
                                    <input wire:model.lazy="tanggal" type="date" class="form-control border border-2 p-2" value='{{ old('tanggal') }}'>
                                    @error('tanggal')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="form-group col-12 col-md-6 mt-3">
                                    <label>Hafalan</label>
                                    <input wire:model.lazy="isi" type="text" class="form-control border border-2 p-2" value='{{ old('isi') }}'>
                                    @error('isi')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="form-group col-12 col-md-6 mt-3">
                                    <label>Nilai kelancaran</label>
                                    <input wire:model.lazy="nilai1" type="text" class="form-control border border-2 p-2" value='{{ old('nilai1') }}'>
                                    @error('nilai1')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="form-group col-12 col-md-6 mt-3">
                                    <label>Nilai makhroj</label>
                                    <input wire:model.lazy="nilai2" type="text" class="form-control border border-2 p-2" value='{{ old('nilai2') }}'>
                                    @error('nilai2')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="form-group col-12 col-md-6 mt-3">
                                    <label>Nilai tajwid</label>
                                    <input wire:model.lazy="nilai3" type="text" class="form-control border border-2 p-2" value='{{ old('nilai3') }}'>
                                    @error('nilai3')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="form-group col-12 col-md-6 mt-3">
                                    <label>Link</label>
                                    <input wire:model.lazy="link" type="text" class="form-control border border-2 p-2" value='{{ old('link') }}'>
                                    @error('isi')
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