@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="card">
    <div class="card-body">

        <div class="form-group row">
            <label for="search_type" class="col-sm-2 col-form-label">Supplier</label>
            <div class="col-sm-2">
                @if (Route::currentRouteName() <> 'items.show')
                    <input type="text" class="form-control" name="code" id="code" value="{{ $order->code }}">
                @else
                    <span class="align-items-center">{{ $order->code }}</span>
                @endif
            </div>
        </div>

    </div>
</div>
