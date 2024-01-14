<div class="container-fluid py-4">
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">               
                @if (Session::has('success'))
                <div class="alert alert-success alert-dismissible text-white mx-4" role="alert">
                    <span class="text-sm">{{ Session::get('success') }}</span>
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
                
                <div class="card" id="password">
                    <div class="card-header">
                        <h5>Ubah Password</h5>
                    </div>
                    <div class="card-body pt-0">
                        <form wire:submit.prevent="passwordUpdate" method="POST" enctype="multipart/form-data">
                            <div class="form-group col-12 col-md-6 mt-3">
                                <label class="form-label">Password lama</label>
                                <input wire:model.lazy="old_password" type="password" class="form-control border border-2 p-2 @error('old_password') is-invalid @enderror" name="old_password">
                                @error('old_password')
                                <p class='text-danger inputerror'>{{ $message }} </p>
                                @enderror
                            </div>
                            <div class="form-group col-12 col-md-6 mt-3">
                                <label class="form-label">Password baru</label>
                                <input wire:model.lazy="new_password" type="password" class="form-control border border-2 p-2  @error('new_password') is-invalid @enderror" name="new_password">
                                @error('new_password')
                                <p class='text-danger inputerror'>{{ $message }} </p>
                                @enderror
                            </div>
                            <div class="form-group col-12 col-md-6 mt-3">
                                <label class="form-label">Ulangi password baru</label>
                                <input wire:model.lazy="confirmationPassword" type="password" class="form-control border border-2 p-2" name="confirmationPassword">
                            </div>
                            <button class="btn bg-gradient-dark btn-sm float-end mt-6 mb-0">Ubah password</button>
                        </form>
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