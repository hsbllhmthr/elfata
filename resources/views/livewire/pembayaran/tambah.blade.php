    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header">
                        <h5 class="mb-0">Tambah Pembayaran Santri</h5>
                        <p>Silahkan isi data dengan baik dan benar</p>
                    </div>
                    <div class="col-12 text-end">
                        <a class="btn bg-gradient-dark mb-0 me-4" href="{{ route('hafalan') }}">Kembali</a>
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent="store" class='d-flex flex-column align-items-center' enctype="multipart/form-data">
                            <div class="form-group col-12 col-md-6 mt-3">
                                <label for='santri_id'>Santri</label>
                                <select wire:model.lazy="santri_id" class="form-select border border-2 p-2"
                                    data-style="select-with-transition" title="" data-size="100" id="santri">
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
                                <label>Kelompok</label>
                                <input wire:model.lazy="kelompok" type="text" class="form-control border border-2 p-2" value='{{ old('kelompok') }}'>
                                @error('kelompok')
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
                                <label>Jumlah</label>
                                <input wire:model.lazy="jumlah" type="text" id="rupiah" class="form-control border border-2 p-2" value='{{ old('jumlah') }}'>
                                @error('jumlah')
                                <p class='text-danger inputerror'>{{ $message }} </p>
                                @enderror
                            </div>
                            <div class="form-group col-12 col-md-6 mt-3">
                                <label>Sisa</label>
                                <input wire:model.lazy="sisa" type="text" id="sisa" class="form-control border border-2 p-2" value='{{ old('sisa') }}'>
                                @error('sisa')
                                <p class='text-danger inputerror'>{{ $message }} </p>
                                @enderror
                            </div>
                            <div class="form-group col-12 col-md-6 mt-3">
                                <label>Keterangan</label>
                                <select wire:model.lazy="ket" class="form-select border border-2 p-2"
                                    data-style="select-with-transition" title="" data-size="100" id="ket">
                                    <option value="">Pilih Keterangan</option>
                                    <option value="Lunas">Lunas</option>
                                    <option value="Belum Lunas">Belum Lunas</option>
                                </select>
                                @error('ket')
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
<script type="text/javascript">
    var rupiah = document.getElementById("rupiah");
    var sisa = document.getElementById("sisa");
    rupiah.addEventListener("keyup", function(e) {
      rupiah.value = formatRupiah(this.value, "Rp. ");
    });
    sisa.addEventListener("keyup", function(e) {
      sisa.value = formatRupiah(this.value, "Rp. ");
    });
    function formatRupiah(angka, prefix) {
      var number_string = angka.replace(/[^,\d]/g, "").toString(),
        split = number_string.split(","),
        sisa = split[0].length % 3,
        rupiah = split[0].substr(0, sisa),
        ribuan = split[0].substr(sisa).match(/\d{3}/gi);
      if (ribuan) {
        separator = sisa ? "." : "";
        rupiah += separator + ribuan.join(".");
      }
      rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
      return prefix == undefined ? rupiah : rupiah ? "Rp. " + rupiah : "";
    }

</script>
@endpush
