<div class="container-fluid my-3 py-3">
    <div class="row">
        <div class="col-md-10 col-lg-10 col-sm-10 mx-auto">
            <div class="card">
                <div class="card-header text-center">
                    <div class="row justify-content-between">
                        <div class="col-md-12 text-center">
                            <img class="mb-2 mx-auto" style="width:100%;" src="{{ asset('assets') }}/img/kop-rapor.png">
                            <div class="row text-start p-3">
                                <div class="col-sm-6 col-print-6">
                                    <div class="w-100">
                                        <div class="align-items-center mb-2">
                                            <div class="row">
                                                <div class="col-sm-6 col-print-6">
                                                    <span class="me-2 text-sm font-weight-bold text-capitalize ms-2">Nama Santri</span>
                                                </div>
                                                <div class="col-sm-6 col-print-6">
                                                    <span class="text-sm font-weight-bold">: {{ $rapor->santri->nama }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="align-items-center mb-2">
                                            <div class="row">
                                                <div class="col-sm-6 col-print-6">
                                                    <span class="me-2 text-sm font-weight-bold text-capitalize ms-2">Alamat</span>
                                                </div>
                                                <div class="col-sm-6 col-print-6">
                                                    <span class="text-sm font-weight-bold">: {{ $rapor->santri->alamat }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="align-items-center mb-2">
                                            <div class="row">
                                                <div class="col-sm-6 col-print-6">
                                                    <span class="me-2 text-sm font-weight-bold text-capitalize ms-2">Musyrif/Musyrifah</span>
                                                </div>
                                                <div class="col-sm-6 col-print-6">
                                                    <span class="text-sm font-weight-bold">: {{ $rapor->musyrif }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-print-6">
                                    <div class="w-100">
                                        <div class="align-items-center mb-2">
                                            <div class="row">
                                                <div class="col-sm-6 col-print-6">
                                                    <span class="me-2 text-sm font-weight-bold text-capitalize ms-2">Jumlah Hafalan</span>
                                                </div>
                                                <div class="col-sm-6 col-print-6">
                                                    <span class="text-sm font-weight-bold">: {{ $rapor->jumlahhafalan }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="align-items-center mb-2">
                                            <div class="row">
                                                <div class="col-sm-6 col-print-6">
                                                    <span class="me-2 text-sm font-weight-bold text-capitalize ms-2">Halaqah/Sektor</span>
                                                </div>
                                                <div class="col-sm-6 col-print-6">
                                                    <span class="text-sm font-weight-bold">: {{ $rapor->sektor }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="align-items-center mb-2">
                                            <div class="row">
                                                <div class="col-sm-6 col-print-6">
                                                    <span class="me-2 text-sm font-weight-bold text-capitalize ms-2">Semester</span>
                                                </div>
                                                <div class="col-sm-6 col-print-6">
                                                    <span class="text-sm font-weight-bold">: {{ $rapor->semester }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                                    
                    </div>
                </div>
                <div class="card-body" style="margin-top: -50px;">
                    <div class="row">
                        <div class="col-12">
                            <div class=" d-flex">
                                <table class="table table-sm">
                                    <tbody>
                                        <tr>
                                            <td colspan="5">
                                                <strong>A. </strong><strong>Penilaian Harian</strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>No</strong>
                                            </td>
                                            <td>
                                                <strong>Aspek</strong>
                                            </td>
                                            <td>
                                                <strong>Nilai</strong>
                                            </td>
                                            <td colspan="2">
                                                <strong>Deskripsi</strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                1
                                            </td>
                                            <td>
                                                Kelancaran
                                            </td>
                                            <td>
                                                {{ $rapor->nilai_a1 }}
                                            </td>
                                            <td colspan="2">
                                                {{ $rapor->nilai_a1_ket }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                2
                                            </td>
                                            <td>
                                                Makhraj
                                            </td>
                                            <td>
                                                {{ $rapor->nilai_a2 }}
                                            </td>
                                            <td colspan="2">
                                                {{ $rapor->nilai_a2_ket }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                3
                                            </td>
                                            <td>
                                                Tajwid
                                            </td>
                                            <td>
                                                {{ $rapor->nilai_a3 }}
                                            </td>
                                            <td colspan="2">
                                                {{ $rapor->nilai_a3_ket }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                4
                                            </td>
                                            <td>
                                                Pencapaian Target Hafalan
                                            </td>
                                            <td>
                                                {{ $rapor->nilai_a4 }}
                                            </td>
                                            <td colspan="2">
                                                {{ $rapor->nilai_a4_ket }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5">
                                                <strong>B. </strong><strong>Ujian Semester</strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                5
                                            </td>
                                            <td>
                                                Kelancaran
                                            </td>
                                            <td>
                                                {{ $rapor->nilai_b1 }}
                                            </td>
                                            <td colspan="2">
                                                {{ $rapor->nilai_b1_ket }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                6
                                            </td>
                                            <td>
                                                Makhraj
                                            </td>
                                            <td>
                                                {{ $rapor->nilai_b2 }}
                                            </td>
                                            <td colspan="2">
                                                {{ $rapor->nilai_b2_ket }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                7
                                            </td>
                                            <td>
                                                Tajwid
                                            </td>
                                            <td>
                                                {{ $rapor->nilai_b3 }}
                                            </td>
                                            <td colspan="2">
                                                {{ $rapor->nilai_b3_ket }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5">
                                                <strong>C. </strong><strong>Lain-lain</strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                8
                                            </td>
                                            <td>
                                                Adab
                                            </td>
                                            <td>
                                                {{ $rapor->nilai_c1 }}
                                            </td>
                                            <td colspan="2">
                                                {{ $rapor->nilai_c1_ket }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                9
                                            </td>
                                            <td>
                                                Kehadiran
                                            </td>
                                            <td>
                                                {{ $rapor->nilai_c2 }}
                                            </td>
                                            <td colspan="2">
                                                {{ $rapor->nilai_c2_ket }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <strong>Jumlah Nilai</strong>
                                            </td>
                                            <td colspan="2">
                                                <strong>{{ $jumlah=$rapor->nilai_a1+$rapor->nilai_a2+$rapor->nilai_a3+$rapor->nilai_a4+$rapor->nilai_b1+$rapor->nilai_b2+$rapor->nilai_b3+$rapor->nilai_c1+$rapor->nilai_c2 }}</strong>
                                            </td>
                                            <td>
                                                <strong>Tujuh Ratus Dua Puluh Empat</strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <strong>Nilai rata-rata</strong>
                                            </td>
                                            <td colspan="2">
                                                <strong>{{ $rata = number_format($jumlah/9,2) }}</strong>
                                            </td>
                                            <td>
                                                @php
                                                    if (($rata > 98) && ($rata <=100)) { $skala = 'Mumtaz Murtafi'; } else if (($rata >= 90) && ($rata <= 97)) { $skala = 'Mumtaz'; } else if (($rata >= 86) && ($rata <= 89)) { $skala = 'Jayyid Jiddan'; } else if (($rata >= 70) && ($rata <= 85)) { $skala = 'Jayyid'; } else if (($rata >= 60) && ($rata <= 69)) { $skala = 'Maqbul'; } else if (($rata >= 0) && ($rata <= 59)) { $skala = 'Rhasib'; }
                                                @endphp
                                                <strong>{{ $skala }}</strong>        
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">                                    
                        <div class="col-lg-12 text-md-center mt-md-0 mt-3">
                            <button type="button" class="btn btn-outline-info btn-lg btn-icon" id="cetak">
                                <span class="btn-inner--icon"><i class="material-icons">print</i></span>
                                <span class="btn-inner--text">Cetak</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('js')
<style type="text/css">
    table.table-fit {
        width: auto !important;
        table-layout: auto !important;
    }
    table.table-fit thead th, table.table-fit tfoot th {
        width: auto !important;
    }
    table.table-fit tbody td, table.table-fit tfoot td {
        width: auto !important;
    }
    .table td, .table th {
        white-space: normal;
    }
</style>
<script src="{{ asset('assets') }}/js/plugins/perfect-scrollbar.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('assets') }}/js/plugins/printhis/printThis.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#cetak").click(function(){
            $(".card-header, .card-body").printThis({
                loadCSS: "{{ asset('assets') }}/js/plugins/printhis/print.css",
            });
        });
    });
</script>
@endpush
