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
            <label for="search_type" class="col-sm-2 col-form-label">Code</label>
            <div class="col-sm-2">
                @if (Route::currentRouteName() <> 'items.show')
                    <input type="text" class="form-control" name="code" id="code" value="{{ $item->code }}">
                @else
                    <span class="align-items-center">{{ $item->code }}</span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="search_type" class="col-sm-2 col-form-label">Reference</label>
            <div class="col-sm-4">
                @if (Route::currentRouteName() <> 'items.show')
                    <input type="text" class="form-control" name="reference" id="reference" value="{{ $item->reference }}">
                @else
                    <span class="align-items-center">{{ $item->reference }}</span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="search_type" class="col-sm-2 col-form-label">Description 1</label>
            <div class="col-sm-6">
                @if (Route::currentRouteName() <> 'items.show')
                    <input type="text" class="form-control" name="description1" id="description1" value="{{ $item->description1 }}">
                @else
                    <span class="align-items-center">{{ $item->description1 }}</span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="search_type" class="col-sm-2 col-form-label">Description 2</label>
            <div class="col-sm-6">
                @if (Route::currentRouteName() <> 'items.show')
                    <input type="text" class="form-control" name="description2" id="description2" value="{{ $item->description2 }}">
                @else
                    <span class="align-items-center">{{ $item->description2 }}</span>
                @endif
            </div>
        </div>


        <div class="form-group row">
            <label for="search_type" class="col-sm-2 col-form-label">Cost</label>
            <div class="col-sm-2">
                @if (Route::currentRouteName() <> 'items.show')
                    <input type="text" class="form-control" name="cost" id="cost" value="{{ $item->cost }}">
                @else
                    <span class="align-items-center">{{ $item->cost }}</span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="search_type" class="col-sm-2 col-form-label">Price</label>
            <div class="col-sm-2">
                @if (Route::currentRouteName() <> 'items.show')
                    <input type="text" class="form-control" name="price" id="price" value="{{ $item->price }}">
                @else
                    <span class="align-items-center">{{ $item->price }}</span>
                @endif
            </div>
        </div>


    </div>
</div>
