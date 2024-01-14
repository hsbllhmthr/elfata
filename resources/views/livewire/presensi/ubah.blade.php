        <div class="container-fluid py-4">
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header">
                            <h5 class="mb-0">Ubah Presensi Santri</h5>
                            <p>Silahkan isi data dengan baik dan benar</p>
                        </div>
                        <div class="col-12 text-end">
                            <a class="btn bg-gradient-dark mb-0 me-4" href="{{ route('presensi') }}">Kembali</a>
                        </div>
                        <div class="card-body">
                            <form wire:submit.prevent="update" class='d-flex flex-column align-items-center' enctype="multipart/form-data">
                                <div class="form-group col-6 col-md-6 mt-3">
                                    <label>Tanggal</label>
                                    <input wire:model.lazy="presensi.tanggal" type="date" class="form-control border border-2 p-2" value='{{ old('tanggal') }}'>
                                    @error('presensi.tanggal')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="form-group col-6 col-md-6 mt-3">
                                    <label>Pilih Cabang</label>
                                    <select wire:model="presensi.cabang" class="pilih form-select border border-2 p-2 ">
                                        <option value="Gowa" {{ $presensi->cabang === "Gowa" ? 'selected' : ''}}>Gowa</option>
                                        <option value="Makassar" {{ $presensi->cabang === "Makassar" ? 'selected' : ''}}>Makassar</option>
                                        <option value="Takalar" {{ $presensi->cabang === "Takalar" ? 'selected' : ''}}>Takalar</option>
                                        <option value="Soppeng" {{ $presensi->cabang === "Soppeng" ? 'selected' : ''}}>Soppeng</option>
                                    </select>
                                    @error('tanggal')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="form-group col-12 col-md-6 mt-3">
                                    <label for='santri_id'>Santri</label>
                                    <select wire:model.lazy="presensi.santri_id" class="form-select border border-2 p-2" data-style="select-with-transition" title="" data-size="100" id="santri">
                                        @foreach ($santris as $santri)
                                        <option value="{{ $santri->id }}" {{ $santri->santri_id === $santri->id ? 'selected' : ''}}>
                                            {{ $santri->nama }}
                                        </option>
                                        @endforeach
                                    </select>
                                    @error('presensi.santri_id')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="form-group col-12 col-md-6 mt-3">
                                    <label for='ket'>Keterangan</label>
                                    <select wire:model="presensi.ket" class="form-select border border-2 p-2">
                                        <option value="Hadir" {{ $presensi->ket === "Hadir" ? 'selected' : ''}}>Hadir</option>
                                        <option value="Alfa" {{ $presensi->ket === "Alfa" ? 'selected' : ''}}>Alfa</option>
                                        <option value="Libur" {{ $presensi->ket === "Libur" ? 'selected' : ''}}>Libur</option>
                                    </select>
                                    @error('presensi.ket')
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