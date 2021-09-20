@extends('layout.app')

@section('content')

<form action="{{ route('addressbook.store') }}" method="POST" class="form-horizontal">
   @csrf
   @include('addressbook.form')
</form>
@endsection
