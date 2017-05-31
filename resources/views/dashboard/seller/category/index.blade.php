@extends('layouts.seller-dashboard-main')
@section('title')
        View All Category
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
            <h1 class="page-header">Dashboard <small>All categories by you</small></h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Dashboard
                </li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <table class="table table-bordered table-hover table-responsive">
            <thead>
              <tr>
                <td>Sl No.</td>
                <td>Name</td>
                <td>Main Category</td>
                <td>View All Products</td>
                <td>Action</td>
              </tr>
            </thead>
            <tbody>
              <?php $slNo = 1; ?>
              @foreach ($categories as $category)
                <tr>
                  <td>{{ $slNo++ }}</td>
                  <td>{{ $category->category }}</td>
                  <td>{{ $category->mainCategory->category }}</td>
                  <td><a href="{{ route('category.show', $category->id) }}" class="btn btn-primary btn-block"><i class="fa fa-fw fa-eye"></i> View All Products</a></td>
                  <td><a href="{{ route('category.edit', $category->id) }}" class="btn btn-warning btn-block"><i class="fa fa-fw fa-pencil"></i> Edit</a></td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
@endsection
