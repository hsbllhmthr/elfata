<div class="container-fluid py-4">
    <div class="row">
        <div class="col-lg-12 position-relative z-index-2">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 mt-5">
                    <div class="card">
                        <div class="card-body p-3 pt-2">
                            <a href="">
                                <div class="icon icon-lg icon-shape bg-gradient-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10" aria-hidden="true">person</i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-sm mb-0 text-capitalize">Total Santri</p>
                                    <h4 class="mb-0">{{ $santris->count() }}</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mt-5">
                    <div class="card">
                        <div class="card-body p-3 pt-2">
                            <a href="">
                                <div class="icon icon-lg icon-shape bg-gradient-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10" aria-hidden="true">supervisor_account</i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-sm mb-0 text-capitalize">Total Guru</p>
                                    <h4 class="mb-0">{{ $gurus->count() }}</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mt-5">
                    <div class="card">
                        <div class="card-body p-3 pt-2">
                            <a href="">
                                <div class="icon icon-lg icon-shape bg-gradient-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10" aria-hidden="true">document_scanner</i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-sm mb-0 text-capitalize">Total Presensi</p>
                                    <h4 class="mb-0">{{ $presensis->count() }}</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mt-5">
                    <div class="card">
                        <div class="card-body p-3 pt-2">
                            <a href="">
                                <div class="icon icon-lg icon-shape bg-gradient-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10" aria-hidden="true">content_paste</i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-sm mb-0 text-capitalize">Total Setoran Hafalan</p>
                                    <h4 class="mb-0">{{ $hafalans->count() }}</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mt-5">
                    <div class="card">
                        <div class="card-body p-3 pt-2">
                            <a href="">
                                <div class="icon icon-lg icon-shape bg-gradient-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10" aria-hidden="true">receipt_long</i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-sm mb-0 text-capitalize">Total Pembayaran</p>
                                    <h4 class="mb-0">{{ $pembayarans->count() }}</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mt-5">
                    <div class="card">
                        <div class="card-body p-3 pt-2">
                            <a href="">
                                <div class="icon icon-lg icon-shape bg-gradient-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10" aria-hidden="true">feed</i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-sm mb-0 text-capitalize">Total Rapor</p>
                                    <h4 class="mb-0">{{ $rapors->count() }}</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-lg-12 col-12">
                    <div class="card">
                        <div class="card-body">
                            <img class="w-100" src="{{ asset('assets') }}/img/banner2.png">
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
@push('js')
<script src="{{ asset('assets') }}/js/plugins/perfect-scrollbar.min.js"></script>
@endpush