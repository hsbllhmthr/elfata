<div class="container-fluid py-4">
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <!-- Card header -->
                <div class="card-header">
                    <h5 class="mb-0">Data Rapor &nbsp;&nbsp;<a class="btn bg-gradient-dark mb-0 me-4 text-end" href="{{ route('tambah-rapor') }}"><i class="material-icons text-sm">add</i></a></h5>
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
                <hr class="horizontal dark mt-0">
                <div class="card-body pt-0">
                <div class="col-12" id="date_filter">                       
                    <p id="date_filter">
                        <span id="date-label-from" class="date-label">Filter Tanggal: </span>
                        <input class="date_range_filter date" type="text" id="datepicker_from" />
                        <span id="date-label-to" class="date-label">Sampai:
                        <input class="date_range_filter date" type="text" id="datepicker_to" />
                        <button type="button" class="btn btn-sm btn-outline-secondary clear-date-filter mb-0">
                            Reset
                        </button>
                    </p>       
                </div> 
                <hr class="horizontal dark mt-0 mt-0">
                <div class="table-responsive">
                    <table class="table dataTable-table table-sm table-hover" id="datatables">
                        <thead class="thead-light">
                            <tr>
                                <th>Id</th>
                                <th>Santri</th>
                                <th>Musyrif/Musyrifah</th>
                                <th>Jumlah Hafalan</th>
                                <th>Halaqah/Sektor</th>
                                <th>Semester</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rapors as $rapor)                           
                            <tr>
                                <td>                                    
                                    <div class="d-flex align-items-center">
                                        <p class=" font-weight-normal ms-2 mb-0">{{ $rapor->id }}</p>
                                    </div>
                                </td>
                                <td class="text-sm font-weight-normal">
                                    <span class="my-2 ">{{ $rapor->santri->nama }}</span>
                                </td>
                                <td class="text-sm font-weight-normal">
                                    <span class="my-2 ">{{ $rapor->musyrif }}</span>
                                </td>                                
                                <td class="text-sm font-weight-normal">
                                    <span class="my-2 ">{{ $rapor->jumlahhafalan }}</span>
                                </td>
                                <td class="text-sm font-weight-normal">
                                    <span class="my-2 ">{{ $rapor->sektor }}</span>
                                </td>
                                <td class="text-sm font-weight-normal">
                                    <span class="my-2 ">{{ $rapor->semester }}</span>
                                </td>
                                <td class="text-sm font-weight-normal">
                                    {{ $rapor->tanggal }}
                                </td>
                                <td class="text-sm font-weight-normal align-items-center">
                                    <a href="{{ route('lihat-rapor', $rapor) }}" data-bs-toggle="tooltip" data-bs-original-title="Lihat Rapor">
                                        <i class="material-icons text-secondary position-relative text-lg">visibility</i>
                                        </a>
                                    <a href="{{ route('ubah-rapor', $rapor) }}" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Ubah">
                                        <i class="material-icons text-secondary position-relative text-lg">drive_file_rename_outline</i>
                                    </a>
                                    <a href="javascript:;" data-bs-toggle="tooltip" onclick="confirm('Ingin menghapus data ini?') || event.stopImmediatePropagation()" wire:click="destroy({{ $rapor->id }})" data-bs-original-title="Hapus">
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
<script src="{{ asset('assets') }}/js/plugins/flatpickr.min.js"></script>
<script>
    if (document.querySelector('.datetimepicker')) {
        flatpickr('.datetimepicker', {
            allowInput: true
        }); // flatpickr
    }
</script>
@endpush
@push('head-datatable')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.2.4/js/dataTables.fixedHeader.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
         $.fn.dataTable.ext.search.push(
            function (settings, data, dataIndex) {
                var min = $('#datepicker_from').datepicker('getDate');
                var max = $('#datepicker_to').datepicker('getDate');
                var startDate = new Date($.trim(data[3]));
                if (min == null && max == null) return true;
                if (min == null && startDate <= max) return true;
                if (max == null && startDate >= min) return true; 
                if (startDate <= max && startDate >= min) return true;
                return false;
            }
        );
        $('#datepicker_from').datepicker({ onSelect: function () { table.draw(); }, changeMonth: true, changeYear: true });
        $('#datepicker_to').datepicker({ onSelect: function () { table.draw(); }, changeMonth: true, changeYear: true });
        var table = $('#datatables').DataTable({
            responsive: true,
            fixedHeader: true,
            fixedColumns: true,
        });
        $('#datepicker_from,#datepicker_to').change(function () {
            table.draw();
        });
        $(".clear-date-filter").on("click", function() {
         $('#datepicker_from').val("").datepicker("update");
         $('#datepicker_to').val("").datepicker("update");
        });

    });
</script>
 @endpush