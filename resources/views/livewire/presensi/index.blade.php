<div class="container-fluid py-4">
    <div class="row">
        <div class="col-lg-12 position-relative z-index-2">
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
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 mt-5">
                    <div class="card">
                        <div class="card-body p-3 pt-2">
                            <a href="{{ route('datas-presensi', 'Gowa') }}">
                                <div class="text-center pt-1">
                                    <h4 class="mb-0">Cabang Gowa</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 mt-5">
                    <div class="card">
                        <div class="card-body p-3 pt-2">
                            <a href="{{ route('datas-presensi', 'Makassar') }}">
                                <div class="text-center pt-1">
                                    <h4 class="mb-0">Cabang Makassar</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 mt-5">
                    <div class="card">
                        <div class="card-body p-3 pt-2">
                            <a href="{{ route('datas-presensi', 'Takalar') }}">
                                <div class="text-center pt-1">
                                    <h4 class="mb-0">Cabang Takalar</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 mt-5">
                    <div class="card">
                        <div class="card-body p-3 pt-2">
                            <a href="{{ route('datas-presensi', 'Soppeng') }}">
                                <div class="text-center pt-1">
                                    <h4 class="mb-0">Cabang Soppeng</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @push('js')
    <script src="{{ asset('assets') }}/js/plugins/perfect-scrollbar.min.js"></script>
    @endpush