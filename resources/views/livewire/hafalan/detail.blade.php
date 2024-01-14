@php

function hari_cek($day) {
    if ($day == "Monday") {
        $hari = "Senin";
    } else if ($day == "Tuesday") {
        $hari = "Selasa";
    } else if ($day == "Wednesday") {
        $hari = "Rabu";
    } else if ($day == "Thursday") {
        $hari = "Kamis";
    } else if ($day == "Friday") {
        $hari = "Jumat";
    } else if ($day == "Saturday") {
        $hari = "Sabtu";
    } else if ($day == "Sunday") {
        $hari = "Minggu";
    }
    return $hari;
}
$tgls = request()->input('tgl')

@endphp
<div class="container-fluid py-4">
    <div class="d-sm-flex justify-content-between">
        <div>
            <button type="button" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#modal-tanggal">
              Pilih Tanggal
            </button>
            <div class="modal fade" id="modal-tanggal" tabindex="-1" role="dialog" aria-labelledby="modal-tanggal" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                <div class="modal-content">
                  <div class="modal-body p-0">
                    <div class="card card-plain">
                      <div class="card-header pb-0 text-left">
                        <p class="mb-0">Silahkan pilih tanggal data hafalan santri</p>
                      </div>
                      <div class="card-body">
                        <form role="form text-left" method="GET" action="">
                          <div class="input-group input-group-outline">
                            <input type="date" class="form-control" name="tgl">
                          </div>
                          <div class="text-center">
                            <button type="submit" class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">Pilih</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>        
    </div>

    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <!-- Card header -->
                <div class="card-header">
                    <h5 class="mb-0">Data Hafalan Santri - {{ $tgls }} &nbsp;&nbsp;<a class="btn bg-gradient-dark mb-0 me-4 text-end" href="{{ route('tambah-hafalan') }}"><i class="material-icons text-sm">add</i></a></h5>

                </div>
                @if (Session::has('status'))
                <div class="alert alert-success alert-dismissible text-white mx-4" role="alert">
                    <span class="text-sm">{{ Session::get('status') }}</span>
                    <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @elseif (Session::has('error'))
                <div class="alert alert-danger alert-dismissible text-white mx-4" role="alert">
                    <span class="text-sm">{{ Session::get('error') }}</span>
                    <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif

                <div class="col-12 text-end">
                    asd
                </div>

                <div class="table-responsive">
                    <table class="table table-flush" id="datatable-search">
                        <thead class="thead-light">
                            <tr>
                                <th>Id</th>
                                <th>Santri</th>
                                <th>Halaqah</th>
                                <th>Tanggal</th>
                                <th>Isi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($hafalans as $hafalan)
                            @php
                                $tgl = explode('-', $hafalan->tanggal)
                            @endphp
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <p class="text-xs font-weight-normal ms-2 mb-0">{{ $hafalan->id }}</p>
                                    </div>
                                </td>
                                <td class="font-weight-normal">
                                    <span class="my-2 text-xs">{{ $hafalan->santri->nama }}</span>
                                </td>
                                <td class="font-weight-normal">
                                    <span class="my-2 text-xs">{{ $hafalan->halaqah }}</span>
                                </td>
                                <td class="font-weight-normal">
                                    <span class="my-2 text-xs">{{ hari_cek(date('l', strtotime($hafalan->tanggal))) }} - {{ $hafalan->tanggal }}</span>
                                </td>
                                <td class="font-weight-normal">
                                    <span class="my-2 text-xs">{{ $hafalan->isi }}</span>
                                </td>

                                <td class="font-weight-normal">
                                    <a href="{{ route('lihat-hafalan', $hafalan) }}" data-bs-toggle="tooltip" data-bs-original-title="Lihat">
                                        <i class="material-icons text-secondary position-relative text-lg">visibility</i>
                                    </a>
                                    <a href="{{ route('ubah-hafalan', $hafalan) }}" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Ubah">
                                        <i class="material-icons text-secondary position-relative text-lg">drive_file_rename_outline</i>
                                    </a>
                                    <a href="javascript:;" data-bs-toggle="tooltip" onclick="confirm('Ingin menghapus data ini?') || event.stopImmediatePropagation()" wire:click="destroy({{ $hafalan->id }})" data-bs-original-title="Hapus">
                                        <i class="material-icons text-secondary position-relative text-lg">delete</i>
                                    </a>
                                </td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
               
            </div>
        </div>
    </div>
</div>
@push('js')
<script src="{{ asset('assets') }}/js/plugins/perfect-scrollbar.min.js"></script>
<script src="{{ asset('assets') }}/js/plugins/datatables.js"></script>
<script>
    const dataTableSearch = new simpleDatatables.DataTable("#datatable-search", {
        searchable: true,
        fixedHeight: false
    });
    document.querySelectorAll(".export").forEach(function (el) {
        el.addEventListener("click", function (e) {
            var type = el.dataset.type;

            var data = {
                type: type,
                filename: "material-" + type,
            };

            if (type === "csv") {
                data.columnDelimiter = "|";
            }

            dataTableSearch.export(data);
        });
    });
</script>
@endpush