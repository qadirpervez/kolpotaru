@extends('layouts.seller-dashboard-main')
@section('title')
  Create New Sub Category
@endsection
@section('content')
  <div id="page-wrapper">
    <div class="row">
      <div class="container-fluid">
        @include('partials._messages')
      </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dashboard <small>Create a new Sub Category</small></h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Dashboard
                </li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <h3>Create a new sub category</h3>
        {!! Form::open(['route' => 'sub_category.store', 'method' => 'POST']) !!}
          <div class="form-group">
            {!! Form::label('category', 'Sub Category') !!}
            {!! Form::text('category', null, ['class' => 'form-control', 'placeholder' => 'Specify the sub category title...']) !!}
          </div>
          <div class="form-group">
            {!! Form::label('category_id', 'Category') !!}
            <select class="form-control" name="category_id">
              @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->category }} -> {{ $category->mainCategory->category }}</option>
              @endforeach
            </select>
          </div>
          {!! Form::submit('Save', ['class' => 'btn btn-success pull-right']) !!}
        {!! Form::close() !!}
      </div>
    </div>
  </div>
@endsection
