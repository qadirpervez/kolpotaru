@extends('layouts.seller-dashboard-main')
@section('title')
  Edit a Category
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
            <h1 class="page-header">Dashboard <small>Edit a Category</small></h1>
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
        <h3>Edit a category</h3>
        {!! Form::model($category, ['route' => ['category.update', $category->id], 'method' => 'PUT']) !!}
          <div class="form-group">
            {!! Form::label('category', 'Category') !!}
            {!! Form::text('category', null, ['class' => 'form-control', 'placeholder' => 'Specify the category title...']) !!}
          </div>
          <div class="form-group">
            {!! Form::label('main_category_id', 'Main Category') !!}
            <select class="form-control" name="main_category_id">
              @foreach ($maincategories as $mainCategory)
                <option value="{{ $mainCategory->id }}" {{ ($mainCategory->id == $category->main_category_id) ? 'selected=selected' : '' }}>{{ $mainCategory->category }}</option>
              @endforeach
            </select>
          </div>
          {!! Form::submit('Save Changes', ['class' => 'btn btn-success pull-right ']) !!}
          <a href="{{ route('category.index') }}" class="btn btn-default  pull-right cancel-button-space">Cancel</a>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
@endsection
