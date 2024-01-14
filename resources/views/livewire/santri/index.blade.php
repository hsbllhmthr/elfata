<div class="container-fluid py-4">
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <!-- Card header -->
                <div class="card-header">
                    <h5 class="mb-0">Data Santri &nbsp;&nbsp;<a class="btn bg-gradient-dark mb-0 me-4 text-end" href="{{ route('tambah-santri') }}"><i class="material-icons text-sm">add</i></a></h5>

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

                <div class="card-body pt-0">
                    <div class="table-responsive">
                        <table class="table dataTable-table table-sm table-hover" id="datatables">
                            <thead class="thead-light">
                                <tr>
                                    <th>Id</th>
                                    <th>Cabang</th>
                                    <th>Sektor</th>
                                    <th>Nis</th>
                                    <th>Nama</th>
                                    <th>Tempat, Tanggal Lahir</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($santris as $santri)
                                <tr>
                                    <td>{{ $santri->id }}</td>
                                    <td>{{ $santri->cabang }}</td>
                                    <td>{{ $santri->sektor }}</td>
                                    <td>{{ $santri->nis }}</td>
                                    <td>{{ $santri->nama }}</td>
                                    <td>{{ $santri->tempatlahir }}, {{ $santri->tgllahir }}</td>
                                    <td>{{ $santri->jk }}</td>
                                    <td class="text-sm font-weight-normal align-items-center">
                                        <a href="{{ route('lihat-santri', $santri) }}" data-bs-toggle="tooltip" data-bs-original-title="Lihat">
                                            <i class="material-icons text-secondary position-relative text-lg">visibility</i>
                                        </a>
                                        <a href="{{ route('ubah-santri', $santri) }}" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Ubah">
                                            <i class="material-icons text-secondary position-relative text-lg">drive_file_rename_outline</i>
                                        </a>
                                        <a href="javascript:;" data-bs-toggle="tooltip" onclick="confirm('Ingin menghapus data ini?') || event.stopImmediatePropagation()" wire:click="destroy({{ $santri->id }})" data-bs-original-title="Hapus">
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
</div>
@push('js')
<script src="{{ asset('assets') }}/js/plugins/perfect-scrollbar.min.js"></script>
@endpush
@push('head-datatable')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.2.4/js/dataTables.fixedHeader.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        var table = $('#datatables').DataTable({
            responsive: true,
            fixedHeader: true,
            fixedColumns: true,
        });
    });
</script>
@endpush