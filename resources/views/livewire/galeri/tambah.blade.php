<div class="container-fluid py-4">
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <!-- Card header -->
                <div class="card-header">
                    <h5 class="mb-0">Tambah Galeri Foto</h5>
                    <p>Silahkan upload galeri foto</p>
                </div>
                <div class="col-12 text-end">
                    <a class="btn bg-gradient-dark mb-0 me-4" href="{{ route('galeri') }}">Kembali</a>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="store" class='d-flex flex-column align-items-center'
                        enctype="multipart/form-data">

                        <div class="position-relative">
                            <div class="position-relative preview">
                                <label for="file-input"
                                    class="btn btn-sm btn-icon-only bg-gradient-light position-absolute bottom-0 end-0 mb-n2 me-n2">
                                    <i class="fa fa-pen top-0" data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="" aria-hidden="true" data-bs-original-title="Upload Foto"
                                        aria-label="Upload Foto"></i><span class="sr-only">Upload Foto</span>
                                </label>
                                <span class="h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                                    @if ($foto)
                                    <img src="{{ $foto->temporaryUrl() }}" alt="Profile Photo">
                                    @else
                                    <img src="{{ asset('assets') }}/img/placeholder.jpg" alt="avatar">
                                    @endif</span>

                                <input wire:model="foto" type="file" id="file-input">
                            </div>
                        </div>
                        @error('foto')
                        <p class='text-danger inputerror'>{{ $message }} </p>
                        @enderror
                        <div class="form-group col-12 col-md-6 mt-3">

                            <label for="exampleInputname">Judul Foto</label>
                            <input wire:model.lazy="judul" type="text" class="form-control border border-2 p-2"
                                id="exampleInputname" placeholder="Judul Foto">
                                @error('judul')
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
<script src="{{ asset('assets') }}/js/plugins/quill.min.js"></script>
<script src="{{ asset('assets') }}/js/plugins/flatpickr.min.js"></script>
<script src="{{ asset('assets') }}/js/plugins/choices.min.js"></script>

@endpush
