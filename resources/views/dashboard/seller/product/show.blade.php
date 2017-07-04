@extends('layouts.seller-dashboard-main')
@section('title')
{{ $product->title }}
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
            <h1 class="page-header">Dashboard <small>Product Details</small></h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Dashboard
                </li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="row">
          <img src="https://placehold.it/300.png/09f/fff" class="img-responsive">
        </div>
        <div class="row product-colors-show breadcrumb">
          <h4><small>Available Colors :</small></4>
            <div class="row">
              @foreach ($colors as $color)
                <div style="float: left; margin: 4px;"><h5><small>{{ $color->name }}</small> <span style="width: 10px; height: 10px; background-color: {{ $color->hex_code }}; color: {{ $color->hex_code }}; padding: 4px 0; box-shadow: 1px 1px 7px #000;">Color</span> </h5></div>
              @endforeach
            </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-12">
            <h2 class="page-header">{{ $product->title }} <hr><small>{{ $subcategory->Category->mainCategory->category }} -> {{ $subcategory->Category->category }} -> {{ $subcategory->category }}</small></h2>
            <div class="breadcrumb row">
              <div class="col-md-7 margin-top-time-edit">
                <i class="fa  fa-clock-o"></i> Listed : {{ $product->created_at->diffForHumans() }}, Last Updated : {{ $product->updated_at->diffForHumans() }}
              </div>
              <div class="col-md-5">
                <div class=" row">
                  <div class="col-md-3  buttons-container-seller-dashboard">
                    <a href="{{ route('product.edit', $product->slug) }}" class="btn btn-default btn-sm buttons-product-seller-dashboard-actions"><span class="fa fa-pencil"></span> Edit</a>
                  </div>
                  <div class="col-md-4 buttons-container-seller-dashboard">
                    {!! Form::open(['method' => 'DELETE', 'route' => ['product.destroy', $product->slug]]) !!}
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i> Delete', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm buttons-product-seller-dashboard-actions', 'onclick' => 'return confirm("Are you sure, want to delete this product?")']) !!}
                    {!! Form::close() !!}
                  </div>
                  <div class="col-md-5 buttons-container-seller-dashboard">
                    <button class="btn btn-primary btn-sm buttons-product-seller-dashboard-actions" data-toggle="modal" data-target="#uploadPicture">
                      <i class="fa fa-cloud-upload"></i>  Upload a Picture
                    </button>
                          <!-- Modal -->
                          <div class="modal fade" id="uploadPicture" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <div class="row">
                                    <div class="col-md-6">
                                      <h3 class="modal-title" id="exampleModalLabel"><small>Upload  Picture</small></h3>
                                    </div>
                                    <div class="col-md-6 pull-right">
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                  </div>
                                </div>
                                <div class="modal-body">
                                  {!! Form::open(['route' => 'product.picture.upload', 'id' => 'productPictureUploadForm', 'files' => true]) !!}

                                  <div class="form-group">
                                    {!! Form::hidden('product_id', $product->id, ['class' => 'form-control']) !!}
                                  </div>

                                  <div class="form-group">
                                    {!! Form::label('description', 'Brief Description :') !!}
                                    {!! Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'Describe it, not more then 40 characetrs']) !!}
                                  </div>

                                  <div class="form-group">
                                      {!! Form::label('main', 'Is this the primary picture?') !!}
                                      {!! Form::radio('main', "true") !!} <span> Yes</span>
                                      {!! Form::radio('main', "false") !!} <span> No</span>
                                  </div>
                                  <div class="form-group">
                                      {!! Form::label('productPicture', 'Picture of the product :') !!}
                                      {!! Form::file('productPicture', [''])!!}
                                  </div>
                                  <div class="clearfix"></div>
                                  <div class="form-group pull-right">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    {!! Form::submit('Upload', ['class' => 'btn btn-primary']) !!}
                                  </div><div class="clearfix"></div>
                                  {!! Form::close() !!}
                                </div>
                              </div>
                            </div>
                          </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- End of first breadcrum time ago and buttons -->
        <div class="row breadcrumb ">
          <div class="margin-top-time-edit">
            <p>views : {{ $product->views ? $product->views : '0' }} <i class="fa fa-fw fa-eye"></i> , likes : {{ $product->likes ? $product->likes : '0' }} <i class="fa fa-fw fa-thumbs-up"></i>, {{ $product->combo ? 'Combo offer is applicable on this product,' : 'Combo offer is not applicable on this product,' }} Click edit <i class="fa fa-fw fa-arrow-up"></i> to change.</p>
          </div>
        </div>
        <div class="row breadcrumb">
          <div class="margin-top-time-edit">
            <p>Price : {{ $product->selling_price }}, Min-Price : {{ $product->min_sell_price }}, Quantity left : {{ $product->quantity }}, Delivery in MAX : {{ $product->max_delivery_time }} days</p>
          </div>
        </div>
        <div class="row container-fluid">
          <h3><small>Product Description :</small></h3>
          <p>{!! $product->description !!}</p>
        </div>
      </div><!-- end of col-md-8 of right side -->
    </div>
  </div>
@endsection
@section('scripts')
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/additional-methods.min.js"></script>
  <script src="{{ URL::asset('js/new-product-seller.js') }}"></script>
@endsection
