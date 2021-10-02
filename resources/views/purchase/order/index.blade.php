@extends('layout.app')

@section('title', 'Purchase Order')

@section('content')

<div class="card card-body">
    <div class="row pb-2">
        <div class="col-md-10">

        </div>
        <div class="col-md-2">
            <a href="{{ route('order.create') }}" class="btn btn-secondary float-right"><i class="fa fa-plus"></i> Create</a>
        </div>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th width="5%">ID</th>
                <th width="10%">Search Type</th>
                <th>Name</th>
                <th>Tax ID</th>
                <th width="13%"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td align="center">{{ $order->id }}</td>
                    <td align="center">{{ $order->search_type }}</td>
                    <td>{{ $order->name }}</td>
                    <td>{{ $order->tax_id }}</td>
                    <td align="center" class="d-flex ">
                        <a href="{{ route('addressbook.show', $order->id) }}" class="btn btn-info btn-xs mr-1">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a href="{{ route('addressbook.edit', $order->id) }}" class="btn btn-primary btn-xs mr-1">
                            <i class="fa fa-edit"></i>
                        </a>
                        <form action="{{ route('addressbook.destroy', $order->id) }}" method="post" onsubmit="return confirm('Are you sure?');"">
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
