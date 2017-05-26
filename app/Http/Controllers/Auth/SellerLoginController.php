<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class SellerLoginController extends Controller
{
  public function __construct()
  {
    $this->middleware('guest:seller', ['except' => ['logout']]);
  }
  protected $guard = 'seller';
  /**
   * Create a new controller instance.
   *
   * @return void
   */

  public function showLoginForm(){
    return view('auth.sellerLogin');
  }
  public function login(Request $request){
    // Validate the form data
      $this->validate($request, [
        'email'   => 'required|email',
        'password' => 'required|min:6'
      ]);

      // Attempt to log the user in
      if (Auth::guard('seller')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
        // if successful, then redirect to their intended location
        return redirect()->intended(route('seller.dashboard'));
      }

      // if unsuccessful, then redirect back to the login with the form data
      return redirect()->back()->withInput($request->only('email', 'remember'));
  }
    public function logout()
    {
        Auth::guard('seller')->logout();
        return redirect('/');
    }
}
