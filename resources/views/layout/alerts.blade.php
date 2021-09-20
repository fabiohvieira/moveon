@if (Session::has('alert-info'))
    <div class="alert alert-info alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-info"></i> Info</h5>
        {{ Session::get('alert-info') }}
    </div>
@endif

@if (Session::has('alert-success'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-check"></i> Success</h5>
        {{ Session::get('alert-success') }}
    </div>
@endif

@if (Session::has('alert-warning'))
    <div class="alert alert-warning alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-exclamation-triangle"></i> Warning</h5>
        {{ Session::get('alert-warning') }}
    </div>
@endif

@if (Session::has('alert-danger'))
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-ban"></i> Error</h5>
        {{ Session::get('alert-danger') }}
    </div>
@endif
