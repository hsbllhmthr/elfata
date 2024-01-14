<div class="container-fluid py-4">
    <div class="row mt-4">
        <div class="col-12">
            <div class="card" id="basic-info">
                <!-- Card header -->
                <div class="card-header">
                    <h5 class="mb-0">Tambah Presensi Santri Soppeng</h5>
                    <p>Silahkan isi data dengan baik dan benar</p>
                </div>
                <div class="col-12 text-end">
                    <a class="btn bg-gradient-dark mb-0 me-4" href="{{ route('presensi') }}">Kembali</a>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="store" class='d-flex flex-column align-items-center' enctype="multipart/form-data">

                        <div class="form-group col-6 col-md-6 mt-3">
                            <label>Pilih Tanggal</label>
                            <input wire:model="tanggal" type="date" class="form-control border border-2 p-2" value='{{ old('tanggal') }}'>
                            @error('tanggal')
                            <p class='text-danger inputerror'>{{ $message }} </p>
                            @enderror
                        </div>
                        <!-- <input name="cabang" type="text" class="form-control border border-2 p-2" value="{{ request()->query('cabang') }}"> -->


                        <div class="form-group col-12 col-md-6 mt-3">
                            <div class="table-responsive d-flex align-items-center">
                                <table class="table" id="dynamic_field">
                                    <thead>
                                        <tr>
                                            <th class="ps-1" colspan="4">
                                                <p class="mb-0"><strong>Santri</strong></p>
                                            </th>
                                            <th class="text-center">
                                                <p class="mb-0"><strong>Keterangan</strong></p>
                                            </th>
                                            <th class="text-center">
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="ps-1" colspan="4">
                                                <select wire:model.lazy="santri_id.0" class="form-select border border-2 p-2">
                                                    <option value=""></option>
                                                    @foreach ($santris as $santri)
                                                    <option value="{{ $santri->id }}" {{ old('santri_id') == $santri->id ? 'selected' : ''}}>{{ $santri->nama }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <select wire:model="ket.0" class="form-select border border-2 p-2 pilih">
                                                        <option value=""></option>
                                                        <option value="Hadir">Hadir</option>
                                                        <option value="Alfa">Alfa</option>
                                                        <option value="Libur">Libur</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check d-flex align-items-center justify-content-center">
                                                    <button type="button" class="btn btn-slack btn-icon-only" wire:click.prevent="add({{$i}})">
                                                        <i class="material-icons">add</i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        @foreach($inputs as $key => $value)
                                        <tr>
                                            <td class="ps-1" colspan="4">
                                                <select wire:model="santri_id.{{ $value }}" class="form-select border border-2 p-2 pilih">
                                                    <option value=""></option>
                                                    @foreach ($santris as $santri)
                                                    <option value="{{ $santri->id }}" {{ old('santri_id') == $santri->id ? 'selected' : ''}}>{{ $santri->nama }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <select wire:model="ket.{{ $value }}" class="form-select border border-2 p-2 pilih">
                                                        <option value=""></option>
                                                        <option value="Hadir">Hadir</option>
                                                        <option value="Alfa">Alfa</option>
                                                        <option value="Libur">Libur</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check d-flex align-items-center justify-content-center">
                                                    <button type="button" class="btn btn-pinterest btn-icon-only" wire:click.prevent="remove({{$key}})">
                                                        <i class="material-icons">remove</i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-dark mt-3">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@push('js')
<style type="text/css">
    .table-responsive {
        overflow-x: auto;
        overflow-y: hidden;
    }
</style>
<script src="{{ asset('assets') }}/js/plugins/perfect-scrollbar.min.js"></script>
<script src="https://code.jquery.com/jquery-2.0.3.min.js" data-semver="2.0.3" data-require="jquery"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.0/jquery-ui.js"></script>

<script>
    $(document).ready(function() {

        var i = 1;
        $('#add').click(function() {
            i++;
            $('#dynamic_field').append(
                '<tr id="row' + i + '" ><td class="ps-1" colspan="4">' +
                '<select wire:model.lazy="santri_id" class="form-select border border-2 p-2" name="santri_id[]">' +
                @foreach($santris as $santri)
                '<option value="{{ $santri->id }}" {{ old('
                santri_id ') == $santri->id ? '
                selected ' : '
                '}}>{{ $santri->nama }}</option>' +
                @endforeach '</select> </td> <td> <div class="d-flex align-items-center justify-content-center"> <select wire:model="ket" class="form-select border border-2 p-2" name="ket[]"> <option value="Hadir">Hadir</option> <option value="Alfa">Alfa</option> <option value="Libur">Libur</option> </select> </div> </td> <td> <div class="form-check  d-flex align-items-center justify-content-center"> <button type="button" name="remove" id="' + i + '" class="btn btn-pinterest btn-icon-only btn_remove"><i class="material-icons">remove</i> </button> </div> </td> </tr>');
        });

        $(document).on('click', '.btn_remove', function() {
            var button_id = $(this).attr("id");
            $('#row' + button_id + '').remove();
        });
    });
</script>
@endpush