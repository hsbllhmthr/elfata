<div class="container-fluid py-4 bg-gray-200">
    <form wire:submit.prevent="store" enctype="multipart/form-data">  
    <div class="row">
        <div class="col-lg-6">
            <h4>Tambah Rapor Santri</h4>
            <p>Silahkan isi data dengan baik dan benar</p>
        </div>
        <div class="col-lg-6 text-right d-flex flex-column justify-content-center">
            <a class="btn btn-gradient-danger mb-2 ms-lg-auto me-lg-0" href="{{ route('rapor') }}" title="Kembali">Kembali</a>
            <button type="submit" class="btn bg-gradient-primary mb-0 ms-lg-auto me-lg-0 mt-2">Simpan</button>
        </div>
    </div>    
        <div class="row mt-4">
            <div class="col-lg-2">
                <div class="card position-sticky top-1">
                    <div class="card-body">
                        <div class="form-group col-12">
                            <label>Jumlah Nilai</label>
                            <input wire:model="jumlah" type="text" id="jumlah" name="jumlah" class="form-control border border-2 p-2" value='{{ old('jumlah') }}'>
                            @error('jumlah')
                            <p class='text-danger inputerror'>{{ $message }} </p>
                            @enderror
                            <div class="mt-3">
                                <p><textarea type="text" id="outs" disabled></textarea></p>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group col-12">
                            <label>Nilai Rata-Rata</label>
                            <input type="text" class="form-control border border-2 p-2" id="ratarata">  
                            <div class="mt-3">
                                <p><textarea type="text" id="hasilratarata" disabled></textarea></p>
                            </div>                          
                        </div>
                        <hr>
                        <button class="btn bg-gradient-dark ms-auto mb-0" type="button" id="hitung" title="Hitung">Hitung</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-10 mt-lg-0 mt-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="font-weight-bolder">Informasi Santri</h5>
                        <div class="row mt-4">
                            <div class="form-group col-6 col-md-6 mt-1">
                                <label for='santri_id'>Santri</label>
                                <select wire:model.lazy="santri_id" class="form-select border border-2 p-2"
                                   id="santri">
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
                            <div class="form-group col-6 col-md-6 mt-1">
                                <label>Musyrif/Musyrifah</label>
                                <input wire:model.lazy="musyrif" type="text" class="form-control border border-2 p-2" value='{{ old('musyrif') }}'>
                                @error('musyrif')
                                <p class='text-danger inputerror'>{{ $message }} </p>
                                @enderror
                            </div>
                            <div class="form-group col-6 col-md-6 mt-1">
                                <label>Tanggal</label>
                                <input wire:model.lazy="tanggal" type="date" class="form-control border border-2 p-2" value='{{ old('tanggal') }}'>
                                @error('tanggal')
                                <p class='text-danger inputerror'>{{ $message }} </p>
                                @enderror
                            </div>                           

                            <div class="form-group col-6 col-md-6 mt-1">
                                <label>Jumlah Hafalan</label>
                                <input wire:model.lazy="jumlahhafalan" type="text" class="form-control border border-2 p-2" value='{{ old('jumlahhafalan') }}'>
                                @error('jumlahhafalan')
                                <p class='text-danger inputerror'>{{ $message }} </p>
                                @enderror
                            </div>
                            <div class="form-group col-6 col-md-6 mt-1">
                                <label>Halaqah/Sektor</label>
                                <input wire:model.lazy="sektor" type="text" class="form-control border border-2 p-2" value='{{ old('sektor') }}'>
                                @error('sektor')
                                <p class='text-danger inputerror'>{{ $message }} </p>
                                @enderror
                            </div>
                            <div class="form-group col-6 col-md-6 mt-1">
                                <label>Semester</label>
                                <input wire:model.lazy="semester" type="text" class="form-control border border-2 p-2" value='{{ old('semester') }}'>
                                @error('semester')
                                <p class='text-danger inputerror'>{{ $message }} </p>
                                @enderror
                            </div>                                
                        </div>
                    </div>
                </div>
                <div class="card mt-4">
                    <div class="card-body">
                        <h5 class="font-weight-bolder">A. Penilaian Harian</h5>
                        <div class="row">
                            <div class="form-group col-3 col-md-3 mt-3">
                                <p class="h6">Kelancaran</p>
                            </div>
                            <div class="form-group col-2 col-md-2 mt-3">
                                <input wire:model.lazy="nilai_a1" id="nilai_a1" type="text" placeholder="nilai" class="form-control border border-2 p-2" value='{{ old('nilai_a1') }}'>
                                @error('nilai_a1')
                                <p class='text-danger inputerror'>{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group col-7 col-md-7 mt-3">
                                <textarea wire:model.lazy="nilai_a1_ket" class="form-control border border-2 p-2" placeholder="Deskripsi" id="nilai_a1_ket" name='nilai_a1_ket'></textarea>
                                @error('nilai_a1_ket')
                                <p class='text-danger inputerror'>{{ $message }} </p>
                                @enderror
                            </div>  
                            <hr class="mt-3">
                            <div class="form-group col-3 col-md-3 mt-3">
                                <p class="h6">Makhraj</p>
                            </div>
                            <div class="form-group col-2 col-md-2 mt-3">
                                <input wire:model.lazy="nilai_a2" id="nilai_a2" type="text" placeholder="nilai" class="form-control border border-2 p-2" value='{{ old('nilai_a2') }}'>
                                @error('nilai_a2')
                                <p class='text-danger inputerror'>{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group col-7 col-md-7 mt-3">
                                <textarea wire:model.lazy="nilai_a2_ket" class="form-control border border-2 p-2" placeholder="Deskripsi" id="nilai_a2_ket" name='nilai_a2_ket'></textarea>
                                @error('nilai_a2_ket')
                                <p class='text-danger inputerror'>{{ $message }} </p>
                                @enderror
                            </div>  
                            <hr class="mt-3">
                            <div class="form-group col-3 col-md-3 mt-3">
                                <p class="h6">Tajwid</p>
                            </div>
                            <div class="form-group col-2 col-md-2 mt-3">
                                <input wire:model.lazy="nilai_a3" id="nilai_a3" type="text" placeholder="nilai" class="form-control border border-2 p-2" value='{{ old('nilai_a3') }}'>
                                @error('nilai_a3')
                                <p class='text-danger inputerror'>{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group col-7 col-md-7 mt-3">
                                <textarea wire:model.lazy="nilai_a3_ket" class="form-control border border-2 p-2" placeholder="Deskripsi" id="nilai_a3_ket" name='nilai_a3_ket'></textarea>
                                @error('nilai_a3_ket')
                                <p class='text-danger inputerror'>{{ $message }} </p>
                                @enderror
                            </div>  
                            <hr class="mt-3">
                            <div class="form-group col-3 col-md-3 mt-3">
                                <p class="h6">Pencapaian Target Hafalan</p>
                            </div>
                            <div class="form-group col-2 col-md-2 mt-3">
                                <input wire:model.lazy="nilai_a4" id="nilai_a4" type="text" placeholder="nilai" class="form-control border border-2 p-2" value='{{ old('nilai_a4') }}'>
                                @error('nilai_a4')
                                <p class='text-danger inputerror'>{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group col-7 col-md-7 mt-3">
                                <textarea wire:model.lazy="nilai_a4_ket" class="form-control border border-2 p-2" placeholder="Deskripsi" id="nilai_a4_ket" name='nilai_a4_ket'></textarea>
                                @error('nilai_a4_ket')
                                <p class='text-danger inputerror'>{{ $message }} </p>
                                @enderror
                            </div>  
                        </div>
                    </div>
                </div>
                <div class="card mt-4">
                    <div class="card-body">
                        <h5 class="font-weight-bolder">B. Ujian Semester</h5>
                        <div class="row">
                            <div class="form-group col-3 col-md-3 mt-3">
                                <p class="h6">Kelancaran</p>
                            </div>
                            <div class="form-group col-2 col-md-2 mt-3">
                                <input wire:model.lazy="nilai_b1" id="nilai_b1" type="text" placeholder="nilai" class="form-control border border-2 p-2" value='{{ old('nilai_b1') }}'>
                                @error('nilai_b1')
                                <p class='text-danger inputerror'>{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group col-7 col-md-7 mt-3">
                                <textarea wire:model.lazy="nilai_b1_ket" class="form-control border border-2 p-2" placeholder="Deskripsi" id="nilai_b1_ket" name='nilai_b1_ket'></textarea>
                                @error('nilai_b1_ket')
                                <p class='text-danger inputerror'>{{ $message }} </p>
                                @enderror
                            </div>  
                            <hr class="mt-3">
                            <div class="form-group col-3 col-md-3 mt-3">
                                <p class="h6">Makhraj</p>
                            </div>
                            <div class="form-group col-2 col-md-2 mt-3">
                                <input wire:model.lazy="nilai_b2" id="nilai_b2" type="text" placeholder="nilai" class="form-control border border-2 p-2" value='{{ old('nilai_b2') }}'>
                                @error('nilai_b2')
                                <p class='text-danger inputerror'>{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group col-7 col-md-7 mt-3">
                                <textarea wire:model.lazy="nilai_b2_ket" class="form-control border border-2 p-2" placeholder="Deskripsi" id="nilai_b2_ket" name='nilai_b2_ket'></textarea>
                                @error('nilai_b2_ket')
                                <p class='text-danger inputerror'>{{ $message }} </p>
                                @enderror
                            </div>  
                            <hr class="mt-3">
                            <div class="form-group col-3 col-md-3 mt-3">
                                <p class="h6">Tajwid</p>
                            </div>
                            <div class="form-group col-2 col-md-2 mt-3">
                                <input wire:model.lazy="nilai_b3" id="nilai_b3" type="text" placeholder="nilai" class="form-control border border-2 p-2" value='{{ old('nilai_b3') }}'>
                                @error('nilai_b3')
                                <p class='text-danger inputerror'>{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group col-7 col-md-7 mt-3">
                                <textarea wire:model.lazy="nilai_b3_ket" class="form-control border border-2 p-2" placeholder="Deskripsi" id="nilai_b3_ket" name='nilai_b3_ket'></textarea>
                                @error('nilai_b3_ket')
                                <p class='text-danger inputerror'>{{ $message }} </p>
                                @enderror
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="card mt-4">
                    <div class="card-body">
                        <h5 class="font-weight-bolder">C. Lain-lain</h5>
                        <div class="row">
                            <div class="form-group col-3 col-md-3 mt-3">
                                <p class="h6">Adab</p>
                            </div>
                            <div class="form-group col-2 col-md-2 mt-3">
                                <input wire:model.lazy="nilai_c1" id="nilai_c1" type="text" placeholder="nilai" class="form-control border border-2 p-2" value='{{ old('nilai_c1') }}'>
                                @error('nilai_c1')
                                <p class='text-danger inputerror'>{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group col-7 col-md-7 mt-3">
                                <textarea wire:model.lazy="nilai_c1_ket" class="form-control border border-2 p-2" placeholder="Deskripsi" id="nilai_c1_ket" name='nilai_c1_ket'></textarea>
                                @error('nilai_c1_ket')
                                <p class='text-danger inputerror'>{{ $message }} </p>
                                @enderror
                            </div>  
                            <hr class="mt-3">
                            <div class="form-group col-3 col-md-3 mt-3">
                                <p class="h6">Kehadiran</p>
                            </div>
                            <div class="form-group col-2 col-md-2 mt-3">
                                <input wire:model.lazy="nilai_c2" id="nilai_c2" type="text" placeholder="nilai" class="form-control border border-2 p-2" value='{{ old('nilai_c2') }}'>
                                @error('nilai_c2')
                                <p class='text-danger inputerror'>{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group col-7 col-md-7 mt-3">
                                <textarea wire:model.lazy="nilai_c2_ket" class="form-control border border-2 p-2" placeholder="Deskripsi" id="nilai_c2_ket" name='nilai_c2_ket'></textarea>
                                @error('nilai_c2_ket')
                                <p class='text-danger inputerror'>{{ $message }} </p>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>    
</div>
@push('js')
<style type="text/css">
    #outs, #hasilratarata{
        width: 100%;
        border:none;
        outline:none;
    }
</style>
<script src="{{ asset('assets') }}/js/plugins/perfect-scrollbar.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#hitung").click(function(){
            var nilai_a1=parseInt($("#nilai_a1").val());
            var nilai_a2=parseInt($("#nilai_a2").val());
            var nilai_a3=parseInt($("#nilai_a3").val());
            var nilai_a4=parseInt($("#nilai_a4").val());
            var nilai_b1=parseInt($("#nilai_b1").val());
            var nilai_b2=parseInt($("#nilai_b2").val());
            var nilai_b3=parseInt($("#nilai_b3").val());
            var nilai_c1=parseInt($("#nilai_c1").val());
            var nilai_c2=parseInt($("#nilai_c2").val());
            var jumlahs = nilai_a1+nilai_a2+nilai_a3+nilai_a4+nilai_b1+nilai_b2+nilai_b3+nilai_c1+nilai_c2;
            var rata = jumlahs/9;
            $('#jumlah').val(jumlahs);
            $('#ratarata').val(rata.toFixed(2));

            var ratabulat = Math.round(rata);
            var skala="";
            if ((ratabulat > 98) && (ratabulat <=100)) { 
                skala = 'Mumtaz Murtafi'; 
            } else if ((ratabulat >= 90) && (ratabulat <= 97)) {
                skala = 'Mumtaz';
            } else if ((ratabulat >= 86) && (ratabulat <= 89)) {
                skala = 'Jayyid Jiddan';
            } else if ((ratabulat >= 70) && (ratabulat <= 85)) {
                skala = 'Jayyid';
            } else if ((ratabulat >= 60) && (ratabulat <= 69)) {
                skala = 'Maqbul';
            } else if ((ratabulat >= 0) && (ratabulat <= 59)) {
                skala = 'Rhasib';
            }
            $('#outs').val(terbilang(jumlahs));
            $("#hasilratarata").val(skala);
            var hasil = document.getElementById('jumlah');
            hasil.dispatchEvent(new Event('input'));
        });

        // $("#jumlah").on("keyup change", function(e) {
        //     var angkane=$("#jumlah").val();
        //     $("#out").html(terbilang(angkane));
        // });
    });
    function terbilang(angka){
        var bilne=["","Satu","Dua","Tiga","Empat","Lima","Enam","Tujuh","Delapan","Sembilan","Sepuluh","Sebelas"];
        if(angka < 12){
            return bilne[angka];
        }else if(angka < 20){
            return terbilang(angka-10)+" Belas";
        }else if(angka < 100){
            return terbilang(Math.floor(parseInt(angka)/10))+" Puluh "+terbilang(parseInt(angka)%10);
        }else if(angka < 200){
            return "seratus "+terbilang(parseInt(angka)-100);
        }else if(angka < 1000){
            return terbilang(Math.floor(parseInt(angka)/100))+" Ratus "+terbilang(parseInt(angka)%100);
        }else if(angka < 2000){
            return "seribu "+terbilang(parseInt(angka)-1000);
        }else if(angka < 1000000){
            return terbilang(Math.floor(parseInt(angka)/1000))+" Ribu "+terbilang(parseInt(angka)%1000);
        }else if(angka < 1000000000){
            return terbilang(Math.floor(parseInt(angka)/1000000))+" Juta "+terbilang(parseInt(angka)%1000000);
        }else if(angka < 1000000000000){
            return terbilang(Math.floor(parseInt(angka)/1000000000))+" Milyar "+terbilang(parseInt(angka)%1000000000);
        }else if(angka < 1000000000000000){
            return terbilang(Math.floor(parseInt(angka)/1000000000000))+" Trilyun "+terbilang(parseInt(angka)%1000000000000);
        }
    }

</script>
@endpush
