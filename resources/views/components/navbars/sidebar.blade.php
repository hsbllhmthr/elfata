<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0 p-4 d-flex align-items-center text-wrap" href="{{ route('dasbor') }}">
            <img src="{{ asset('assets') }}/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-2 font-weight-bold text-white">El-Fata<br />Foundation</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto h-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">

            <li class="nav-item mb-2 mt-0">
                <a data-bs-toggle="collapse" href="#ProfileNav" class="nav-link text-white" aria-controls="ProfileNav" role="button" aria-expanded="false">
                    @if (auth()->user()->picture)
                    <img src="/storage/{{(auth()->user()->picture)}}" alt="avatar" class="avatar">
                    @else
                    <img src="{{ asset('assets') }}/img/default-avatar.png" alt="avatar" class="avatar">
                    @endif
                    <span class="nav-link-text ms-2 ps-1">{{ auth()->user()->name }}</span>
                </a>
                <div class="collapse" id="ProfileNav" style="">
                    <ul class="nav ">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('ubah-password') }}">
                                <span class="sidenav-mini-icon"> - </span>
                                <span class="sidenav-normal  ms-3  ps-1"> Ubah Password </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <livewire:auth.logout />
                        </li>
                    </ul>
                </div>
            </li>

            <hr class="horizontal light mt-0">
            <li class="nav-item {{ Route::currentRouteName() == 'dasbor' ? 'active' : '' }}">
                <a href="{{ route('dasbor') }}" class="nav-link text-white {{ Route::currentRouteName() == 'dasbor' ? 'active' : '' }} " aria-controls="dashboardsExamples">
                    <i class="material-icons-round opacity-10">dashboard</i>
                    <span class="nav-link-text ms-2 ps-1">Dasbor</span>
                </a>
            </li>

            <li class="nav-item mt-3">
                <h6 class="ps-4  ms-2 text-uppercase text-xs font-weight-bolder text-white">Data</h6>
            </li>

            @can('manage-users', App\Models\User::class)
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#applicationsExamples" class="nav-link text-white {{ strpos(Request::route()->uri(), 'applications') === false ? '' : 'active' }}" aria-controls="applicationsExamples" role="button" aria-expanded="false">
                    <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">person</i>
                    <span class="nav-link-text ms-2 ps-1">Santri</span>
                </a>
                <div class="collapse {{ strpos(Request::route()->uri(), 'applications') === false ? '' : 'show' }}" id="applicationsExamples">
                    <ul class="nav ">
                        <li class="nav-item {{ Route::currentRouteName() == 'santri' ? 'active' : '' }}">
                            <a class="nav-link text-white {{ Route::currentRouteName() == 'santri' ? 'active' : '' }}" href="{{ route('santri') }}">
                                <span class="sidenav-mini-icon"> - </span>
                                <span class="sidenav-normal  ms-2  ps-1"> Lihat Data </span>
                            </a>
                        </li>
                        <li class="nav-item {{ Route::currentRouteName() == 'tambah-santri' ? 'active' : '' }}">
                            <a class="nav-link text-white {{ Route::currentRouteName() == 'tambah-santri' ? 'active' : '' }}" href="{{ route('tambah-santri') }}">
                                <span class="sidenav-mini-icon"> - </span>
                                <span class="sidenav-normal  ms-2  ps-1"> Tambah Data </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#applicationsExamples2" class="nav-link text-white {{ strpos(Request::route()->uri(), 'applications') === false ? '' : 'active' }}" aria-controls="applicationsExamples2" role="button" aria-expanded="false">
                    <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">supervisor_account</i>
                    <span class="nav-link-text ms-2 ps-1">Guru</span>
                </a>
                <div class="collapse {{ strpos(Request::route()->uri(), 'applications') === false ? '' : 'show' }}" id="applicationsExamples2">
                    <ul class="nav ">
                        <li class="nav-item {{ Route::currentRouteName() == 'guru' ? 'active' : '' }}">
                            <a class="nav-link text-white {{ Route::currentRouteName() == 'guru' ? 'active' : '' }}" href="{{ route('guru') }}">
                                <span class="sidenav-mini-icon"> - </span>
                                <span class="sidenav-normal  ms-2  ps-1"> Lihat Data </span>
                            </a>
                        </li>
                        <li class="nav-item {{ Route::currentRouteName() == 'tambah-guru' ? 'active' : '' }}">
                            <a class="nav-link text-white {{ Route::currentRouteName() == 'tambah-guru' ? 'active' : '' }}" href="{{ route('tambah-guru') }}">
                                <span class="sidenav-mini-icon"> - </span>
                                <span class="sidenav-normal  ms-2  ps-1"> Tambah Data </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item {{ Route::currentRouteName() == 'presensi' ? 'active' : '' }}">
                <a href="{{ route('presensi') }}" class="nav-link text-white {{ Route::currentRouteName() == 'presensi' ? 'active' : '' }} " aria-controls="dashboardsExamples">
                    <i class="material-icons-round opacity-10">document_scanner</i>
                    <span class="nav-link-text ms-2 ps-1">Presensi</span>
                </a>
            </li>
            <!-- <li class="nav-item">
                <a data-bs-toggle="collapse" href="#applicationsExamples4" class="nav-link text-white {{ strpos(Request::route()->uri(), 'applications') === false ? '' : 'active' }}" aria-controls="applicationsExamples4" role="button" aria-expanded="false">
                    <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">document_scanner</i>
                    <span class="nav-link-text ms-2 ps-1">Presensi</span>
                </a>
                <div class="collapse {{ strpos(Request::route()->uri(), 'applications') === false ? '' : 'show' }}" id="applicationsExamples4">
                    <ul class="nav ">
                        <li class="nav-item {{ Route::currentRouteName() == 'presensi' ? 'active' : '' }}">
                            <a class="nav-link text-white {{ Route::currentRouteName() == 'presensi' ? 'active' : '' }}" href="{{ route('presensi') }}">
                                <span class="sidenav-mini-icon"> - </span>
                                <span class="sidenav-normal  ms-2  ps-1"> Lihat Data </span>
                            </a>
                        </li>
                        <li class="nav-item {{ Route::currentRouteName() == 'tambah-presensi' ? 'active' : '' }}">
                            <a class="nav-link text-white {{ Route::currentRouteName() == 'tambah-presensi' ? 'active' : '' }}" href="{{ route('tambah-presensi') }}">
                                <span class="sidenav-mini-icon"> - </span>
                                <span class="sidenav-normal  ms-2  ps-1"> Tambah Data </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li> -->
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#applicationsExamples5" class="nav-link text-white {{ strpos(Request::route()->uri(), 'applications') === false ? '' : 'active' }}" aria-controls="applicationsExamples5" role="button" aria-expanded="false">
                    <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">content_paste</i>
                    <span class="nav-link-text ms-2 ps-1">Setoran Hafalan</span>
                </a>
                <div class="collapse {{ strpos(Request::route()->uri(), 'applications') === false ? '' : 'show' }}" id="applicationsExamples5">
                    <ul class="nav ">
                        <li class="nav-item {{ Route::currentRouteName() == 'hafalan' ? 'active' : '' }}">
                            <a class="nav-link text-white {{ Route::currentRouteName() == 'hafalan' ? 'active' : '' }}" href="{{ route('hafalan') }}">
                                <span class="sidenav-mini-icon"> - </span>
                                <span class="sidenav-normal  ms-2  ps-1"> Lihat Data </span>
                            </a>
                        </li>
                        <li class="nav-item {{ Route::currentRouteName() == 'tambah-hafalan' ? 'active' : '' }}">
                            <a class="nav-link text-white {{ Route::currentRouteName() == 'tambah-hafalan' ? 'active' : '' }}" href="{{ route('tambah-hafalan') }}">
                                <span class="sidenav-mini-icon"> - </span>
                                <span class="sidenav-normal  ms-2  ps-1"> Tambah Data </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#applicationsExamples6" class="nav-link text-white {{ strpos(Request::route()->uri(), 'applications') === false ? '' : 'active' }}" aria-controls="applicationsExamples6" role="button" aria-expanded="false">
                    <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">receipt_long</i>
                    <span class="nav-link-text ms-2 ps-1">Pembayaran Santri</span>
                </a>
                <div class="collapse {{ strpos(Request::route()->uri(), 'applications') === false ? '' : 'show' }}" id="applicationsExamples6">
                    <ul class="nav ">
                        <li class="nav-item {{ Route::currentRouteName() == 'pembayaran' ? 'active' : '' }}">
                            <a class="nav-link text-white {{ Route::currentRouteName() == 'pembayaran' ? 'active' : '' }}" href="{{ route('pembayaran') }}">
                                <span class="sidenav-mini-icon"> - </span>
                                <span class="sidenav-normal  ms-2  ps-1"> Lihat Data </span>
                            </a>
                        </li>
                        <li class="nav-item {{ Route::currentRouteName() == 'tambah-pembayaran' ? 'active' : '' }}">
                            <a class="nav-link text-white {{ Route::currentRouteName() == 'tambah-pembayaran' ? 'active' : '' }}" href="{{ route('tambah-pembayaran') }}">
                                <span class="sidenav-mini-icon"> - </span>
                                <span class="sidenav-normal  ms-2  ps-1"> Tambah Data </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#applicationsExamples7" class="nav-link text-white {{ strpos(Request::route()->uri(), 'applications') === false ? '' : 'active' }}" aria-controls="applicationsExamples7" role="button" aria-expanded="false">
                    <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">feed</i>
                    <span class="nav-link-text ms-2 ps-1">Rapor Santri</span>
                </a>
                <div class="collapse {{ strpos(Request::route()->uri(), 'applications') === false ? '' : 'show' }}" id="applicationsExamples7">
                    <ul class="nav ">
                        <li class="nav-item {{ Route::currentRouteName() == 'rapor' ? 'active' : '' }}">
                            <a class="nav-link text-white {{ Route::currentRouteName() == 'rapor' ? 'active' : '' }}" href="{{ route('rapor') }}">
                                <span class="sidenav-mini-icon"> - </span>
                                <span class="sidenav-normal  ms-2  ps-1"> Lihat Data </span>
                            </a>
                        </li>
                        <li class="nav-item {{ Route::currentRouteName() == 'tambah-rapor' ? 'active' : '' }}">
                            <a class="nav-link text-white {{ Route::currentRouteName() == 'tambah-rapor' ? 'active' : '' }}" href="{{ route('tambah-rapor') }}">
                                <span class="sidenav-mini-icon"> - </span>
                                <span class="sidenav-normal  ms-2  ps-1"> Tambah Data </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <hr class="horizontal light">
            <li class="nav-item {{ Route::currentRouteName() == 'galeri' ? 'active' : '' }}">
                <a href="{{ route('galeri') }}" class="nav-link text-white {{ Route::currentRouteName() == 'galeri' ? 'active' : '' }} " aria-controls="dashboardsExamples">
                    <i class="material-icons-round opacity-10">perm_media</i>
                    <span class="nav-link-text ms-2 ps-1">Galeri</span>
                </a>
            </li>
            @else

            <li class="nav-item {{ Route::currentRouteName() == 'data-presensi' ? 'active' : '' }}">
                <a href="{{ route('data-presensi') }}" class="nav-link text-white {{ Route::currentRouteName() == 'data-presensi' ? 'active' : '' }} " aria-controls="dashboardsExamples">
                    <i class="material-icons-round opacity-10">document_scanner</i>
                    <span class="nav-link-text ms-2 ps-1">Presensi</span>
                </a>
            </li>

            <li class="nav-item {{ Route::currentRouteName() == 'data-hafalan' ? 'active' : '' }}">
                <a href="{{ route('data-hafalan') }}" class="nav-link text-white {{ Route::currentRouteName() == 'data-hafalan' ? 'active' : '' }} " aria-controls="dashboardsExamples">
                    <i class="material-icons-round opacity-10">content_paste</i>
                    <span class="nav-link-text ms-2 ps-1">Setoran Hafalan</span>
                </a>
            </li>
            <li class="nav-item {{ Route::currentRouteName() == 'data-rapor' ? 'active' : '' }}">
                <a href="{{ route('data-rapor') }}" class="nav-link text-white {{ Route::currentRouteName() == 'data-rapor' ? 'active' : '' }} " aria-controls="dashboardsExamples">
                    <i class="material-icons-round opacity-10">feed</i>
                    <span class="nav-link-text ms-2 ps-1">Rapor</span>
                </a>
            </li>
            <hr class="horizontal light">
            <li class="nav-item {{ Route::currentRouteName() == 'galeri' ? 'active' : '' }}">
                <a href="{{ route('galeri') }}" class="nav-link text-white {{ Route::currentRouteName() == 'galeri' ? 'active' : '' }} " aria-controls="dashboardsExamples">
                    <i class="material-icons-round opacity-10">perm_media</i>
                    <span class="nav-link-text ms-2 ps-1">Galeri</span>
                </a>
            </li>
            @endcan

        </ul>
    </div>
    <div class="sidenav-footer w-100 bottom-0 mt-2 ">
    </div>
</aside>