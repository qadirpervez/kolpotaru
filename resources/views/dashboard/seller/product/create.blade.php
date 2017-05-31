@extends('layouts.seller-dashboard-main')
@section('title')
  Add new Product
@endsection
@section('stylesheets')
  <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>
  tinymce.init({
    selector:'textarea',
    menubar: false,
    plugins: 'link'
  });
  </script>
  <link rel="stylesheet" href="{{ URL::asset('css/select2.min.css') }}">
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
            <h1 class="page-header">Dashboard <small>Add new Product</small></h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Dashboard
                </li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        {!! Form::open(['route' => 'product.store', 'method' => 'POST', 'id' => 'product-add-form']) !!}
          <div class="form-group">
            {!! Form::label('title', 'Product Title:') !!}
            {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Specify the product title...']) !!}
          </div>
          <div class="form-group">
            {!! Form::label('description', 'Product Description: ') !!}
            {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Description of the product...', 'rows' => '7']) !!}
          </div>
          <div class="form-group">
            {!! Form::label('slug', 'SLUG ( Product URL )') !!}
            {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'URL for this product in word and dashes, example "Micromax-A-black"...']) !!}
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                {!! Form::label('selling_price', 'Selling Price: ') !!}
                {!! Form::number('selling_price', null, ['class' => 'form-control', 'placeholder' => 'Maximun selling price INR']) !!}
              </div>
              <div class="col-md-6">
                {!! Form::label('min_sell_price', 'Minimum Selling Price: ') !!}
                {!! Form::number('min_sell_price', null, ['class' => 'form-control', 'placeholder' => 'Minimum price you can sell this INR']) !!}
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                {!! Form::label('colors', 'Select Colors: ') !!}
                <select class="form-control select2-multi" name="colors[]" multiple="multiple">
                  @foreach ($colors as $color)
                    <option value="{{ $color->id }}">{{ $color->name }} : Hex {{ $color->hex_code }}</option>
                  @endforeach
                </select>
              </div>
              <div class="col-md-6">
                {!! Form::label('quantity', 'Quantity: ') !!}
                {!! Form::number('quantity', null, ['class' => 'form-control', 'placeholder' => 'Quantity of this product...']) !!}
              </div>
            </div>
          </div>
          <div class="form-group">
            {!! Form::label('mini_category_id', 'Category') !!}
            <select class="form-control" name="mini_category_id">
              @foreach ($subcategories as $sC)
                <option value="{{ $sC->id }}">{{ $sC->Category->mainCategory->category }} -> {{ $sC->Category->category }} -> {{ $sC->category }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                {!! Form::label('combo', 'Combo:') !!}<br />
                {!! Form::radio('combo', "true") !!} <span> Yes</span>
                {!! Form::radio('combo', "false") !!} <span> No</span>
              </div>
              <div class="col-md-6">
                {!! Form::label('max_delivery_time', 'Max Delivery Time: ') !!}
                {!! Form::number('max_delivery_time', null, ['class' => 'form-control', 'placeholder' => 'Max No. of days to deliver this product...']) !!}
              </div>
            </div>
          </div>
          <div class="form-group">
            {!! Form::submit('Add Product', ['class' => 'btn btn-success pull-right']) !!}
          </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
@endsection
@section('scripts')
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/additional-methods.min.js"></script>
  <script src="{{ URL::asset('js/select2.min.js') }}"></script>
  <script src="{{ URL::asset('js/new-product-seller.js') }}"></script>
  <script type="text/javascript">
    $('.select2-multi').select2();
  </script>
@endsection
