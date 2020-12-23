<?php

    namespace App\Http\Controllers\property;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use Mail;
    use App\Models\Property;
    use Session;
    use Auth;

    class LoginController extends Controller
    {
        public function index()
        {
            return view('propertyAdmin.login');
        }

        public function loginUser(Request $request)
        {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required'
            ]);

            if (Auth::guard('propertyAdmin')->attempt(['email' => $request->email, 'password' => $request->password])) {
                return redirect()->route('property.index');
            } else {
                Session::flash('error', 'Wrong user details.');
                return back();
            }
        }

        public function logoutUser(Request $request)
        {
            Auth::guard('propertyAdmin')->logout();
            $request->session()->flush();
            $request->session()->regenerate();
            return redirect()->route('property.login.form');
        }
    }
