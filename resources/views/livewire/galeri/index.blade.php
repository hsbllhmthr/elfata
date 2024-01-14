<div class="container-fluid py-4">
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <!-- Card header -->
                @can('manage-users', App\Models\User::class)
                <div class="card-header">
                    <h5 class="mb-0">Galeri &nbsp;&nbsp;<a class="btn bg-gradient-dark mb-0 me-4 text-end" href="{{ route('tambah-galeri') }}"><i class="material-icons text-sm">add</i></a></h5>
                </div>
                @endcan
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
            </div>
            <div class="row galeri">
                @foreach ($galeris as $galeri)
                <div class="col-lg-3 mt-3">
                    <div class="card">
                        <div class="card-header p-0 position-relative z-index-2">
                            <a class="d-block blur-shadow-image image-popup-fit-width" href="/storage/{{($galeri->foto)}}">
                                <img src="/storage/{{($galeri->foto)}}" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg height-300 w-100" />
                            </a>
                            <div class="colored-shadow" style="background-image: url('/storage/{{($galeri->foto)}}');"></div>
                        </div>
                        <div class="card-body text-center">
                            @can('manage-users', App\Models\User::class)
                            <div class="d-flex mx-auto">
                                <a href="javascript:;" class="btn btn-link text-primary ms-auto border-0" onclick="confirm('Ingin menghapus data ini?') || event.stopImmediatePropagation()" wire:click="destroy({{ $galeri->id }})">
                                    <i class="material-icons text-lg">delete</i>
                                </a>
                                <a class="btn btn-link text-info me-auto border-0" href="{{ route('ubah-galeri', $galeri) }}">
                                    <i class="material-icons text-lg">edit</i>
                                </a>
                            </div>
                            @endcan
                            <h6 class="font-weight-normal">
                                {{($galeri->judul)}}
                            </h6>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@push('js')
<script src="{{ asset('assets') }}/js/plugins/perfect-scrollbar.min.js"></script>
@endpush
@push('head-datatable')
<link rel="stylesheet" href="{{ asset('assets') }}/js/plugins/magnific/magnific-popup.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="{{ asset('assets') }}/js/plugins/magnific/jquery.magnific-popup.js"></script>
<script type="text/javascript">
    
    $(document).ready(function() {
        $('.image-popup-fit-width').magnificPopup({
            type: 'image',
            closeOnContentClick: true,
            image: {
                verticalFit: false
            }
        });
    });
</script>
 @endpush