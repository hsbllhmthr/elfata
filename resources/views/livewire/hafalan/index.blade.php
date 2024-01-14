<div class="container-fluid py-4">
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <!-- Card header -->
                <div class="card-header">
                    <h5 class="mb-0">Data Hafalan Santri &nbsp;&nbsp;<a class="btn bg-gradient-dark mb-0 me-4 text-end" href="{{ route('tambah-hafalan') }}"><i class="material-icons text-sm">add</i></a></h5>
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
                            <input class="date_range_filter date" type="text" id="datepicker_from" name="datepicker_from" />
                            <span id="date-label-to" class="date-label">Sampai:
                                <input class="date_range_filter date" type="text" id="datepicker_to" name="datepicker_to" />
                                <button type="button" class="btn btn-sm btn-outline-secondary clear-date-filter mb-0">
                                    Reset
                                </button>
                        </p>
                    </div>
                    <hr class="horizontal dark mt-0 mt-0">
                    <div class="table-responsive">
                        <table class="table dataTable-table table-sm table-hover" id="datatables">
                            <thead class="">
                                <tr>
                                    <th>Id</th>
                                    <th>Santri</th>
                                    <th>Halaqah</th>
                                    <th>Tanggal</th>
                                    <th>Isi</th>
                                    <th>Nilai</th>
                                    <th>Link</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($hafalans as $hafalan)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <p class=" font-weight-normal ms-2 mb-0">{{ $hafalan->id }}</p>
                                        </div>
                                    </td>
                                    <td class="text-sm font-weight-normal">
                                        <span class="my-2 ">{{ $hafalan->santri->nama }}</span>
                                    </td>
                                    <td class="text-sm font-weight-normal">
                                        <span class="my-2 ">{{ $hafalan->halaqah }}</span>
                                    </td>
                                    <td class="text-sm font-weight-normal">
                                        {{ $hafalan->tanggal }}
                                    </td>
                                    <td class="text-sm font-weight-normal">
                                        <span class="my-2 ">{{ $hafalan->isi }}</span>
                                    </td>
                                    <td class="text-sm font-weight-normal">
                                        <span class="my-2 ">Nilai kelancaran: {{ $hafalan->nilai1 }}</span><br />
                                        <span class="my-2 ">Nilai makhroj: {{ $hafalan->nilai2 }}</span><br />
                                        <span class="my-2 ">Nilai tajwid: {{ $hafalan->nilai3 }}</span>
                                    </td>
                                    <td class="text-sm font-weight-normal">
                                        <span class="my-2 "><a href="{{ $hafalan->link }}" target="_blank">Lihat</a></span>
                                    </td>
                                    <td class="text-sm font-weight-normal align-items-center">
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
</div>
@push('js')
<script src="{{ asset('assets') }}/js/plugins/perfect-scrollbar.min.js"></script>
<script src="{{ asset('assets') }}/js/plugins/flatpickr.min.js"></script>
<script src="{{ asset('assets') }}/js/plugins/datatables.js"></script>
<script>
    if (document.querySelector('.datetimepicker')) {
        flatpickr('.datetimepicker', {
            allowInput: true
        }); // flatpickr
    }
</script>
@endpush
@push('head-datatable')
<!-- <script src="http://code.jquery.com/jquery-2.0.3.min.js" data-semver="2.0.3" data-require="jquery"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.0/jquery-ui.js"></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.0/css/smoothness/jquery-ui-1.10.0.custom.min.css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/jquery.dataTables.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.2.4/js/dataTables.fixedHeader.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $.fn.dataTable.ext.search.push(
            function(settings, data, dataIndex) {
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
        $('#datepicker_from').datepicker({
            onSelect: function() {
                table.draw();
            },
            changeMonth: true,
            changeYear: true
        });
        $('#datepicker_to').datepicker({
            onSelect: function() {
                table.draw();
            },
            changeMonth: true,
            changeYear: true
        });
        var table = $('#datatables').DataTable({
            responsive: true,
            fixedHeader: true,
            fixedColumns: true,
        });
        $('#datepicker_from,#datepicker_to').change(function() {
            table.draw();
        });
        $(".clear-date-filter").on("click", function() {
            $('#datepicker_from').val("").datepicker("update");
            $('#datepicker_to').val("").datepicker("update");
        });

    });
</script>
<!-- <script type="text/javascript">
    $(function () {
        var oTable = $("#datatables").DataTable({
            oLanguage: {
                sSearch: "Cari",
            },
            sPaginationType: "full_numbers",
        });
        $(".first.paginate_button, .last.paginate_button").hide(); 

        $("#datepicker_from")
            .datepicker({
                showOn: "button",
                buttonImage: "{{ asset('assets') }}/img/icons/calendar.png",
                buttonImageOnly: false,
                onSelect: function (date) {
                    minDateFilter = new Date(date).getTime();
                    oTable.fnDraw();
                },
            })
            .keyup(function () {
                minDateFilter = new Date(this.value).getTime();
                oTable.fnDraw();
        });

        $("#datepicker_to")
            .datepicker({
                showOn: "button",
                buttonImage: "{{ asset('assets') }}/img/icons/calendar.png",
                buttonImageOnly: false,
                onSelect: function (date) {
                    maxDateFilter = new Date(date).getTime();
                    window.console.log(maxDateFilter);
                    oTable.fnDraw();
                },
            })
            .keyup(function () {
                maxDateFilter = new Date(this.value).getTime();
                oTable.fnDraw();
        });
    });
    minDateFilter = "";
    maxDateFilter = "";
    $.fn.dataTableExt.afnFiltering.push(function (oSettings, aData, iDataIndex) {
        if (typeof aData._date == "undefined") {
            aData._date = new Date(aData[3]).getTime();
        }
        if (minDateFilter && !isNaN(minDateFilter)) {
            if (aData._date <= minDateFilter) {
                return false;
            } else if (minDateFilter == aData._date) {
                return false;
            }
        }
        if (maxDateFilter && !isNaN(maxDateFilter)) {
            if (aData._date >= maxDateFilter) {
                return false;
            } else if (minDateFilter == maxDateFilter) {
                return false;
            }
        }
        return true;
    });
</script> -->
@endpush