@if (Session::has('success'))
  <div class="container-fluid">
    <div class="alert alert-success">
      <strong>Success:</strong> {{ Session::get('success') }}
    </div>
  </div>
@endif
@if(count($errors) > 0)
  <div class="container-fluid">
    <div class="alert alert-danger">
      <strong>Errors:</strong>
      <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
    </div>
  </div>
@endif
