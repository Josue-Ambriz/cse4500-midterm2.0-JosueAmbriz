@extends('adminlte::page')

@section('title', 'Edit Category')

@section('content_header')
  <h1>Edit Category</h1>
@stop

@section('content')
<div class="row">
  <div class="col-md-12">
    <form action="{{ route('hwcategories.update', ['hwcategory'=>$hwcategory]) }}" method="POST">
      <div class="card">
        <div class="card-header p-2">
          <h3 class="card-title">Infomation</h3>
        </div>
        <div class="card-body">
          @csrf
          <input type="hidden" name="_method" value="PUT" />
          <div class="row">
              <x-adminlte-input name="name" label="Type of Category" fgroup-class="col-md-12" value="{{ old('name')?:$hwcategory->type }}" />
          </div>
        </div>
        <div class="card-footer">
          <button type="Submit" class="btn btn-primary">Submit</button>
          <a href="{{ route('hwcategories.show',['hwcategory'=>$hwcategory]) }}" class="btn btn-danger float-right">Cancel</a>
        </div>
      </div>
    </form>
  </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
    
    </script>
@stop
