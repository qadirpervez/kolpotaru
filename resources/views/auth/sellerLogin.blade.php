<!DOCTYPE html>
<html>
<head>
<title>Seller Login || Kolpotaru</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="{{ URL::asset('css/login.css') }}" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
</head>
<body class="bg agileinfo">
  <div class="container">
    <div class="col-md-6 col-md-offset-3">
      @include('partials._messages')
    </div>
  </div>
   <h1 class="white-text text-center login-please">Login Please </h1>
   <div class="w3layouts_main wrap">
        <div id="parentHorizontalTab_agile">
            <div class="resp-tabs-container hor_1">
               <div class="w3_agile_login">
                    <form action="{{ route('seller.login.submit')}}" method="post" class="agile_form">
                      {{ csrf_field() }}
					            <p>Email</p>
					            <input type="email" name="email" required="required" />
					            <p>Password</p>
					            <input type="password" name="password" required="required" class="password" />
					            <input type="submit" value="LogIn" class="agileinfo" />
					          </form><div class="clearfix"></div>
                    <a href="{{ route('seller.password.request') }}" class="forgot-password">Forgot your password</a>
              </div>
            </div>
        </div>
    </div>
</body>
</html>
