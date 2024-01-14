<div class="container mt-5">
    <div class="row signin-margin">
        <div class="col-lg-5 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                        <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Selamat Datang</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent='store'>

                        @if (Session::has('status'))
                        <div class="alert alert-success alert-dismissible text-white" role="alert">
                            <span class="text-sm">{{ Session::get('status') }}</span>
                            <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                        <div class="input-group input-group-outline my-3 @if(strlen($username ?? '') > 0) is-filled @endif">
                            <label class="form-label">Username/Nis Santri</label>
                            <input wire:model='username' type="username" class="form-control">
                        </div>
                        @error('username')
                        <p class='text-danger inputerror'>{{ $message }} </p>
                        @enderror

                        <div class="input-group input-group-outline mb-3 @if(strlen($password ?? '') > 0) is-filled @endif">
                            <label class="form-label">Password</label>
                            <input wire:model="password" type="password" class="form-control">
                        </div>
                        @error('password')
                        <p class='text-danger inputerror'>{{ $message }} </p>
                        @enderror
                        <div class="form-check form-switch d-flex align-items-center mb-3">
                            <input class="form-check-input" type="checkbox" id="rememberMe">
                            <label class="form-check-label mb-0 ms-2" for="rememberMe">Ingat saya</label>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Login/Masuk</button>
                        </div>
                        <p class="mt-4 text-sm text-center">
                            Kembali ke 
                            <a href="/" class="text-primary text-gradient font-weight-bold">Halaman utama</a>
                        </p>                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@push('js')
<script src="{{ asset('assets') }}/js/plugins/jquery-3.6.0.min.js"></script>
<script>
    $(function() {

        var input = $(".input-group input");
        input.focusin(function() {
            $(this).parent().addClass("focused is-focused");
        });

        input.focusout(function() {
            $(this).parent().removeClass("focused is-focused");
        });
    });
</script>

@endpush