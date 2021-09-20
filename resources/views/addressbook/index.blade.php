@extends('layout.app')


@section('content')

<div class="card card-body">
    <div class="row pb-2">
        <div class="col-md-10">

        </div>
        <div class="col-md-2">
            <a href="{{ route('addressbook.create') }}" class="btn btn-primary float-right">Novo</a>
        </div>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th width="5%">ID</th>
                <th width="10%">Search Type</th>
                <th>Name</th>
                <th>Tax ID</th>
                <th width="5%"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($addressbook as $ab)
                <tr>
                    <td align="center">{{ $ab->id }}</td>
                    <td align="center">{{ $ab->search_type }}</td>
                    <td>{{ $ab->name }}</td>
                    <td>{{ $ab->tax_id }}</td>
                    <td align="center">
                        <a href="{{ route('addressbook.edit', $ab->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
</div>

@endsection
