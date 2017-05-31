@extends('layouts.seller-dashboard-main')
@section('title')
  Edit a Sub Category
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
            <h1 class="page-header">Dashboard <small>Edit a Sub Category</small></h1>
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
        <h3>Edit a sub category</h3>
        {!! Form::model($subcategory, ['route' => ['sub_category.update', $subcategory->id], 'method' => 'PUT']) !!}
          <div class="form-group">
            {!! Form::label('category', 'Sub Category') !!}
            {!! Form::text('category', null, ['class' => 'form-control', 'placeholder' => 'Specify the sub category title...']) !!}
          </div>
          <div class="form-group">
            {!! Form::label('category_id', 'Category') !!}
            <select class="form-control" name="category_id">
              @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ ($category->id == $subcategory->category_id) ? 'selected=selected' : '' }} >{{ $category->category }} -> {{ $category->mainCategory->category }}</option>
              @endforeach
            </select>
          </div>
          {!! Form::submit('Save Changes', ['class' => 'btn btn-success pull-right ']) !!}
          <a href="{{ route('sub_category.index') }}" class="btn btn-default  pull-right cancel-button-space">Cancel</a>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
@endsection
