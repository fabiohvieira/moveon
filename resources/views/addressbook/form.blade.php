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
            <label for="search_type" class="col-sm-2 col-form-label">Search Type</label>
            <div class="col-sm-2">
                @if (Route::currentRouteName() <> 'addressbook.show')
                    <input type="text" class="form-control" name="search_type" id="search_type" value="{{ $addressbook->search_type }}">
                @else
                    <span class="align-items-center">{{ $addressbook->search_type }}</span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                @if (Route::currentRouteName() <> 'addressbook.show')
                    <input type="text" class="form-control" name="name" id="name" value="{{ $addressbook->name }}">
                @else
                    <span class="align-items-center">{{ $addressbook->name }}</span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="tax_id" class="col-sm-2 col-form-label">Tax ID</label>
            <div class="col-sm-4">
                @if (Route::currentRouteName() <> 'addressbook.show')
                    <input type="text" class="form-control" name="tax_id" id="tax_id" value="{{ $addressbook->tax_id }}">
                @else
                    <span class="align-items-center">{{ $addressbook->tax_id }}</span>
                @endif
            </div>
        </div>


        <div class="form-group row">
            <label for="address_line1" class="col-sm-2 col-form-label">Address Line 1</label>
            <div class="col-sm-10">
                @if (Route::currentRouteName() <> 'addressbook.show')
                    <input type="text" class="form-control" name="address_line1" id="address_line1" value="{{ $addressbook->address_line1 }}">
                @else
                    <span class="align-items-center">{{ $addressbook->address_line1 }}</span>
                @endif
            </div>
        </div>


        <div class="form-group row">
            <label for="address_line2" class="col-sm-2 col-form-label">Address Line 2</label>
            <div class="col-sm-10">
                @if (Route::currentRouteName() <> 'addressbook.show')
                    <input type="text" class="form-control" name="address_line2" id="address_line2" value="{{ $addressbook->address_line2 }}">
                @else
                    <span class="align-items-center">{{ $addressbook->address_line2 }}</span>
                @endif
            </div>
        </div>


        <div class="form-group row">
            <label for="address_line3" class="col-sm-2 col-form-label">Address Line 3</label>
            <div class="col-sm-10">
                @if (Route::currentRouteName() <> 'addressbook.show')
                    <input type="text" class="form-control" name="address_line3" id="address_line3" value="{{ $addressbook->address_line3 }}">
                @else
                    <span class="align-items-center">{{ $addressbook->address_line3 }}</span>
                @endif
            </div>
        </div>


        <div class="form-group row">
            <label for="address_line4" class="col-sm-2 col-form-label">Address Line 4</label>
            <div class="col-sm-10">
                @if (Route::currentRouteName() <> 'addressbook.show')
                    <input type="text" class="form-control" name="address_line4" id="address_line4" value="{{ $addressbook->address_line4 }}">
                @else
                    <span class="align-items-center">{{ $addressbook->address_line4 }}</span>
                @endif
            </div>
        </div>


        <div class="form-group row">
            <label for="postal_code" class="col-sm-2 col-form-label">Postal Code</label>
            <div class="col-sm-4">
                @if (Route::currentRouteName() <> 'addressbook.show')
                    <input type="text" class="form-control" name="postal_code" id="postal_code" value="{{ $addressbook->postal_code }}">
                @else
                    <span class="align-items-center">{{ $addressbook->postal_code }}</span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="city" class="col-sm-2 col-form-label">City</label>
            <div class="col-sm-4">
                @if (Route::currentRouteName() <> 'addressbook.show')
                    <input type="text" class="form-control" name="city" id="city" value="{{ $addressbook->city }}">
                @else
                    <span class="align-items-center">{{ $addressbook->city }}</span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="state" class="col-sm-2 col-form-label">State</label>
            <div class="col-sm-4">
                @if (Route::currentRouteName() <> 'addressbook.show')
                    <input type="text" class="form-control" name="state" id="state" value="{{ $addressbook->state }}">
                @else
                    <span class="align-items-center">{{ $addressbook->state }}</span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="country" class="col-sm-2 col-form-label">Country</label>
            <div class="col-sm-4">
                @if (Route::currentRouteName() <> 'addressbook.show')
                    <input type="text" class="form-control" name="country" id="country" value="{{ $addressbook->country }}">
                @else
                    <span class="align-items-center">{{ $addressbook->country }}</span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="phone_prefix" class="col-sm-2 col-form-label">Phone Prefix</label>
            <div class="col-sm-2">
                @if (Route::currentRouteName() <> 'addressbook.show')
                    <input type="text" class="form-control" name="phone_prefix" id="phone_prefix" value="{{ $addressbook->phone_prefix }}">
                @else
                    <span class="align-items-center">{{ $addressbook->phone_prefix }}</span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="phone_number" class="col-sm-2 col-form-label">Phone Number</label>
            <div class="col-sm-4">
                @if (Route::currentRouteName() <> 'addressbook.show')
                    <input type="text" class="form-control" name="phone_number" id="phone_number" value="{{ $addressbook->phone_number }}">
                @else
                    <span class="align-items-center">{{ $addressbook->phone_number }}</span>
                @endif
            </div>
        </div>


        <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-4">
                @if (Route::currentRouteName() <> 'addressbook.show')
                    <input type="text" class="form-control" name="email" id="email" value="{{ $addressbook->email }}">
                @else
                    <span class="align-items-center">{{ $addressbook->email }}</span>
                @endif
            </div>
        </div>
    </div>

</div>
