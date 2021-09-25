@extends('layout.app')

@section('title', 'items')

@section('content')

<form action="{{ route('items.store') }}" method="POST" class="form-horizontal">
   @csrf

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
                       <input type="text" class="form-control" name="id" id="id" value="{{ $item->id }}" disabled>
                       </div>
                   </div>
               </div>
               <div class="card-footer">
                   <button class="btn btn-success"><i class="fas fa-save"></i> Save</button>
               </div>
           </div>
       </div>
   </div>

</form>
@endsection
