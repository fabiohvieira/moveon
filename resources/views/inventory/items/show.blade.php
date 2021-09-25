@extends('layout.app')

@section('title', 'Addressbook')

@section('content')

<form action="{{ route('items.update', $item->id) }}" method="POST" class="form-horizontal">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-9">
            @include('inventory.items.form')
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    das
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="id" class="col-sm-2 col-form-label">ID</label>
                        <div class="col-sm-10">
                            {{ $item->id }}
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('items.edit', $item->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>

                    <button class="btn btn-danger float-right"><i class="fa fa-trash"></i> Destroy</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
