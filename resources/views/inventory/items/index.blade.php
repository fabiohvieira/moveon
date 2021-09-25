@extends('layout.app')

@section('title', 'Items')

@section('content')

<div class="card card-body">
    <div class="row pb-2">
        <div class="col-md-10">

        </div>
        <div class="col-md-2">
            <a href="{{ route('items.create') }}" class="btn btn-secondary float-right"><i class="fa fa-plus"></i> Create</a>
        </div>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th width="5%">ID</th>
                <th width="10%">Search Type</th>
                <th>Name</th>
                <th>Tax ID</th>
                <th>Price</th>
                <th width="13%"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <td align="center">{{ $item->id }}</td>
                    <td align="center">{{ $item->code }}</td>
                    <td>{{ $item->reference }}</td>
                    <td>{{ $item->description1 }}</td>
                    <td>{{ $item->price }}</td>
                    <td align="center" class="d-flex ">
                        <a href="{{ route('items.show', $item->id) }}" class="btn btn-info btn-xs mr-1">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a href="{{ route('items.edit', $item->id) }}" class="btn btn-primary btn-xs mr-1">
                            <i class="fa fa-edit"></i>
                        </a>
                        <form action="{{ route('items.destroy', $item->id) }}" method="post" onsubmit="return confirm('Are you sure?');"">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-xs">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
</div>

@endsection
