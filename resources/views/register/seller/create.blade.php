@extends('layouts.registerMain')
@section('title')
    Registration Form
@endsection
@section('content')
  <div class="container-fluid">
    @if(count( $errors ) > 0)
      <ul class="alert alert-danger">
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    @endif
  </div>
  <div class="text-center">
    <h1>KOLPOTARU</h1>
    <p>Sell with us</p>
  </div>
  <div class="row">
    <div class="col-md-8 col-md-offset-2 seller-registration-form">
      <h3>Sign UP</h3>
      <hr>
      {!! Form::open(['route' => 'seller.store', 'id' => 'seller-register-form', 'files' => true, 'class' => 'form' ]) !!}
        <p>Personal Details:-</p>
        <div class="row">
        <div class="form-group">
          <h5>Name<span>*</span> :</h5>
          <div class="col-md-4">
            {!! Form::text('firstName', null, ['class' => 'form-control', 'placeholder' => 'First Name', 'id' => 'firstName']) !!}
          </div>
          <div class="col-md-4">
            {!! Form::text('middleName', null, ['class' => 'form-control', 'placeholder' => 'Middle Name', 'id' => 'middleName']) !!}
          </div>
          <div class="col-md-4">
            {!! Form::text('lastName', null, ['class' => 'form-control', 'placeholder' => 'Last Name', 'id' => 'lastName']) !!}
          </div>
        </div>
        </div>
        <div class="row">
        <div class="form-group">
          <h5>Father's or Husband's Name<span>*</span> :</h5>
          <div class="col-md-12">
            {!! Form::text('fatherHusbandName', null, ['class' => 'form-control', 'placeholder' => 'Father\'s Or Husband\'s Name', 'id' => 'fatherHusbandName']) !!}
          </div>
        </div>
      </div>
      <div class="row">
        <div class="form-group">
          <h5>Address<span>*</span> :</h5>
          <div class="col-md-3">
            {!! Form::text('addressHouseShopNo', null, ['class' => 'form-control', 'placeholder' => 'House No. / Shop No.', 'id' => 'addressHouseShopNo']) !!}
          </div>
          <div class="col-md-9">
            {!! Form::text('addressStreet', null, ['class' => 'form-control', 'placeholder' => 'Street Name', 'id' => 'addressStreet']) !!}
          </div>
          <div class="col-md-4">
            {!! Form::text('addressCity', null, ['class' => 'form-control', 'placeholder' => 'City', 'id' => 'addressCity']) !!}
          </div>
          <div class="col-md-4">
            {!! Form::text('addressPin', null, ['class' => 'form-control', 'placeholder' => 'Post Code', 'id' => 'addressPin']) !!}
          </div>
        </div>
      </div>
      <div class="row">
        <div class="form-group">
          <h5>PAN of Proprietor<span>*</span> :</h5>
          <div class="col-md-5">
            {!! Form::text('panOfProprietor', null, ['class' => 'form-control', 'placeholder' => 'Pan No', 'id' => 'panOfProprietor']) !!}
          </div>
        </div>
      </div><hr>
      <p>Business Details:-</p>
      <div class="row">
      <div class="form-group">
        <h5>Company Name<span>*</span> :</h5>
        <div class="col-md-9">
          {!! Form::text('companyName', null, ['class' => 'form-control', 'placeholder' => 'Company Name', 'id' => 'companyName']) !!}
        </div>
      </div>
    </div>
    <div class="row">
      <div class="form-group">
        <h5>Shop Name <span>( if different from company name* )</span> :</h5>
        <p><span>This Will be your display name.</span></p>
        <div class="col-md-9">
          {!! Form::text('shopName', null, ['class' => 'form-control', 'placeholder' => 'Shop Name', 'id' => 'shopName']) !!}
        </div>
      </div>
    </div>
    <div class="row">
      <div class="form-group">
        <div class="col-md-6">
          <h5>Main Person Name<span>*</span> :</h5>
          {!! Form::text('mainPersonName', null, ['class' => 'form-control', 'placeholder' => 'Main Person Name', 'id' => 'mainPersonName']) !!}
        </div>
        <div class="col-md-6">
            <h5>Contactable Person Name :</h5>
            {!! Form::text('contactablePersonName', null, ['class' => 'form-control', 'placeholder' => 'Contactable Person Name', 'id' => 'contactablePersonName']) !!}
        </div>
      </div>
    </div>
    <div class="row">
      <div class="form-group">
        <div class="col-md-6">
          <h5>Whatsapp No.<span>*</span> :</h5>
          {!! Form::text('WhatsappNo', null, ['class' => 'form-control', 'placeholder' => 'Whatsapp No', 'id' => 'WhatsappNo']) !!}
        </div>
      </div>
    </div>
    <div class="row">
      <div class="form-group">
        <h5>Type Of Company</h5>
        <div class="col-md-3">
          {!! Form::radio('typeOfCompany', 'Proprietorship') !!} <span>Proprietorship</span>
        </div>
        <div class="col-md-2">
          {!! Form::radio('typeOfCompany', 'Partnership') !!} <span>Partnership</span>
        </div>
        <div class="col-md-2">
          {!! Form::radio('typeOfCompany', 'PVT_LTD') !!} <span>PVT LTD</span>
        </div>
        <div class="col-md-2">
          {!! Form::radio('typeOfCompany', 'LTD') !!} <span>LTD</span>
        </div>
        <div class="col-md-3">
          {!! Form::text('typeOfCompany_other', null, ['class' => 'form-control', 'placeholder' => 'Other, Specify']) !!}
        </div>
      </div>
    </div>
    <div class="row">
      <div class="form-group">
        <div class="col-md-6">
          <h5>PAN of Company :</h5>
          {!! Form::text('panOfCompany', null, ['class' => 'form-control', 'placeholder' => 'Pan No', 'id' => 'panOfCompany']) !!}
        </div>
        <div class="col-md-6">
          <h5>TIN of Company :</h5>
          {!! Form::text('tinOfCompany', null, ['class' => 'form-control', 'placeholder' => 'TIN No', 'id' => 'tinOfCompany']) !!}
        </div>
      </div>
    </div>
    <div class="row">
      <div class="form-group">
        <div class="col-md-6">
          <h5>VAT of Company :</h5>
          {!! Form::text('vat', null, ['class' => 'form-control', 'placeholder' => 'Vat No', 'id' => 'vat']) !!}
        </div>
        <div class="col-md-6">
          <h5>CST/GST no. of Company :</h5>
          {!! Form::text('cstGstNo', null, ['class' => 'form-control', 'placeholder' => 'CST/ GST No', 'id' => 'cstGstNo']) !!}
        </div>
      </div>
    </div>
    <div class="row">
      <div class="form-group">
        <div class="col-md-6">
          <h5>Registration No :</h5>
          {!! Form::text('registrationNo', null, ['class' => 'form-control', 'placeholder' => 'Registration No', 'id' => 'registrationNo']) !!}
        </div>
        <div class="col-md-6">
          <h5>Category of product you sell :</h5>
          {!! Form::text('productCategory', null, ['class' => 'form-control', 'placeholder' => 'Category', 'id' => 'productCategory']) !!}
        </div>
      </div>
    </div>
    <div class="row">
      <div class="form-group">
        <div class="col-md-6">
          <h5>How Long are you in this business :</h5>
          {!! Form::text('timeInBusiness', null, ['class' => 'form-control', 'placeholder' => 'Time in business', 'id' => 'timeInBusiness']) !!}
        </div>
      </div>
    </div>
    <div class="row">
      <div class="form-group">
        <div class="col-md-12">
          <h5>Do you want to participate in "Make your own combo" system? : <span><a href="#">[ What is this? ]</a></span></h5>
          {!! Form::radio('combo', "true") !!} <span> Yes</span>
          {!! Form::radio('combo', "false") !!} <span> No</span>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="form-group">
        <div class="col-md-12">
          <h5>Do you have any previous online selling experiences :</h5>
          {!! Form::radio('experience', "true") !!} <span> Yes</span>
          {!! Form::radio('experience', "false") !!} <span> No</span>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="form-group">
        <div class="col-md-5">
          <h5>Elaborate :</h5>
          {!! Form::textarea('experienceDescription', null, ['class' => 'form-control', 'placeholder' => 'Leave blank if not any experience', 'rows' => 3, 'id' => 'experienceDescription']) !!}
        </div>
        <div class="col-md-7">
          <h5>Url Where you sell :</h5>
          {!! Form::text('experienceURL', null, ['class' => 'form-control', 'placeholder' => 'Leave blank if not any experience', 'id' => 'experienceURL']) !!}
        </div>
      </div>
    </div>
    <div class="row">
      <div class="form-group">
        <div class="col-md-12">
          <h5>Describe Your business<span>*</span> :</h5>
          {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Describe tyour business...', 'rows' => 3, 'id' => 'description']) !!}
        </div>
      </div>
    </div>
    <div class="row">
      <div class="form-group">
        <div class="col-md-6">
          <h5>How many years you are in this business<span>*</span> :</h5>
          <select name="yearsInBusiness" class="form-control">
            <option value="0-1">0 - 1 years</option>
            <option value="1-3">1 - 3 years</option>
            <option value="3-7">3 - 7 years</option>
            <option value="7-MORE">More than 7 years</option>
          </select>
        </div>
        <div class="col-md-6">
          <h5>What is your yearly turn over(INR)<span>*</span> :</h5>
          <select name="turnOver" class="form-control">
            <option value="0-50">0 - 50,000</option>
            <option value="51-100">50,001 - 100,000</option>
            <option value="101-200">100,001 - 200,000</option>
            <option value="200-MORE">More than 200,000</option>
          </select>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="form-group">
        <div class="col-md-6">
          <h5>Facebook page URL :</h5>
          {!! Form::text('facebookURL', null, ['class' => 'form-control', 'placeholder' => 'Facebook Page URL', 'id' => 'facebookURL']) !!}
        </div>
        <div class="col-md-6">
          <h5>Linkedin page URL :</h5>
          {!! Form::text('linkedinURL', null, ['class' => 'form-control', 'placeholder' => 'Linkedin Page URL', 'id' => 'linkedinURL']) !!}
        </div>
      </div>
    </div><hr>
    <p>Docments For verification :-</p>
    <div class="row">
      <div class="form-group">
        <div class="col-md-6">
          <h5>ID Proof:</h5>
          {!! Form::file('idProof', [''])!!}
        </div>
        <div class="col-md-6">
          <h5>Address Proof:</h5>
          {!! Form::file('addressProof', [''])!!}
        </div>
      </div>
    </div><hr>
    <p>Login Credentials :-</p>
    <div class="row">
      <div class="form-group">
        <div class="col-md-8 col-md-offset-2">
          <h5>Email<span>*</span> :</h5>
          {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email for Login', 'id' => 'email']) !!}
        </div>
        <div class="col-md-8 col-md-offset-2">
          <h5>Password<span>*</span> :</h5>
          {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password for Login', 'id' => 'password']) !!}
        </div>
        <div class="col-md-8 col-md-offset-2">
          <h5>Password Confirmation<span>*</span> :</h5>
          {!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Confirm your Password', 'id' => 'password_confirmation']) !!}
        </div>
      </div>
    </div><hr>
    {!! Form::checkbox('terms', true, null, ['id' => 'terms']) !!}<span> I accept the terms and conditions. <a href="#">Terms &amp; Conditions</a></span>
    <div class="form-group">
      {!! Form::submit('Create Your Shop', ['class' => 'btn btn-success btn-block']) !!}
    </div>
      {!! Form::close() !!}
    </div>
  </div>
@endsection
@section('scripts')
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/additional-methods.min.js"></script>
  <script src="{{ URL::asset('js/seller-registration-form.js') }}"></script>
@endsection
