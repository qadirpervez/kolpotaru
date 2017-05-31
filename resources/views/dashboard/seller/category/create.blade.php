@extends('layouts.seller-dashboard-main')
@section('title')
  Create New Category
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
            <h1 class="page-header">Dashboard <small>Create a new Category</small></h1>
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
        <h3>Create a new category</h3>
        {!! Form::open(['route' => 'category.store', 'method' => 'POST']) !!}
          <div class="form-group">
            {!! Form::label('category', 'Category') !!}
            {!! Form::text('category', null, ['class' => 'form-control', 'placeholder' => 'Specify the category title...']) !!}
          </div>
          <div class="form-group">
            {!! Form::label('main_category_id', 'Main Category') !!}
            <select class="form-control" name="main_category_id">
              @foreach ($maincategories as $mainCategory)
                <option value="{{ $mainCategory->id }}">{{ $mainCategory->category }}</option>
              @endforeach
            </select>
          </div>
          {!! Form::submit('Save', ['class' => 'btn btn-success pull-right']) !!}
        {!! Form::close() !!}
      </div>
    </div>
  </div>
@endsection
